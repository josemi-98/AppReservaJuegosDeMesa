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

/* admin/invitacionEventos.html.twig */
class __TwigTemplate_3c6514f5d12b65e98a7160d84b848d24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invitacionEventos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invitacionEventos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/invitacionEventos.html.twig", 1);
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
<script src=\"/js/socios.js\"></script>

<script>

\$ ( document ).ready(function() {
\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/evento',
    dataType: 'json',
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

          }
            var body = \"<tr>\";
            body    += \"<td>\" + dato.id + \"</td>\";
            body    += \"<td>\" + dato.nombre + \"</td>\";
            body    += \"<td>\" + dato.descripcion + \"</td>\";
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
        // line 64
        echo "
";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "juego", [], "any", true, true, false, 65)) {
            // line 66
            echo "
<div class=\"container\">
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mb-3\">Elige el juego para el evento</h2>
            </div>
            <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6 col-12\">
                    ";
            // line 76
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_start');
            echo "
                        <div class=\"form-group mb-3\">
                                ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "juego", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                            </div>
                        </div>
                        <div class=\"col-md-6 col-12\">
                            <div class=\"form-group mb-3\">
                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "eventos", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
            echo "               
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn ";
            // line 87
            echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 87, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
            echo "  mt-3\" >";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 87, $this->source); })()), "Invitar usuarios")) : ("Invitar usuarios")), "html", null, true);
            echo "</button>
                        </div>
                ";
            // line 89
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
            </div>
    </div>

</div>


";
        } else {
            // line 99
            echo "<div class=\"container\">
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mb-3\">Crear un evento</h2>
            </div>
            <div class=\"card-body\">
<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        ";
            // line 108
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start');
            echo "
            <div class=\"form-group mb-3\">
                    ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "nombre", [], "any", false, false, false, 110), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "descripcion", [], "any", false, false, false, 115), 'row', ["attr" => ["class" => "form-control"]]);
            echo "               
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "fechaInicio", [], "any", false, false, false, 120), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
            // line 125
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "fechaFin", [], "any", false, false, false, 125), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                </div>
            </div>
            ";
            // line 133
            echo "            <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn ";
            // line 134
            echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 134, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
            echo "  mt-3\" >";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 134, $this->source); })()), "Elegir Juego")) : ("Elegir Juego")), "html", null, true);
            echo "</button>
                        </div>
    ";
            // line 136
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
            echo "
    </div>
</div>
</div>
        </div>

    </div>

    ";
        }
        // line 145
        echo "


   <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mt-5 mb-3\">Listado de Juegos y eventos</h2>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Nombre del Juego</th>
                        <th>Nombre del Evento</th>
                        
                        <th width=\"240px\">Acciones</th>
                    </tr>
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gamesEvent"]) {
            // line 163
            echo "                    <tr>
                        <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "</td>
                        <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "juego", [], "any", false, false, false, 165), "html", null, true);
            echo "</td>
                        <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "eventos", [], "any", false, false, false, 166), "html", null, true);
            echo "</td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gamesEvent_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Seguro que desea eliminar este evento? ');\">
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gamesEvents_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\">
                                    Editar
                                </a> 
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["gamesEvent"], "id", [], "any", false, false, false, 174))), "html", null, true);
            echo "\">
                                <button class=\"btn btn-outline-danger\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamesEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                </table>
            </div>
        </div>


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
            <button type=\"button\" class=\"btn-primary mb-4\" id=\"boton\">
            Guardar
            </button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!--form Modal -->
                    <div class=\"modal fade text-left\" id=\"inlineForm\" tabindex=\"-1\" aria-labelledby=\"myModalLabel33\" style=\"display: none;\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" role=\"document\">
                        <div class=\"modal-content\">



                            <div class=\"modal-header bg-light\">

                            <h4 class=\"modal-title\" id=\"myModalLabel33\">Nuevo evento </h4>
                            <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                            </button>

                            
                            </div>

                            
                            <form action=\"#\">
                            <div class=\"modal-body\">


                         
                            ";
        // line 255
        echo "



                                ";
        // line 262
        echo "





                                ";
        // line 302
        echo "                                <label for=\"nombre\">Nombre: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" placeholder=\"Nombre para el evento\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
                                </div>
                                <label for=\"ancho\">Descripcion: </label>
                                <div class=\"form-group\">
                                <input type=\"textarea\" placeholder=\"Describe brevemente el evento\" class=\"form-control\" id=\"ancho\" name=\"ancho\">
                                </div>
                                <label for=\"alto\">Fecha Inicio: </label>
                                <div class=\"form-group\">
                                <input type=\"datetime-local\" placeholder=\"hora y dia del inicio del evento\" class=\"form-control\" id=\"alto\" name=\"alto\">
                                </div>
                            </div>
                                ";
        // line 319
        echo "                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-light-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-x d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Cancelar</span>
                                </button>
                                <button type=\"button\" id=\"crear\" class=\"btn btn-primary ml-1\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-check d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Crear</span>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
