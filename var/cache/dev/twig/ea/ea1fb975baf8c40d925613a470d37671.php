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

/* partials/datos_contacto.html.twig */
class __TwigTemplate_f44748f7b866f6f411120374ca95bd55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/datos_contacto.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/datos_contacto.html.twig"));

        // line 1
        echo "<ul>
    <li><strong>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 2, $this->source); })()), "nombre", [], "any", false, false, false, 2), "html", null, true);
        echo "</strong></li>
    <li><strong>Teléfono:</strong> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 3, $this->source); })()), "telefono", [], "any", false, false, false, 3), "html", null, true);
        echo "</li>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 4, $this->source); })()), "provincia", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <li><strong>Provincia:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 5, $this->source); })()), "provincia", [], "any", false, false, false, 5), "nombre", [], "any", false, false, false, 5), "html", null, true);
            echo "</li>
    ";
        }
        // line 7
        echo "    <li><strong>Correo:</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contacto"]) || array_key_exists("contacto", $context) ? $context["contacto"] : (function () { throw new RuntimeError('Variable "contacto" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), "html", null, true);
        echo "</li>
</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/datos_contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  56 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li><strong>{{ contacto.nombre }}</strong></li>
    <li><strong>Teléfono:</strong> {{ contacto.telefono }}</li>
    {% if contacto.provincia %}
    <li><strong>Provincia:</strong> {{ contacto.provincia.nombre }}</li>
    {% endif %}
    <li><strong>Correo:</strong> {{ contacto.email }}</li>
</ul>", "partials/datos_contacto.html.twig", "/home/alumno/Documentos/symfony-contactos/templates/partials/datos_contacto.html.twig");
    }
}
