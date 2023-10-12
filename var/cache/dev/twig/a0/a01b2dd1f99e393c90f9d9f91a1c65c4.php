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

/* user/eventos.html.twig */
class __TwigTemplate_d2f8730bb14f2e995228db8ce10add13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/eventos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/eventos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/eventos.html.twig", 1);
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

<body class=\"bg-dark\">

<script>

\$ ( document ).ready(function() {
      var user = 'josemi';

\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/evento',
    dataType: 'json',
    //data: {user: user}
    success: function(data) {
        \$.each(data, function(i, dato) {
          console.log(dato);
          let cadenaInicio=\"\"
          let fechaInicio ;
          if( dato.fechaInicio != null ){

             fechaInicio=new Date (dato.fechaInicio.date);
          
          cadenaInicio=\"Dia \"+(fechaInicio.getDate())+\"/\"+(fechaInicio.getMonth()+1)+\"/\"+(fechaInicio.getFullYear())+ \", \\n Hora: \" +
          (fechaInicio.getHours())+\":\" +(fechaInicio.getMinutes())+ \":\" + (fechaInicio.getSeconds());
          console.log(fechaInicio);

          }

          let cadenaFin=\"\"
          let fechafin ;
          if( dato.fechaFin != null ){

             fechaFin=new Date (dato.fechaFin.date);
          
          cadenaFin=\"Dia \"+(fechaFin.getDate())+\"/\"+(fechaFin.getMonth()+1)+\"/\"+(fechaFin.getFullYear())+ \", \\n Hora: \" +
          (fechaFin.getHours())+\":\" +(fechaFin.getMinutes())+ \":\" + (fechaFin.getSeconds());
          console.log(fechaFin);

          }
            var body = \"<tr>\";
            body    += \"<td>\" + dato.id + \"</td>\";
            body    += \"<td>\" + dato.evento_Id + \"</td>\";
            body    += \"<td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "nombre", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>\";
            body    += \"<td>\" + cadenaInicio+ \"</td>\";
            body    += \"<td>\" + cadenaFin+ \"</td>\";
            
            body    += \"</tr>\";
            \$( \"#Table tbody\" ).append(body);
        });
        /*DataTables instantiation.*/
        \$( \"#Table\" ).DataTable();
    },
    error: function() {
        alert('Fail!');
    }
});
});
</script>







 ";
        // line 70
        if (array_key_exists("form", $context)) {
            // line 71
            echo "     ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form');
            echo "
";
        }
        // line 73
        echo "



<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">EVENTOS</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Para participar en un evento tienes que pedirlo a traves del correo: josemimb@gmail.com</p>
          <a href=\"\" class=\"d-flex justify-content-end mb-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg></a>
        </div>
        <!-- table striped -->
        <div class=\"table-responsive p-5\">
          <table class=\"table table-striped  p-5\" id=\"Table\">
            <thead>
              <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"5%\">Nombre</th>
                    <th width=\"20%\">Descripcion</th>
                    <th width=\"30%\">Fecha Inicio</th>
                    <th width=\"20%\">Fecha Fin</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

";
        // line 124
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 124,  147 => 73,  141 => 71,  139 => 70,  113 => 47,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


<body class=\"bg-dark\">

<script>

\$ ( document ).ready(function() {
      var user = 'josemi';

\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/evento',
    dataType: 'json',
    //data: {user: user}
    success: function(data) {
        \$.each(data, function(i, dato) {
          console.log(dato);
          let cadenaInicio=\"\"
          let fechaInicio ;
          if( dato.fechaInicio != null ){

             fechaInicio=new Date (dato.fechaInicio.date);
          
          cadenaInicio=\"Dia \"+(fechaInicio.getDate())+\"/\"+(fechaInicio.getMonth()+1)+\"/\"+(fechaInicio.getFullYear())+ \", \\n Hora: \" +
          (fechaInicio.getHours())+\":\" +(fechaInicio.getMinutes())+ \":\" + (fechaInicio.getSeconds());
          console.log(fechaInicio);

          }

          let cadenaFin=\"\"
          let fechafin ;
          if( dato.fechaFin != null ){

             fechaFin=new Date (dato.fechaFin.date);
          
          cadenaFin=\"Dia \"+(fechaFin.getDate())+\"/\"+(fechaFin.getMonth()+1)+\"/\"+(fechaFin.getFullYear())+ \", \\n Hora: \" +
          (fechaFin.getHours())+\":\" +(fechaFin.getMinutes())+ \":\" + (fechaFin.getSeconds());
          console.log(fechaFin);

          }
            var body = \"<tr>\";
            body    += \"<td>\" + dato.id + \"</td>\";
            body    += \"<td>\" + dato.evento_Id + \"</td>\";
            body    += \"<td>{{app.user.nombre}}</td>\";
            body    += \"<td>\" + cadenaInicio+ \"</td>\";
            body    += \"<td>\" + cadenaFin+ \"</td>\";
            
            body    += \"</tr>\";
            \$( \"#Table tbody\" ).append(body);
        });
        /*DataTables instantiation.*/
        \$( \"#Table\" ).DataTable();
    },
    error: function() {
        alert('Fail!');
    }
});
});
</script>







 {% if form is defined %}
     {{ form(form) }}
{% endif %}




<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">EVENTOS</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Para participar en un evento tienes que pedirlo a traves del correo: josemimb@gmail.com</p>
          <a href=\"\" class=\"d-flex justify-content-end mb-2\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg></a>
        </div>
        <!-- table striped -->
        <div class=\"table-responsive p-5\">
          <table class=\"table table-striped  p-5\" id=\"Table\">
            <thead>
              <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"5%\">Nombre</th>
                    <th width=\"20%\">Descripcion</th>
                    <th width=\"30%\">Fecha Inicio</th>
                    <th width=\"20%\">Fecha Fin</th>
                </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

{# <td><a href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z\"/>
                    </svg></a>
                    <a href=\"#\" class=\"ms-3\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-pencil-square\" viewBox=\"0 0 16 16\">
                    <path d=\"M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z\"/>
                    <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z\"/>
                    </svg></a>
                    
                </td> #}

{% endblock %}", "user/eventos.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\user\\eventos.html.twig");
    }
}
