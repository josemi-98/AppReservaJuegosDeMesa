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

/* juegos.html.twig */
class __TwigTemplate_1fc6122bf294a6f8f5093956ef093d6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juegos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juegos.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/css/main.css\" rel=\"stylesheet\"/>

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style> 
.div {
  background-color: yellow;
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}
</style>
</head>

<body>

<div>
</div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top mb-5 \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"#\">Xocas CIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landingPage");
        echo "\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("juegos");
        echo "\">Juegos</a></li>
          <li><a class=\"getstarted scrollto\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Iniciar Sesion</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "
";
        // line 81
        echo "


<div class=\"container mt-5 \" style=\"margin-top:300px\">
  <div class=\"row row-cols-2 \">

";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["juegos"]) || array_key_exists("juegos", $context) ? $context["juegos"] : (function () { throw new RuntimeError('Variable "juegos" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
            // line 88
            echo "    <div class=\"card m-5 card--aumenta div\" style=\"width: 18rem; \">
  <img class=\"mt-2\" src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["juego"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 89), "html", null, true);
            echo "\" height=\"100%\" width=\"100%\">
  <div class=\"card-body\">
    <h2 class=\"card-title\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "nombre", [], "any", false, false, false, 91), "html", null, true);
            echo "</h2>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div> Minimo de jugadores: ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "minPerson", [], "any", false, false, false, 93), "html", null, true);
            echo "</div>
                        <div> Maximo de jugadores: ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["juego"], "maxPerson", [], "any", false, false, false, 94), "html", null, true);
            echo "</div>
    <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary\">Jugar</a>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
</div>
</div>




    
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "juegos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 99,  189 => 95,  185 => 94,  181 => 93,  176 => 91,  169 => 89,  166 => 88,  162 => 87,  154 => 81,  151 => 79,  132 => 78,  121 => 70,  117 => 69,  113 => 68,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>OnePage Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">
  <link href=\"assets/css/main.css\" rel=\"stylesheet\"/>

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style> 
.div {
  background-color: yellow;
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
  from {background-color: red;}
  to {background-color: yellow;}
}
</style>
</head>

<body>

<div>
</div>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top mb-5 \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"#\">Xocas CIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"{{path('landingPage')}}\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ path('juegos') }}\">Juegos</a></li>
          <li><a class=\"getstarted scrollto\" href=\"{{ path('app_login') }}\">Iniciar Sesion</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
{% block body %}

{# Mensajes de informacion al usuario, en este caso el juego creado #}



<div class=\"container mt-5 \" style=\"margin-top:300px\">
  <div class=\"row row-cols-2 \">

{% for juego in juegos %}
    <div class=\"card m-5 card--aumenta div\" style=\"width: 18rem; \">
  <img class=\"mt-2\" src=\"{{ vich_uploader_asset(juego, 'imageFile') }}\" alt=\"{{juego.nombre}}\" height=\"100%\" width=\"100%\">
  <div class=\"card-body\">
    <h2 class=\"card-title\">{{ juego.nombre }}</h2>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div> Minimo de jugadores: {{ juego.minPerson }}</div>
                        <div> Maximo de jugadores: {{ juego.maxPerson }}</div>
    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Jugar</a>
  </div>
</div>
{% endfor %}

</div>
</div>




    
  
{% endblock %}
", "juegos.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\juegos.html.twig");
    }
}
