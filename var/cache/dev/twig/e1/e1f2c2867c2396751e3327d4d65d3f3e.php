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

/* juego/show.html.twig */
class __TwigTemplate_19243d975fda1feb427ebb215367ac6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juego/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juego/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "juego/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "juego";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Informacion del juego:</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juego_index");
        echo "\"> 
                    Mantenimiento juego
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Nombre:</b>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Ancho:</b>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 19, $this->source); })()), "ancho", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Alto:</b>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 21, $this->source); })()), "alto", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Minimo de personas:</b>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 23, $this->source); })()), "minPerson", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Maximo de personas:</b>
                <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 25, $this->source); })()), "maxPerson", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Imagen:</b>
                <p> <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 27, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["juego"]) || array_key_exists("juego", $context) ? $context["juego"] : (function () { throw new RuntimeError('Variable "juego" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), "html", null, true);
        echo "\" height=\"150px\" width=\"200\"> </p>

                ";
        // line 33
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "juego/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  128 => 27,  123 => 25,  118 => 23,  113 => 21,  108 => 19,  103 => 17,  94 => 11,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
  
{% block title %}juego{% endblock %}
  
{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Informacion del juego:</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"{{ path('app_juego_index') }}\"> 
                    Mantenimiento juego
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Nombre:</b>
                <p>{{ juego.nombre }}</p>
                <b class=\"text-muted\">Ancho:</b>
                <p>{{ juego.ancho }}</p>
                <b class=\"text-muted\">Alto:</b>
                <p>{{ juego.alto }}</p>
                <b class=\"text-muted\">Minimo de personas:</b>
                <p>{{ juego.minPerson }}</p>
                <b class=\"text-muted\">Maximo de personas:</b>
                <p>{{ juego.maxPerson }}</p>
                <b class=\"text-muted\">Imagen:</b>
                <p> <img src=\"{{ vich_uploader_asset(juego, 'imageFile') }}\" alt=\"{{juego.nombre}}\" height=\"150px\" width=\"200\"> </p>

                {# <b class=\"text-muted\">Date Created:</b>
                <p>{{ juego.createdAt ? juego.createdAt|date('Y-m-d H:i:s') : '' }}</p>
                <b class=\"text-muted\">Date Updated:</b>
                <p>{{ juego.updatedAt ? juego.updatedAt|date('Y-m-d H:i:s') : '' }}</p> #}
            </div>
        </div>
    </div>
{% endblock %}
", "juego/show.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\juego\\show.html.twig");
    }
}
