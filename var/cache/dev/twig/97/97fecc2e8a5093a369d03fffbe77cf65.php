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

/* user/reservas.html.twig */
class __TwigTemplate_0f224714e56cf784a2724015c00897e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/reservas.html.twig", 1);
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
        echo "<head>
        <script src=\"/js/mesa.js\"></script>
        <script src=\"/js/reserva.js\"></script>
        <script src=\"/js/calendario.js\"></script>
      


<style>
        /* #droppable { width: 800px; height: 500px; padding: 0.5em; float: left; margin: 10px; } */
        /* #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; } */
        
        .sala{
         
     position: absolute; 
    left: 0;
    top: 0; 
    width: 100%;
    height: 92%;
}

.mesa{
    /* position: absolute; */
    background-image: url( '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mesaaa.png", "imagenlogo"), "html", null, true);
        echo "');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin: 5px;
}

.contenedor{
    /* position: relative; */
    width: 100%;
    min-width: 1300px;
}





    #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { border: 5px solid;  }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 80px; font-size: 4em; text-align: center; }
  

        </style>

</head>

<body >


<script>

\$ ( document ).ready(function() {

\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/mesa',
    mimeType: 'json',
    success: function(data) {

      \$(\"#reserva\").html(data);
     // pintarResrva();
        /*DataTables instantiation.*/
       // \$( \"#Table\" ).DataTable();
    },
    error: function() {
        alert('Fail!');
    }
});


\$.ajax({
        url:\"http://127.0.0.1:8000/api/juego\",
        type:\"GET\",
        success: function(data){
          
          \$.each(data, function (key, dato){
            \$(\"<option>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#juego\"))


            \$(\"<div>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#card\"))
            
           // \$(\"#juego\").append(html);
          })
            
        }
});

\$.ajax({
        url:\"http://127.0.0.1:8000/api/mesa\",
        type:\"GET\",
        success: function(data){
          
          \$.each(data, function (key, dato){
            if(dato.x!=0 && dato.y!=0){
              \$(\"<option>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#mesa\"))
            }
          })
            
        }
});


});
  </script>

<button id=\"button\" class=\"mesa\"> </button>

<div class=\"almacen\" id=\"almacen\" name=\"almacen\" style=\"display:none\">                               
                            </div>


<div class=\" row m-5 p-3\" >

<div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header mb-5\">
        <h1 class=\"card-title text-center\">GESTION DE RESERVAS</h1>
      </div>

      
      <section id=\"basic-horizontal-layouts\" >
       <div>
            <span class=\"alert alert-info m-5\" id=\"resultado\" style=\"display:none\"></span>
        </div>
    <div class=\"row match-height p-3 mt-2\">

   
        <div class=\"col-md-2 col-12\">
        <div class=\"card\">
        
            <div class=\"card-header \">
            
            <h4 class=\"card-title\">HAZ TU RESERVA 

            </h4>

            
            </div>
            <div class=\"card-content \">
            <div class=\"card-body\" >



            <div id=\"formulario\">

            <form method=\"post\" id=\"formdata\">

            <div class=\" form-group mb-3 border-bottom\">
                          <label for=\"hasta\">Ver mesas para el dia:</label>
                            <input type=\"text\" id=\"desde\" class=\"form-control mb-3\" name=\"horaInicio\" placeholder=\"Elige un dia\">
                        </div>

                ";
        // line 162
        echo "
                <label class=\"mb-2\"> Eligue tu juego: </label>

                <select class=\"form-control mb-3\" name=\"juego\" id=\"juego\" >
                    <option value=\"\">Seleccione:</option>
                </select>

               
                  <label class=\"mb-2\"> Eligue tu mesa: </label>

                <select class=\"form-control mb-3\" name=\"mesa\" id=\"mesa\" >
                    <option value=\"\">Seleccione:</option>
                </select>


                <label class=\"mb-2\"> Hora de inicio:</label>

                <input type=\"text\" class=\"form-control mb-3\" name=\"fechaInicio\" id=\"fechaInicio\" value=\"\" />

                <label class=\"mb-2\"> Hora de fin:</label>

                <input type=\"text\" class=\"form-control mb-3\" name=\"fecha\" id=\"fechaFin\" value=\"\" />

                <label class=\"mb-2\">  Participantes que van asistir:</label>

                <input type=\"text\" class=\"form-control mb-3\" id=\"participantes\"/>

                ";
        // line 190
        echo "
";
        // line 192
        echo "
<input type=\"button\" id=\"reservar\" class=\"btn btn-primary\" href=\"javascript:;\" onclick=\"realizaProceso(\$('#nombre').val(),\$('#fechaInicio').val(),\$('#fechaFin').val(), \$('#participantes').val());return false;\" value=\"Guardar Reserva\"/>
                

            </form>
            </div>
             
            </div>
            </div>
        </div>
        </div>
        <div class=\"col-md-10 col-12\">

        
        <div class=\"card\">
        
            <div class=\"card-header\">
            <h4 class=\"card-title\">SALA</h4>

            <div class=\"col-md-4\">

              <!-- guardamos la informacion de la sala -->
             
                        
                        
                        ";
        // line 220
        echo "                      </div>
                           

                        

            </div>
            <div class=\"card-content\">
            
            <div class=\"card-body\" style=\"height:600px\" id=\"contenedor\">

                            <div id=\"sala\" class=\"sala mt-5\">
                                
                            
                            </div>
                        </div>                  
                </div>
            </div>
            </div>                     
        </div>
        </div>
    </div>
    </section>
    </div>
     
</div>

</div>





<script>
function realizaProceso(nombre, fechaInicio, fechaFin, participantes){
        var parametros = {
                \"nombre\" : nombre,
                \"fechaInicio\" : fechaInicio,
                \"fechaFin\" : fechaFin,
                \"participantes\" : participantes,
                // \"juego\" : juego,
                // \"mesa\" : mesa,
                


        };
        \$.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'http://127.0.0.1:8000/api/reserva', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        \$(\"#resultado\").html(\"Procesando, espere por favor...\");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        \$(\"#resultado\").css({'display':'inline'}).html(response);
                        //\$(\"#formulario\");   // Hacemos desaparecer el div \"formulario\" con un efecto fadeOut lento.
                
                }
        });
}
</script>
</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 220,  260 => 192,  257 => 190,  228 => 162,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<head>
        <script src=\"/js/mesa.js\"></script>
        <script src=\"/js/reserva.js\"></script>
        <script src=\"/js/calendario.js\"></script>
      


<style>
        /* #droppable { width: 800px; height: 500px; padding: 0.5em; float: left; margin: 10px; } */
        /* #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; } */
        
        .sala{
         
     position: absolute; 
    left: 0;
    top: 0; 
    width: 100%;
    height: 92%;
}

.mesa{
    /* position: absolute; */
    background-image: url( '{{ asset('mesaaa.png', 'imagenlogo') }}');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin: 5px;
}

.contenedor{
    /* position: relative; */
    width: 100%;
    min-width: 1300px;
}





    #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { border: 5px solid;  }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 80px; font-size: 4em; text-align: center; }
  

        </style>

</head>

<body >


<script>

\$ ( document ).ready(function() {

\$.ajax({
    type: 'GET',
    url: 'http://127.0.0.1:8000/api/mesa',
    mimeType: 'json',
    success: function(data) {

      \$(\"#reserva\").html(data);
     // pintarResrva();
        /*DataTables instantiation.*/
       // \$( \"#Table\" ).DataTable();
    },
    error: function() {
        alert('Fail!');
    }
});


\$.ajax({
        url:\"http://127.0.0.1:8000/api/juego\",
        type:\"GET\",
        success: function(data){
          
          \$.each(data, function (key, dato){
            \$(\"<option>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#juego\"))


            \$(\"<div>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#card\"))
            
           // \$(\"#juego\").append(html);
          })
            
        }
});

\$.ajax({
        url:\"http://127.0.0.1:8000/api/mesa\",
        type:\"GET\",
        success: function(data){
          
          \$.each(data, function (key, dato){
            if(dato.x!=0 && dato.y!=0){
              \$(\"<option>\").val(dato.id).text(dato.nombre).appendTo(\$(\"#mesa\"))
            }
          })
            
        }
});


});
  </script>

<button id=\"button\" class=\"mesa\"> </button>

<div class=\"almacen\" id=\"almacen\" name=\"almacen\" style=\"display:none\">                               
                            </div>


<div class=\" row m-5 p-3\" >

<div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header mb-5\">
        <h1 class=\"card-title text-center\">GESTION DE RESERVAS</h1>
      </div>

      
      <section id=\"basic-horizontal-layouts\" >
       <div>
            <span class=\"alert alert-info m-5\" id=\"resultado\" style=\"display:none\"></span>
        </div>
    <div class=\"row match-height p-3 mt-2\">

   
        <div class=\"col-md-2 col-12\">
        <div class=\"card\">
        
            <div class=\"card-header \">
            
            <h4 class=\"card-title\">HAZ TU RESERVA 

            </h4>

            
            </div>
            <div class=\"card-content \">
            <div class=\"card-body\" >



            <div id=\"formulario\">

            <form method=\"post\" id=\"formdata\">

            <div class=\" form-group mb-3 border-bottom\">
                          <label for=\"hasta\">Ver mesas para el dia:</label>
                            <input type=\"text\" id=\"desde\" class=\"form-control mb-3\" name=\"horaInicio\" placeholder=\"Elige un dia\">
                        </div>

                {# <label class=\"mb-2\">Nombre de la reserva</label>

                <input type=\"text\" class=\"form-control mb-3\" id=\"nombre\" /> #}

                <label class=\"mb-2\"> Eligue tu juego: </label>

                <select class=\"form-control mb-3\" name=\"juego\" id=\"juego\" >
                    <option value=\"\">Seleccione:</option>
                </select>

               
                  <label class=\"mb-2\"> Eligue tu mesa: </label>

                <select class=\"form-control mb-3\" name=\"mesa\" id=\"mesa\" >
                    <option value=\"\">Seleccione:</option>
                </select>


                <label class=\"mb-2\"> Hora de inicio:</label>

                <input type=\"text\" class=\"form-control mb-3\" name=\"fechaInicio\" id=\"fechaInicio\" value=\"\" />

                <label class=\"mb-2\"> Hora de fin:</label>

                <input type=\"text\" class=\"form-control mb-3\" name=\"fecha\" id=\"fechaFin\" value=\"\" />

                <label class=\"mb-2\">  Participantes que van asistir:</label>

                <input type=\"text\" class=\"form-control mb-3\" id=\"participantes\"/>

                {# <button type=\"button\" id=\"btnEnviar\"> Gurdar reserva </button> #}

{# <input type=\"button\" href=\"javascript:;\" onclick=\"realizaProceso(\$('#nombre').val(), \$('#juego').val(),\$('#mesa').val(),\$('#fechaInicio').val(),\$('#fechaFin').val(),\$('#participantes').val());return false;\" value=\"Guardar Reserva\"/> #}

<input type=\"button\" id=\"reservar\" class=\"btn btn-primary\" href=\"javascript:;\" onclick=\"realizaProceso(\$('#nombre').val(),\$('#fechaInicio').val(),\$('#fechaFin').val(), \$('#participantes').val());return false;\" value=\"Guardar Reserva\"/>
                

            </form>
            </div>
             
            </div>
            </div>
        </div>
        </div>
        <div class=\"col-md-10 col-12\">

        
        <div class=\"card\">
        
            <div class=\"card-header\">
            <h4 class=\"card-title\">SALA</h4>

            <div class=\"col-md-4\">

              <!-- guardamos la informacion de la sala -->
             
                        
                        
                        {# <div class=\"col-sm-12 d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\" id=\"guardar\">Guardar</button>
                        </div> #}
                      </div>
                           

                        

            </div>
            <div class=\"card-content\">
            
            <div class=\"card-body\" style=\"height:600px\" id=\"contenedor\">

                            <div id=\"sala\" class=\"sala mt-5\">
                                
                            
                            </div>
                        </div>                  
                </div>
            </div>
            </div>                     
        </div>
        </div>
    </div>
    </section>
    </div>
     
</div>

</div>





<script>
function realizaProceso(nombre, fechaInicio, fechaFin, participantes){
        var parametros = {
                \"nombre\" : nombre,
                \"fechaInicio\" : fechaInicio,
                \"fechaFin\" : fechaFin,
                \"participantes\" : participantes,
                // \"juego\" : juego,
                // \"mesa\" : mesa,
                


        };
        \$.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'http://127.0.0.1:8000/api/reserva', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        \$(\"#resultado\").html(\"Procesando, espere por favor...\");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        \$(\"#resultado\").css({'display':'inline'}).html(response);
                        //\$(\"#formulario\");   // Hacemos desaparecer el div \"formulario\" con un efecto fadeOut lento.
                
                }
        });
}
</script>
</body>

{% endblock %}", "user/reservas.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\user\\reservas.html.twig");
    }
}
