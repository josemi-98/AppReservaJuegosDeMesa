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

/* admin/gestionMesas.html.twig */
class __TwigTemplate_27a6a97e97f1b40df909a3a53a02b515 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionMesas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gestionMesas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/gestionMesas.html.twig", 1);
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


        <script src=\"/js/Mesa.js\"></script>
        <script src=\"/js/formMesa.js\"></script>
        <script src=\"/js/calendario.js\"></script>
        
    


<style>
        #droppable { width: 800px; height: 500px; padding: 0.5em; float: left; margin: 10px; }
        #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
        
        .sala{
    /* position: absolute; */
    left: 0;
    top: 0;
    width: 800px;
    height: 600px;
    /* overflow: scroll; */
    /* overflow-y: auto; */
}

.mesa{
    /* position: absolute; */
    background-image: url( '";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mesaaa.png", "imagenlogo"), "html", null, true);
        echo "');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin: 5px;
}

.contenedor{
    position: relative;
    width: 100%;
    /* min-width: 1300px; */
}

.almacen{
    /*//con flex*/
    /* position: flex; */
    /*left: 1000px;*/ 
    top: 0;
  /* border: 1px solid;*/
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    scroll-behavior: smooth;
}


    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }

        </style>

</head>

<body >


";
        // line 74
        echo "<div id=\"dialog-form\" title=\"Crear nueva mesa\">
  <p class=\"validateTips\">Todos los campos son requeridos</p>
 
  <form>
    <fieldset>
      <label for=\"nombre\">nombre</label>
      <input type=\"text\" nombre=\"nombre\" id=\"nombre\" value=\"mesa1\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"ancho\">ancho</label>
      <input type=\"text\" nombre=\"ancho\" id=\"ancho\" value=\"150\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"alto\">alto</label>
      <input type=\"text\" nombre=\"alto\" id=\"alto\" value=\"150\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>

  <div id=\"respuesta\">
  </div>
</div>

  
";
        // line 97
        echo "


<div class=\" row m-5 p-3\" >

<div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header mb-5\">
        <h1 class=\"card-title text-center\">GESTION DE RESERVAS</h1>
      </div>

      
      <section id=\"basic-horizontal-layouts\" >
    <div class=\"row match-height p-3\">
        <div class=\"col-md-4 col-12\">
        <div class=\"card\">
        
            <div class=\"card-header \">
            
            <h4 class=\"card-title\">ALMACEN   

              <button id=\"create-mesa\" class=\"mt-4 d-flex align-item-center border-0\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
              <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
              <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
              </svg> Nueva mesa</button>


              ";
        // line 125
        echo "            </h4>

            
            </div>
            <div class=\"card-content \">
            <div class=\"card-body\" style=\"height:600px;\">

            ";
        // line 136
        echo "               
                 <div class=\"almacen\" id=\"almacen\" name=\"almacen\">                               
                            </div>
            </div>
            </div>
        </div>
        </div>
        <div class=\"col-md-8 col-12\">

        
        <div class=\"card\">
            <div class=\"card-header\">
            <h4 class=\"card-title\">SALA</h4>

            <div class=\"col-md-4\">
                           

                        

            </div>
            <div class=\"card-content\">
            
            <div class=\"card-body\" style=\"height:600px\" id=\"contenedor\">

                            <div id=\"sala\" class=\"sala \"></div>

                        </div>
                  ";
        // line 165
        echo "                  <!-- <p>accept: &apos;#draggable&apos;</p> -->
                </div>
            </div>
            </div>
                      <!-- guardamos la informacion de la sala -->
                      <div class=\"mt-4\">
                        <label for=\"desde\">Guardar para el dia:</label>
                        </div>
                        <div class=\"col-md-8 form-group mb-3\">
                            <input type=\"text\" id=\"desde\" class=\"form-control\" name=\"horaInicio\" placeholder=\"Guarda tu sala\">
                        </div>
                        
                        <div class=\"col-sm-12 d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\" id=\"guardar\">Guardar</button>
                        </div>
                      </div>
        </div>
        </div>
    </div>
    </section>
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
        return "admin/gestionMesas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 165,  204 => 136,  195 => 125,  166 => 97,  142 => 74,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<head>


        <script src=\"/js/Mesa.js\"></script>
        <script src=\"/js/formMesa.js\"></script>
        <script src=\"/js/calendario.js\"></script>
        
    


