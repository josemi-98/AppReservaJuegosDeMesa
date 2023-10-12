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

/* landingPage.html.twig */
class __TwigTemplate_c9fdb065f3221df12e85df421adecd48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Xokas Cia</title>
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

   <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

        <!--MY CSS-->
        ";
        // line 40
        echo "        <link href=\"/assets/css/main.css\" rel=\"stylesheet\"/>
        ";
        // line 42
        echo "

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "

<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
    <div class=\"container-xl\">
      <a class=\"navbar-brand\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo2.png", "imagenlogo"), "html", null, true);
            echo "\" alt=\"Symfony!\" width=\"150px\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Volver al inicio\" /></a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  

      ";
            // line 69
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\">Perfil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionMesas");
            echo "\">Gestion de mesas</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendario");
            echo "\">Calendario</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle a--fontSize--aumenta\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Crud base de datos\" >Mantenimiento</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juego_index");
            echo "\">Juegos</a></li>
              <li><a class=\"dropdown-item\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">EasyAdmin</a></li>
            </ul>
          </li>
        </ul>

        ";
            // line 90
            echo "                        <p><code></code><code></code></p><hr><p></p>

        ";
            // line 93
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Perfil</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"#\">Mensajes</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Notificaciones</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

        ";
            // line 109
            echo "        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown nav-icon d-none d-lg-block \">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-large\">
                                <h6 class=\"py-2 px-4\">Notificaciones</h6>
                                <ul class=\"list-group rounded-none\">
                                    <li class=\"list-group-item border-0 align-items-start\">
                                        <div class=\"avatar bg-success me-3\">
                                            <span class=\"avatar-content\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg></span>
                                        </div>
                                        <div>
                                            <h6 class=\"text-bold\">Nuevo evento </h6>
                                            <p class=\"text-xs\">
                                                Has sido invitado a un nuevo evento 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown nav-icon me-2 d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                
                                 Cerrar Sesion</a>
                            </div>
                        </li>
                        
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    ";
            // line 155
            echo "                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "nombre", [], "any", false, false, false, 156), "html", null, true);
            echo "</div>

                            ";
            // line 159
            echo "
                                </div>
                                
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
            // line 168
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
            
                    </ul>
        </form>
      </div>
    </div>
  </nav>
<!-- End Main Navigation -->



";
        } else {
            // line 182
            echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
    <div class=\"container-xl\">
            <a class=\"navbar-brand\" href=\"";
            // line 185
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo2.png", "imagenlogo"), "html", null, true);
            echo "\" alt=\"Symfony!\" width=\"150px\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Volver al inicio\" /></a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  

      ";
            // line 194
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 197
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\">Perfil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 200
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservas");
            echo "\">Reservas</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 203
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventos");
            echo "\">Eventos</a>
          </li>
        </ul>

        ";
            // line 208
            echo "                        <p><code></code><code></code></p><hr><p></p>

        ";
            // line 211
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Perfil</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"#\">Mensajes</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Notificaciones</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

        ";
            // line 227
            echo "        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown nav-icon d-none d-lg-block \">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-large\">
                                <h6 class=\"py-2 px-4\">Notificaciones</h6>
                                <ul class=\"list-group rounded-none\">
                                    <li class=\"list-group-item border-0 align-items-start\">
                                        <div class=\"avatar bg-success me-3\">
                                            <span class=\"avatar-content\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg></span>
                                        </div>
                                        <div>
                                            <h6 class=\"text-bold\">Nuevo evento </h6>
                                            <p class=\"text-xs\">
                                                Has sido invitado a un nuevo evento 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown nav-icon me-2 d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                
                                 Cerrar Sesion</a>
                            </div>
                        </li>
                        
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    ";
            // line 273
            echo "                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, ";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 274, $this->source); })()), "user", [], "any", false, false, false, 274), "nombre", [], "any", false, false, false, 274), "html", null, true);
            echo "</div>

                            ";
            // line 277
            echo "
                                </div>
                                
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"";
            // line 282
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
            // line 286
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
                        
                            
                        
                    </ul>
        </form>
      </div>
    </div>
  </nav>
<!-- End Main Navigation -->