<!-- fin del form Modal eventos -->







<h1 class=\"text-center mt-5 mb-3\">INVITACION A EVENTOS</h1>
<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h3 class=\"card-title text-align-center\">LISTADO DE EVENTOS</h3>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Crea un evento e invita a los particiapntes.</p>
          <a href=\"\" class=\"d-flex justify-content-end mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#inlineForm\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg>Nuevo evento</a>
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/invitacionEventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 319,  385 => 302,  377 => 262,  371 => 255,  315 => 180,  303 => 174,  297 => 171,  291 => 168,  286 => 166,  282 => 165,  278 => 164,  275 => 163,  271 => 162,  252 => 145,  240 => 136,  233 => 134,  230 => 133,  224 => 125,  216 => 120,  208 => 115,  200 => 110,  195 => 108,  184 => 99,  171 => 89,  164 => 87,  157 => 83,  149 => 78,  144 => 76,  132 => 66,  130 => 65,  127 => 64,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


<body class=\"bg-dark\">
<script src=\"/js/socios.js\"></script>

<script>

\$ ( document ).ready(function() {
\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/evento',
    dataType: 'json',
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

          }
            var body = \"<tr>\";
            body    += \"<td>\" + dato.id + \"</td>\";
            body    += \"<td>\" + dato.nombre + \"</td>\";
            body    += \"<td>\" + dato.descripcion + \"</td>\";
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

 {# {% if form is defined %}
     {{ form(form) }}
{% endif %} #}

{% if form.juego is defined   %}

<div class=\"container\">
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mb-3\">Elige el juego para el evento</h2>
            </div>
            <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-6 col-12\">
                    {{ form_start(form) }}
                        <div class=\"form-group mb-3\">
                                {{ form_row(form.juego, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-md-6 col-12\">
                            <div class=\"form-group mb-3\">
                                {{ form_row(form.eventos, {'attr': {'class': 'form-control'}}) }}               
                            </div>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Invitar usuarios') }}</button>
                        </div>
                {{ form_end(form) }}
                </div>
            </div>
            </div>
    </div>

</div>


{% else %}
<div class=\"container\">
        
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mb-3\">Crear un evento</h2>
            </div>
            <div class=\"card-body\">
<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        {{ form_start(form) }}
            <div class=\"form-group mb-3\">
                    {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.descripcion, {'attr': {'class': 'form-control'}}) }}               
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.fechaInicio, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.fechaFin, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            {# <div class=\"col-md-6 col-12 mb-3\">
                <div class=\"form-group\">
                    {{ form_row(form.invitacion, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div> #}
            <div class=\"col-12 d-flex justify-content-end\">
                            <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Elegir Juego') }}</button>
                        </div>
    {{ form_end(form) }}
    </div>
</div>
</div>
        </div>

    </div>

    {% endif %}



   <div class=\"container\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h2 class=\"text-center mt-5 mb-3\">Listado de Juegos y eventos</h2>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Nombre del Juego</th>
                        <th>Nombre del Evento</th>
                        
                        <th width=\"240px\">Acciones</th>
                    </tr>
                    {% for gamesEvent in juegos %}
                    <tr>
                        <td>{{ gamesEvent.id }}</td>
                        <td>{{ gamesEvent.juego }}</td>
                        <td>{{ gamesEvent.eventos }}</td>
                        <td>
                            <form method=\"post\" action=\"{{ path('app_gamesEvent_delete', {'id': gamesEvent.id}) }}\" onsubmit=\"return confirm('Seguro que desea eliminar este evento? ');\">
                                <a
                                    class=\"btn btn-outline-success\"
                                    href=\"{{ path('app_gamesEvents_edit', {'id': gamesEvent.id}) }}\">
                                    Editar
                                </a> 
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ gamesEvent.id) }}\">
                                <button class=\"btn btn-outline-danger\">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        </div>


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
            <button type=\"button\" class=\"btn-primary mb-4\" id=\"boton\">
            Guardar
            </button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!--form Modal -->
                    <div class=\"modal fade text-left\" id=\"inlineForm\" tabindex=\"-1\" aria-labelledby=\"myModalLabel33\" style=\"display: none;\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\" role=\"document\">
                        <div class=\"modal-content\">



                            <div class=\"modal-header bg-light\">

                            <h4 class=\"modal-title\" id=\"myModalLabel33\">Nuevo evento </h4>
                            <button type=\"button\" class=\"close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                            </button>

                            
                            </div>

                            
                            <form action=\"#\">
                            <div class=\"modal-body\">


                         
                            {# {{ form_start(form) }}
                                <div class=\"form-outline col-md-12\" required>
                                    {{ form_row(form.nombre, {'attr': {'class': 'form-control', 'type':'textarea'}})  }}
                                </div>
                                <div class=\"form-outline col-md-12\" required>
                                    {{ form_row(form.descripcion, {'attr': {'class': 'form-control'}})  }}
                                </div>
                                <div class=\"form-outline col-md-12\" required>
                                    {{ form_row(form.fechaInicio, {'attr': {'class': 'form-control'}})  }}
                                </div>
                                <div class=\"form-outline col-md-12\" required>
                                    {{ form_row(form.fechaFin, {'attr': {'class': 'form-control'}})  }}
                                </div>
                                <div class=\"form-outline col-md-12\" required>
                                    {{ form_row(form.invitacion, {'attr': {'class': 'form-control'}})  }}
                                </div>
                                <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Guardar invitacionEvento') }}</button>
            </div>

                                {{ form_end(form) }} #}




                                {# {% if form is defined %}
     {{ form(form) }}
{% endif %} #}






                                {# <div class=\"row\">
    <div class=\"col-md-6 col-12\">
        {{ form_start(form) }}
            <div class=\"form-group mb-3\">
                    {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.descripcion, {'attr': {'class': 'form-control'}}) }}               
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.fechaInicio, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.fechaFin, {'label': 'Minimo de personas','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.invitacion, {'label': 'Maximo de personas','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
           
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Guardar invitacionEvento') }}</button>
            </div>
    {{ form_end(form) }}
    </div>
</div> #}
                                <label for=\"nombre\">Nombre: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" placeholder=\"Nombre para el evento\" class=\"form-control\" id=\"nombre\" name=\"nombre\">
                                </div>
                                <label for=\"ancho\">Descripcion: </label>
                                <div class=\"form-group\">
                                <input type=\"textarea\" placeholder=\"Describe brevemente el evento\" class=\"form-control\" id=\"ancho\" name=\"ancho\">
                                </div>
                                <label for=\"alto\">Fecha Inicio: </label>
                                <div class=\"form-group\">
                                <input type=\"datetime-local\" placeholder=\"hora y dia del inicio del evento\" class=\"form-control\" id=\"alto\" name=\"alto\">
                                </div>
                            </div>
                                {# </div>
                                    <div id=\"respuesta\" class=\"alert alert-success\">

                                </div> #}
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-light-secondary\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-x d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Cancelar</span>
                                </button>
                                <button type=\"button\" id=\"crear\" class=\"btn btn-primary ml-1\" data-bs-dismiss=\"modal\">
                                <i class=\"bx bx-check d-block d-sm-none\"></i>
                                <span class=\"d-none d-sm-block\">Crear</span>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
<!-- fin del form Modal eventos -->







<h1 class=\"text-center mt-5 mb-3\">INVITACION A EVENTOS</h1>
<div class=\" row m-5 p-3\" id=\"table-striped\">
  <div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header\">
        <h3 class=\"card-title text-align-center\">LISTADO DE EVENTOS</h3>
      </div>
      <div class=\"card-content\">
        <div class=\"card-body\">
          <p class=\"card-text mb-4\">Crea un evento e invita a los particiapntes.</p>
          <a href=\"\" class=\"d-flex justify-content-end mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#inlineForm\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
  <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg>Nuevo evento</a>
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


{% endblock %}", "admin/invitacionEventos.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\admin\\invitacionEventos.html.twig");
    }
}