<style>
        #droppable { width: 800px; height: 500px; padding: 0.5em; float: left; margin: 10px; }
        #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
        
        .sala{
    /* position: absolute; */
    left: 0;
    top: 0;
    width: 800px;
    height: 600px;
    /* overflow: scroll; */
    /* overflow-y: auto; */
}

.mesa{
    /* position: absolute; */
    background-image: url( '{{ asset('mesaaa.png', 'imagenlogo') }}');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    margin: 5px;
}

.contenedor{
    position: relative;
    width: 100%;
    /* min-width: 1300px; */
}

.almacen{
    /*//con flex*/
    /* position: flex; */
    /*left: 1000px;*/ 
    top: 0;
  /* border: 1px solid;*/
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    scroll-behavior: smooth;
}


    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }

        </style>

</head>

<body >


{# Modal dialog con jquery  #}
<div id=\"dialog-form\" title=\"Crear nueva mesa\">
  <p class=\"validateTips\">Todos los campos son requeridos</p>
 
  <form>
    <fieldset>
      <label for=\"nombre\">nombre</label>
      <input type=\"text\" nombre=\"nombre\" id=\"nombre\" value=\"mesa1\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"ancho\">ancho</label>
      <input type=\"text\" nombre=\"ancho\" id=\"ancho\" value=\"150\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"alto\">alto</label>
      <input type=\"text\" nombre=\"alto\" id=\"alto\" value=\"150\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>

  <div id=\"respuesta\">
  </div>
</div>

  
{# <button id=\"create-mesa\">Crear nueva mesa</button> #}



<div class=\" row m-5 p-3\" >

<div class=\"col-12\">
    <div class=\"card shadow-lg mb-5 bg-body rounded\">
      <div class=\"card-header mb-5\">
        <h1 class=\"card-title text-center\">GESTION DE RESERVAS</h1>
      </div>

      
      <section id=\"basic-horizontal-layouts\" >
    <div class=\"row match-height p-3\">
        <div class=\"col-md-4 col-12\">
        <div class=\"card\">
        
            <div class=\"card-header \">
            
            <h4 class=\"card-title\">ALMACEN   

              <button id=\"create-mesa\" class=\"mt-4 d-flex align-item-center border-0\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-plus-circle\" viewBox=\"0 0 16 16\">
              <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
              <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
              </svg> Nueva mesa</button>


              {# <button type=\"button\" id=\"crear\"> crear </button> #}
            </h4>

            
            </div>
            <div class=\"card-content \">
            <div class=\"card-body\" style=\"height:600px;\">

            {# <div class=\"almacen\" id=\"almacen1\">
                                <div class=\"mesa\" id=\"ancho\"></div>
       
                            </div> #}
               
                 <div class=\"almacen\" id=\"almacen\" name=\"almacen\">                               
                            </div>
            </div>
            </div>
        </div>
        </div>
        <div class=\"col-md-8 col-12\">

        
        <div class=\"card\">
            <div class=\"card-header\">
            <h4 class=\"card-title\">SALA</h4>

            <div class=\"col-md-4\">
                           

                        

            </div>
            <div class=\"card-content\">
            
            <div class=\"card-body\" style=\"height:600px\" id=\"contenedor\">

                            <div id=\"sala\" class=\"sala \"></div>

                        </div>
                  {# <div id=\"droppable\" class=\"ui-widget-header\">
                  <div class=\"element\"></div> #}
                  <!-- <p>accept: &apos;#draggable&apos;</p> -->
                </div>
            </div>
            </div>
                      <!-- guardamos la informacion de la sala -->
                      <div class=\"mt-4\">
                        <label for=\"desde\">Guardar para el dia:</label>
                        </div>
                        <div class=\"col-md-8 form-group mb-3\">
                            <input type=\"text\" id=\"desde\" class=\"form-control\" name=\"horaInicio\" placeholder=\"Guarda tu sala\">
                        </div>
                        
                        <div class=\"col-sm-12 d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\" id=\"guardar\">Guardar</button>
                        </div>
                      </div>
        </div>
        </div>
    </div>
    </section>
    </div>
     
</div>

</div>
</body>

{% endblock %}", "admin/gestionMesas.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\admin\\gestionMesas.html.twig");
    }
}
