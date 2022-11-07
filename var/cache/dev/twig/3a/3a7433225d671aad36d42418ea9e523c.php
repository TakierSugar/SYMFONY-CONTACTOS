<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* lista_contacto.html.twig */
class __TwigTemplate_269b127fce365d37552487959369d000 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lista_contacto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lista_contacto.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<meta charset=\"utf-8\">
    <body>
        <h1>Ficha del contacto</h1>
        ";
        // line 6
        if ((isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <ul>
            <li><strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 8, $this->source); })()), "nombre", [], "any", false, false, false, 8), "html", null, true);
            echo "</strong></li>
            <li><strong>Teléfono: </strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 9, $this->source); })()), "telefono", [], "any", false, false, false, 9), "html", null, true);
            echo "</li>
            <li><strong>Correo: </strong>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
        </ul>
        ";
        } else {
            // line 13
            echo "            <p>Contacto no encontrado</p>
        ";
        }
        // line 15
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "lista_contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  69 => 13,  63 => 10,  59 => 9,  55 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<meta charset=\"utf-8\">
    <body>
        <h1>Ficha del contacto</h1>
        {% if contacto %}
        <ul>
            <li><strong>{{ contacto.nombre}}</strong></li>
            <li><strong>Teléfono: </strong>{{ contacto.telefono}}</li>
            <li><strong>Correo: </strong>{{ contacto.email}}</li>
        </ul>
        {% else %}
            <p>Contacto no encontrado</p>
        {% endif %}
    </body>
</html>", "lista_contacto.html.twig", "/home/alumno/Documentos/symfony-contactos/templates/lista_contacto.html.twig");
    }
}
