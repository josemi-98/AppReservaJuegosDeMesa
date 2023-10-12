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

/* admin/invitaUsuario.html.twig */
class __TwigTemplate_bf8d6cde38748e5319a2229577e41fcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invitaUsuario.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invitaUsuario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/invitaUsuario.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<script src=\"/js/socios.js\"></script>

<body>

    <div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">Listado de socios</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text\">Selecciona los socios que quieres invitar al evento</p>
        </div>
        <!-- table striped -->
        <div class=\"table-responsive p-5\">
        <div id=\"container\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitacionEventos");
        echo "\" type=\"button\" class=\"btn-primary mb-4\" id=\"boton\">
            Guardar evento
            </a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/invitaUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<script src=\"/js/socios.js\"></script>

<body>

    <div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">Listado de socios</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text\">Selecciona los socios que quieres invitar al evento</p>
        </div>
        <!-- table striped -->
        <div class=\"table-responsive p-5\">
        <div id=\"container\">
            <a href=\"{{path('invitacionEventos')}}\" type=\"button\" class=\"btn-primary mb-4\" id=\"boton\">
            Guardar evento
            </a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>


{% endblock %}", "admin/invitaUsuario.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\admin\\invitaUsuario.html.twig");
    }
}
