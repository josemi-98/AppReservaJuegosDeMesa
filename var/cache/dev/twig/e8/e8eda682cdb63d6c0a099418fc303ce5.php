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

/* admin/calendario.html.twig */
class __TwigTemplate_e08fe4dfb458082dd5e342bc7c8fedd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendario.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendario.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/calendario.html.twig", 1);
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
\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/reserva',
    mimeType: 'json',
    success: function(data) {

        \$.each(data, function(i, dato) {
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
            body    += \"<td>\" + dato.nombre + \"</td>\";
            body    += \"<td>\" + cadenaInicio + \"</td>\";
            body    += \"<td>\" + cadenaFin + \"</td>\";
            body    += \"<td>\" + dato.participantes + \"</td>\";
            body    += \"<td>\" + dato.juego + \"</td>\";
            body    += \"<td>\" + dato.mesa + \"</td>\";
            body    += \"<td>\" + dato.user + \"</td>\";
            
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

<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">Calendario de reservas</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Las reservas para este dia son.</p>
          
        </div>
        
          <div class=\"col-md-12 p-3\">
            <table id=\"Table\" class=\"table table-sm table-striped\">
              <thead>
                <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"5%\">Nombre</th>
                    <th width=\"20%\">Fecha Inicio</th>
                    <th width=\"30%\">Fecha Fin</th>
                    <th width=\"20%\">Participantes</th>
                    <th width=\"20%\">Juego</th>
                    <th width=\"20%\">Mesa</th>
                    <th width=\"20%\">Usuario</th>
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/calendario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<body class=\"bg-dark\">


<script>

\$ ( document ).ready(function() {
\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/reserva',
    mimeType: 'json',
    success: function(data) {

        \$.each(data, function(i, dato) {
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
            body    += \"<td>\" + dato.nombre + \"</td>\";
            body    += \"<td>\" + cadenaInicio + \"</td>\";
            body    += \"<td>\" + cadenaFin + \"</td>\";
            body    += \"<td>\" + dato.participantes + \"</td>\";
            body    += \"<td>\" + dato.juego + \"</td>\";
            body    += \"<td>\" + dato.mesa + \"</td>\";
            body    += \"<td>\" + dato.user + \"</td>\";
            
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

<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h1 class=\"card-title\">Calendario de reservas</h1>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Las reservas para este dia son.</p>
          
        </div>
        
          <div class=\"col-md-12 p-3\">
            <table id=\"Table\" class=\"table table-sm table-striped\">
              <thead>
                <tr>
                    <th width=\"5%\">ID</th>
                    <th width=\"5%\">Nombre</th>
                    <th width=\"20%\">Fecha Inicio</th>
                    <th width=\"30%\">Fecha Fin</th>
                    <th width=\"20%\">Participantes</th>
                    <th width=\"20%\">Juego</th>
                    <th width=\"20%\">Mesa</th>
                    <th width=\"20%\">Usuario</th>
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

{% endblock %}", "admin/calendario.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\admin\\calendario.html.twig");
    }
}
