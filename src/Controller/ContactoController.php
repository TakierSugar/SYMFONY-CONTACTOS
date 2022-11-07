<?php
namespace App\Controller;

use App\Entity\Contacto;
use App\Entity\Contactos;
use App\Entity\Provincia;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function PHPUnit\Framework\returnSelf;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ContactoType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ContactoController extends AbstractController
{

    private $contactos = [
        1 => ["nombre" => "Juan Pérez", "telefono" => "524142432", "email" => "juanp@ieselcaminas.org"],
        2 => ["nombre" => "Ana López", "telefono" => "58958448", "email" => "anita@ieselcaminas.org"],
        5 => ["nombre" => "Mario Montero", "telefono" => "5326824", "email" => "mario.mont@ieselcaminas.org"],
        7 => ["nombre" => "Laura Martínez", "telefono" => "42898966", "email" => "lm2000@ieselcaminas.org"],
        9 => ["nombre" => "Nora Jover", "telefono" => "54565859", "email" => "norajover@ieselcaminas.org"]
    ];
    /**

* @Route("/contacto/nuevo", name="nuevo_contacto")

*/

public function nuevo(ManagerRegistry $doctrine, Request $request) {
    $contacto = new Contacto();
    $formulario = $this->createForm(ContactoType::class, $contacto);
    $formulario->handleRequest($request);
    if ($formulario->isSubmitted() && $formulario->isValid()) {
        $contacto = $formulario->getData();
        $entityManager = $doctrine->getManager();
        $entityManager->persist($contacto);
        $entityManager->flush();
        return $this->redirectToRoute('ficha_contacto', ["codigo" => $contacto->getId()]);
    }
    return $this->render('nuevo.html.twig', array(
        'formulario' => $formulario->createView()
    ));
}
/**
* @Route("/contacto/editar/{codigo}", name="editar_contacto",requirements={"codigo"="\d+"})
*/
public function editar(ManagerRegistry $doctrine, Request $request, $codigo) {
    $repositorio = $doctrine->getRepository(Contacto::class);
    $contacto = $repositorio->find($codigo);
    if ($contacto){
        $formulario = $this->createForm(ContactoType::class, $contacto);
        $formulario->handleRequest($request);
        if ($formulario->isSubmitted() && $formulario->isValid()) {
            $contacto = $formulario->getData();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($contacto);
            $entityManager->flush();
            return $this->redirectToRoute('ficha_contacto', ["codigo" => $contacto->getId()]);
        }
        return $this->render('nuevo.html.twig', array(
            'formulario' => $formulario->createView()
        ));
    }else{
        return $this->render('ficha_contacto.html.twig', [
            'contacto' => NULL
        ]);
    }
}
    /**
     * @Route("/contacto/insertar", name="insertar contacto")
     */
    public function insertar(ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine -> getManager();
        foreach ($this->contactos as $c){
            $contacto = new Contacto();
            $contacto ->setNombre($c["nombre"]);
            $contacto ->setTelefono($c["telefono"]);
            $contacto ->setEmail($c["email"]);
            $entityManager->persist($contacto);
        }
        try
        {
            $entityManager->flush();
            return new Response("Contactos insertados");
        } catch (\Exception $e) {
            return new Response("Error insertando objetos");
        }
    }
    /**
     * @Route("/contacto/buscar/{texto}", name="buscar_contacto")
     */
    public function buscar(ManagerRegistry $doctrine, $texto): Response{
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contactos = $repositorio->findByName($texto);
        return $this->render('lista_contactos.html.twig', [
            'contactos' => $contactos
        ]);
    }
    /**
     * @Route("/contacto/{codigo}", name="ficha_contacto")
     */
    public function ficha($codigo): Response{
        $resultado = ($this->contactos[$codigo] ?? null);
        
        return $this->render('ficha_contacto.html.twig', [
            'contacto' => $resultado
        ]);
    }   
    /**
     * @Route("/contacto/update/{id}/{nombre}", name="modificar_contacto")
     */
    public function update(ManagerRegistry $doctrine, $id, $nombre): Response{
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contacto = $repositorio->find($id);
        if ($contacto){
            $contacto->setNombre($nombre);
            try
            {
                $entityManager->flush();
                return $this->render('ficha_contacto.html.twig', [
                    'contacto' => $contacto
                ]);
            } catch (\Exception $e) {
                return new Response("Error insertando objetos");
            }
        }else
            return $this->render('ficha_contacto.html.twig', [
                'contacto' => null
            ]);
    }
    /**
     * @Route("/contacto/insertarSinProvincia", name="insertar_sin_provincia_contacto")
     */
    public function insertarSinProvincia(ManagerRegistry $doctrine): Response{
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(Provincia::class);

        $provincia = $repositorio->findOneBy(["nombre" => "Alicante"]);

        $contacto = new Contacto();

        $contacto->setNombre("Inserción de prueba con provincia");
        $contacto->setTelefono("900220022");
        $contacto->setEmail("Insercion.de.prueba.provincia@contacto.es");
        $contacto->setProvincia($provincia);

        $entityManager->persist($contacto);

        $entityManager->flush();
        return $this->render('ficha_contacto.html.twig', [
            'contacto' => $contacto
        ]);
    }
    /**
     * @Route("/contacto/insertarConProvincia", name="insertar_con_provincia_contacto")
     */
    public function insertarConProvincia(ManagerRegistry $doctrine): Response{
        $entityManager = $doctrine->getManager();
         
        $provincia = new Provincia();

        $provincia ->setNombre("Alicante");
        $contacto = new Contacto();

        $contacto->setNombre("Inserción de prueba con provincia");
        $contacto->setTelefono("900220022");
        $contacto->setEmail("Insercion.de.prueba.provincia@contacto.es");
        $contacto->setProvincia($provincia);

        $entityManager->persist($provincia);
        $entityManager->persist($contacto);

        $entityManager->flush();
        return $this->render('ficha_contacto.html.twig', [
            'contacto' => $contacto
        ]);        
    }
    /**
     * @Route("/contacto/delete/{id}", name="eliminar_contacto")
     */
    public function delete(ManagerRegistry $doctrine, $id): Response{
        $entityManager = $doctrine->getManager();
        $repositorio = $doctrine->getRepository(Contacto::class);
        $contacto = $repositorio->find($id);
        if ($contacto) {
            try {
                $entityManager->remove($contacto);
                $entityManager->flush();
                return new Response("Contacto eliminado");
            } catch (\Exception $e) {
                return new Response("Error eliminado objeto");
            }
        }else
        return $this-> render('ficha_contacto.html.twig', [
            'contacto' => null
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
      // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
             'last_username' => $lastUsername,
             'error'         => $error,
        ]);
    }
    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout(): void
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
?>
        