";
        }
        // line 301
        echo "















  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row justify-content-center\">
        <div class=\"col-xl-7 col-lg-9 text-center\">
          <h1>Tu sitio web de juegos de mesa</h1>
          <h2>Haz tu reserva de lunes a viernes del juego que desees!</h2>
        </div>
      </div>
      <div class=\"text-center\">
        <a href=\"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn-get-started scrollto\">Iniciar Sesion</a>
      </div>

      <div class=\"row icon-boxes\">
        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ajedrez.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">AJEDREZ</a></h4>
            <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("brisca.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"90%\" /></div>
            <h4 class=\"title\"><a href=\"\">BRISCA</a></h4>
            <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("parchis.png", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">PARCHIS</a></h4>
            <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("PokerAA.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">POKER</a></h4>
            <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Informacion</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Video Section ======= -->
    <section id=\"about-video\" class=\"about-video\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">

          <div class=\"col-lg-6 video-box align-self-baseline\" data-aos=\"fade-right\" data-aos-delay=\"100\">
            <img src=\"assets/img/about-video.jpg\" class=\"img-fluid\" alt=\"\">
            <a href=\"https://www.youtube.com/watch?v=jDDaplaOz7Q\" class=\"glightbox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
          </div>

          <div class=\"col-lg-6 pt-3 pt-lg-0 content\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class=\"bx bx-check-double\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class=\"bx bx-check-double\"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients section-bg\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-4.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-5.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Equipo</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-1.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Jose Martin</h4>
                <span>Administrador</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-2.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Rosa Martin</h4>
                <span>Organizadora</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-3.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Pablo Berlango</h4>
                <span>Organizador</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Andrea Sanchez</h4>
                <span>Administradora</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Contacto</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
          <iframe style=\"border:0; width: 100%; height: 270px;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" allowfullscreen></iframe>
        </div>

        <div class=\"row mt-5\">

          <div class=\"col-lg-4\">
            <div class=\"info\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Localizacion:</h4>
                <p>A108 Avenida Barcelona, Jaen, JN 23680</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Telefono:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row gy-2 gx-md-3\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Tu nombre\" required>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Tu Email\" required>
                </div>
                <div class=\"form-group col-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Asunto\" required>
                </div>
                <div class=\"form-group col-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Mensaje\" required></textarea>
                </div>
                <div class=\"my-3 col-12\">
                  <div class=\"loading\">Cargando</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Tu mensaje ha sido enviado gracias</div>
                </div>
                <div class=\"text-center col-12\"><button type=\"submit\">Enviar mensaje</button></div>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Footer -->
<footer class=\"text-center text-lg-start bg-white text-muted\">
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
   
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-gem me-3 text-secondary\"></i>XOCAS CIA
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Juegos
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ajedrez</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">4 en raya</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Parchis</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">La oca</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Enlaces de interes
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Rerservas</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ajustes</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Mesas</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ayuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">Contacto</h6>
          <p><i class=\"fas fa-home me-3 text-secondary\"></i> Jaen, JN 23006, SP</p>
          <p>
            <i class=\"fas fa-envelope me-3 text-secondary\"></i>
            iesfuentezuelas@gmail.com
          </p>
          <p><i class=\"fas fa-phone me-3 text-secondary\"></i> + 34 634 567 88</p>
          <p><i class=\"fas fa-print me-3 text-secondary\"></i> + 34 634 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.025);\">
    © 2023 Copyright:
    <a class=\"text-reset fw-bold\" href=\"\">IES Las Fuentezuelas DAW</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "landingPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 357,  475 => 349,  464 => 341,  453 => 333,  444 => 327,  416 => 301,  398 => 286,  391 => 282,  384 => 277,  379 => 274,  376 => 273,  329 => 227,  312 => 211,  308 => 208,  301 => 203,  295 => 200,  289 => 197,  284 => 194,  271 => 185,  266 => 182,  249 => 168,  242 => 164,  235 => 159,  230 => 156,  227 => 155,  180 => 109,  163 => 93,  159 => 90,  151 => 84,  147 => 83,  139 => 78,  133 => 75,  127 => 72,  122 => 69,  109 => 60,  103 => 56,  101 => 55,  86 => 42,  83 => 40,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Xokas Cia</title>
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

   <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

        <!--MY CSS-->
        {# <link href=\"{{ asset('css/main.css') }}\" type=\"text/css\" rel=\"stylesheet\" /> #}
        <link href=\"/assets/css/main.css\" rel=\"stylesheet\"/>
        {# <link href=\"/assets/css/style.css\" rel=\"stylesheet\"/> #}


  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


{% if is_granted('ROLE_ADMIN') %}


<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
    <div class=\"container-xl\">
      <a class=\"navbar-brand\" href=\"{{ path('perfil') }}\"> <img src=\"{{ asset('logo2.png', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"150px\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Volver al inicio\" /></a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  

      {# div del toggle #}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('perfil') }}\">Perfil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('gestionMesas') }}\">Gestion de mesas</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('calendario') }}\">Calendario</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle a--fontSize--aumenta\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Crud base de datos\" >Mantenimiento</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_juego_index') }}\">Juegos</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('admin') }}\">EasyAdmin</a></li>
            </ul>
          </li>
        </ul>

        {# separador #}
                        <p><code></code><code></code></p><hr><p></p>

        {# Para pantallas tablets e inferiores #}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Perfil</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"#\">Mensajes</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Notificaciones</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

        {# Para pantallas grandes #}
        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown nav-icon d-none d-lg-block \">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-large\">
                                <h6 class=\"py-2 px-4\">Notificaciones</h6>
                                <ul class=\"list-group rounded-none\">
                                    <li class=\"list-group-item border-0 align-items-start\">
                                        <div class=\"avatar bg-success me-3\">
                                            <span class=\"avatar-content\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg></span>
                                        </div>
                                        <div>
                                            <h6 class=\"text-bold\">Nuevo evento </h6>
                                            <p class=\"text-xs\">
                                                Has sido invitado a un nuevo evento 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown nav-icon me-2 d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                
                                 Cerrar Sesion</a>
                            </div>
                        </li>
                        
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    {# <img src=\"assets/images/avatar/avatar-s-1.png\" alt=\"\" srcset=\"\"> #}
                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, {{ app.user.nombre }}</div>

                            {# {{ app.user.email }} #}

                                </div>
                                
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"{{ path('perfil') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
            
                    </ul>
        </form>
      </div>
    </div>
  </nav>
<!-- End Main Navigation -->



{% else %}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
    <div class=\"container-xl\">
            <a class=\"navbar-brand\" href=\"{{ path('perfil') }}\"> <img src=\"{{ asset('logo2.png', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"150px\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Volver al inicio\" /></a>
      <button class=\"navbar-toggler \" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample07XL\" aria-controls=\"navbarsExample07XL\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\">
        </span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarsExample07XL\">  

      {# div del toggle #}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('perfil') }}\">Perfil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('reservas') }}\">Reservas</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('eventos') }}\">Eventos</a>
          </li>
        </ul>

        {# separador #}
                        <p><code></code><code></code></p><hr><p></p>

        {# Para pantallas tablets e inferiores #}
        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Perfil</a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
              <li><a class=\"dropdown-item\" href=\"#\">Mensajes</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Notificaciones</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Cerrar sesion</a></li>
            </ul>
          </li>
        </ul>

        {# Para pantallas grandes #}
        <form>
          <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                        <li class=\"dropdown nav-icon d-none d-lg-block \">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"></path><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"></path></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-large\">
                                <h6 class=\"py-2 px-4\">Notificaciones</h6>
                                <ul class=\"list-group rounded-none\">
                                    <li class=\"list-group-item border-0 align-items-start\">
                                        <div class=\"avatar bg-success me-3\">
                                            <span class=\"avatar-content\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-cart\"><circle cx=\"9\" cy=\"21\" r=\"1\"></circle><circle cx=\"20\" cy=\"21\" r=\"1\"></circle><path d=\"M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6\"></path></svg></span>
                                        </div>
                                        <div>
                                            <h6 class=\"text-bold\">Nuevo evento </h6>
                                            <p class=\"text-xs\">
                                                Has sido invitado a un nuevo evento 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=\"dropdown nav-icon me-2 d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user\" aria-expanded=\"false\">
                                <div class=\"d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                
                                 Cerrar Sesion</a>
                            </div>
                        </li>
                        
                        <li class=\"dropdown d-none d-lg-block\">
                            <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user \" aria-expanded=\"false\">
                                <div class=\"avatar  ms-4\">
                                    {# <img src=\"assets/images/avatar/avatar-s-1.png\" alt=\"\" srcset=\"\"> #}
                                    <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                            <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, {{ app.user.nombre }}</div>

                            {# {{ app.user.email }} #}

                                </div>
                                
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-end \">
                                <a class=\"dropdown-item\" href=\"{{ path('perfil') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                <a class=\"dropdown-item active\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-mail\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg> Mensajes</a>
                                <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-log-out\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg> Cerrar Sesion</a>
                            </div>
                        </li>
                        
                            
                        
                    </ul>
        </form>
      </div>
    </div>
  </nav>
<!-- End Main Navigation -->


{% endif %}
















  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row justify-content-center\">
        <div class=\"col-xl-7 col-lg-9 text-center\">
          <h1>Tu sitio web de juegos de mesa</h1>
          <h2>Haz tu reserva de lunes a viernes del juego que desees!</h2>
        </div>
      </div>
      <div class=\"text-center\">
        <a href=\"{{ path('app_login') }}\" class=\"btn-get-started scrollto\">Iniciar Sesion</a>
      </div>

      <div class=\"row icon-boxes\">
        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"{{ asset('ajedrez.jpg', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">AJEDREZ</a></h4>
            <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"{{ asset('brisca.jpg', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"90%\" /></div>
            <h4 class=\"title\"><a href=\"\">BRISCA</a></h4>
            <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"{{ asset('parchis.png', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">PARCHIS</a></h4>
            <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"{{ asset('PokerAA.jpg', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">POKER</a></h4>
            <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Informacion</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Video Section ======= -->
    <section id=\"about-video\" class=\"about-video\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">

          <div class=\"col-lg-6 video-box align-self-baseline\" data-aos=\"fade-right\" data-aos-delay=\"100\">
            <img src=\"assets/img/about-video.jpg\" class=\"img-fluid\" alt=\"\">
            <a href=\"https://www.youtube.com/watch?v=jDDaplaOz7Q\" class=\"glightbox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
          </div>

          <div class=\"col-lg-6 pt-3 pt-lg-0 content\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class=\"bx bx-check-double\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class=\"bx bx-check-double\"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
              <li><i class=\"bx bx-check-double\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients section-bg\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-4.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-5.png\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center\" data-aos=\"zoom-in\">
            <img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->


    

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Equipo</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-1.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Jose Martin</h4>
                <span>Administrador</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-2.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Rosa Martin</h4>
                <span>Organizadora</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-3.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Pablo Berlango</h4>
                <span>Organizador</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Andrea Sanchez</h4>
                <span>Administradora</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Contacto</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
          <iframe style=\"border:0; width: 100%; height: 270px;\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621\" frameborder=\"0\" allowfullscreen></iframe>
        </div>

        <div class=\"row mt-5\">

          <div class=\"col-lg-4\">
            <div class=\"info\">
              <div class=\"address\">
                <i class=\"bi bi-geo-alt\"></i>
                <h4>Localizacion:</h4>
                <p>A108 Avenida Barcelona, Jaen, JN 23680</p>
              </div>

              <div class=\"email\">
                <i class=\"bi bi-envelope\"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class=\"phone\">
                <i class=\"bi bi-phone\"></i>
                <h4>Telefono:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class=\"col-lg-8 mt-5 mt-lg-0\">

            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row gy-2 gx-md-3\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Tu nombre\" required>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Tu Email\" required>
                </div>
                <div class=\"form-group col-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Asunto\" required>
                </div>
                <div class=\"form-group col-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Mensaje\" required></textarea>
                </div>
                <div class=\"my-3 col-12\">
                  <div class=\"loading\">Cargando</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Tu mensaje ha sido enviado gracias</div>
                </div>
                <div class=\"text-center col-12\"><button type=\"submit\">Enviar mensaje</button></div>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Footer -->
<footer class=\"text-center text-lg-start bg-white text-muted\">
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
   
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=\"\">
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-gem me-3 text-secondary\"></i>XOCAS CIA
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Juegos
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ajedrez</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">4 en raya</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Parchis</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">La oca</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Enlaces de interes
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Rerservas</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ajustes</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Mesas</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Ayuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">Contacto</h6>
          <p><i class=\"fas fa-home me-3 text-secondary\"></i> Jaen, JN 23006, SP</p>
          <p>
            <i class=\"fas fa-envelope me-3 text-secondary\"></i>
            iesfuentezuelas@gmail.com
          </p>
          <p><i class=\"fas fa-phone me-3 text-secondary\"></i> + 34 634 567 88</p>
          <p><i class=\"fas fa-print me-3 text-secondary\"></i> + 34 634 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.025);\">
    © 2023 Copyright:
    <a class=\"text-reset fw-bold\" href=\"\">IES Las Fuentezuelas DAW</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>", "landingPage.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\landingPage.html.twig");
    }
}
