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

/* base.html.twig */
class __TwigTemplate_0f4c16a40dbc89db0f8f316304ec39b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "
        ";
        // line 10
        echo "        <script src=\"/js/jquery.js\"></script>
        <script src=\"/js/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.structure.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.theme.css\">

        <script src=\"js/audio.js\"></script>
        
        
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

        <!--MY CSS-->
        ";
        // line 28
        echo "        <link href=\"/assets/css/main.css\" rel=\"stylesheet\"/>
        ";
        // line 30
        echo "
        ";
        // line 31
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTIFICATED_FULLY")) {
            // line 32
            echo "
        ";
        }
        // line 34
        echo "        
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js\" integrity=\"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF\" crossorigin=\"anonymous\"></script>
        -->

        ";
        // line 42
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css\"/>
 
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js\"></script>


        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css\"/>


      

        ";
        // line 55
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </head>
    <body class=\"bg-body\">


";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 67
            echo "

  <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
      <div class=\"container-xl\">
        <a class=\"navbar-brand\" href=\"";
            // line 71
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
            // line 80
            echo "          <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
            
            <li class=\"nav-item\">
              <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionMesas");
            echo "\">Gestion de mesas</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invitacionEventos");
            echo "\">Eventos</a>
            </li>
            <li class=\"nav-item \">
              <a class=\"nav-link active a--fontSize--aumenta \" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendario");
            echo "\">Calendario 
              
              </a>
            </li>
            <li class=\"nav-item  dropdown\">
              <a class=\"nav-link active dropdown-toggle a--fontSize--aumenta\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Crud base de datos\" >Mantenimiento</a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown07XL\">
                <li><a class=\"dropdown-item\" href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_juego_index");
            echo "\">Juegos</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">EasyAdmin</a></li>
              </ul>
            </li>
          </ul>

          ";
            // line 103
            echo "                          <p><code></code><code></code></p><hr><p></p>

          ";
            // line 106
            echo "          <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                        
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesion</a>
            </li>
            <li class=\"nav-item  dropdown\">
              <a class=\"nav-link active \" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\" id=\"dropdown07XL\" aria-expanded=\"false\">Perfil</a>
              
            </li>
          </ul>

          ";
            // line 118
            echo "          <form>
            <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                          ";
            // line 143
            echo "                          ";
            // line 160
            echo "                          
                          <li class=\"dropdown d-none d-lg-block\">
                              <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user cssToolTip \" aria-expanded=\"false\">
                                  <div class=\"avatar  ms-4\">
                                      ";
            // line 165
            echo "                                      <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                              <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "nombre", [], "any", false, false, false, 166), "html", null, true);
            echo " <span> Cerrar sesion</span> </div>

                              ";
            // line 169
            echo "
                                  </div>
                                  
                              </a>
                              <div class=\"dropdown-menu dropdown-menu-end \">
                                  <a class=\"dropdown-item\" href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("perfil");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                  ";
            // line 176
            echo "                                  <div class=\"dropdown-divider\"></div>
                                  <a class=\"dropdown-item\" href=\"";
            // line 177
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
            // line 191
            echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5 sticky-top \" aria-label=\"Ninth navbar example\">
    <div class=\"container-xl\">
            <a class=\"navbar-brand\" href=\"";
            // line 194
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
            // line 203
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center \">
          
          <li class=\"nav-item\">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 206
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservas");
            echo "\">Reservas</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link active a--fontSize--aumenta\" href=\"";
            // line 209
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventos");
            echo "\">Eventos</a>
          </li>
        </ul>

        ";
            // line 214
            echo "                        <p><code></code><code></code></p><hr><p></p>

        ";
            // line 217
            echo "        <ul class=\"navbar-nav me-auto ms-auto mb-2 mb-lg-0 d-flex align-items-center d-block d-lg-none \">
                      
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"#\">Cerrar sesion</a>
          </li>
          <li class=\"nav-item  dropdown\">
            <a class=\"nav-link active dropdown-toggle\" href=\"#\" id=\"dropdown07XL\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Perfil</a>
            
          </li>
        </ul>

        ";
            // line 229
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





        ";
        // line 307
        $this->displayBlock('body', $context, $blocks);
        // line 308
        echo "
<!-- Footer -->
<footer class=\"text-center text-lg-start bg-white text-muted\">

<audio id=\"medio\" width=\"720\" height=\"400\">
  <source src=\"images/juegoTronos.mp3\">
  <source src=\"http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv\">
</audio>

<nav>
    
    <input type=\"button\" id=\"play\" value=\"&#9658;\">
   
</nav>
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Contaca con nosotros en nuestras redes sociales</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
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
";
        // line 451
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "XOKAS/CIA";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 307
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 307,  611 => 60,  601 => 59,  588 => 56,  578 => 55,  559 => 5,  547 => 451,  411 => 308,  409 => 307,  401 => 301,  383 => 286,  376 => 282,  369 => 277,  364 => 274,  361 => 273,  316 => 229,  303 => 217,  299 => 214,  292 => 209,  286 => 206,  281 => 203,  268 => 194,  263 => 191,  246 => 177,  243 => 176,  239 => 174,  232 => 169,  227 => 166,  224 => 165,  218 => 160,  216 => 143,  212 => 118,  204 => 112,  198 => 109,  193 => 106,  189 => 103,  181 => 97,  177 => 96,  167 => 89,  161 => 86,  155 => 83,  150 => 80,  137 => 71,  131 => 67,  129 => 66,  123 => 62,  121 => 59,  118 => 58,  115 => 55,  101 => 42,  92 => 34,  88 => 32,  86 => 31,  83 => 30,  80 => 28,  61 => 10,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}XOKAS/CIA{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# \"<object data=\"../public/images/logo.svg\" width=\"300\" height=\"300\"> </object>\" #}

        {# Archivos de jQuery #}
        <script src=\"/js/jquery.js\"></script>
        <script src=\"/js/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.structure.css\">
        <link rel=\"stylesheet\" href=\"/ui/css/jquery-ui.theme.css\">

        <script src=\"js/audio.js\"></script>
        
        
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

        <!-- Option 1: Bootstrap Bundle with Popper -->
         <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

        <!--MY CSS-->
        {# <link href=\"{{ asset('css/main.css') }}\" type=\"text/css\" rel=\"stylesheet\" /> #}
        <link href=\"/assets/css/main.css\" rel=\"stylesheet\"/>
        {# <link href=\"/assets/css/style.css\" rel=\"stylesheet\"/> #}

        {% if not is_granted('IS_AUTHENTIFICATED_FULLY') %}

        {% endif %}
        
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js\" integrity=\"sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF\" crossorigin=\"anonymous\"></script>
        -->

        {# libreria datatable usando los cdn  #}

        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css\"/>
 
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js\"></script>


        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css\"/>


      

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"bg-body\">


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
              <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('gestionMesas') }}\">Gestion de mesas</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link active a--fontSize--aumenta\" href=\"{{ path('invitacionEventos') }}\">Eventos</a>
            </li>
            <li class=\"nav-item \">
              <a class=\"nav-link active a--fontSize--aumenta \" href=\"{{ path('calendario') }}\">Calendario 
              
              </a>
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
              <a class=\"nav-link active\" href=\"{{ path('app_logout') }}\">Cerrar sesion</a>
            </li>
            <li class=\"nav-item  dropdown\">
              <a class=\"nav-link active \" href=\"{{ path('perfil') }}\" id=\"dropdown07XL\" aria-expanded=\"false\">Perfil</a>
              
            </li>
          </ul>

          {# Para pantallas grandes #}
          <form>
            <ul class=\"navbar-nav navbar-light d-flex align-items-center\">
                          {# <li class=\"dropdown nav-icon d-none d-lg-block \">
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
                          </li> #}
                          {# <li class=\"dropdown nav-icon me-2 d-none d-lg-block\">
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
                          </li> #}
                          
                          <li class=\"dropdown d-none d-lg-block\">
                              <a href=\"#\" data-bs-toggle=\"dropdown\" class=\"nav-link nav-link-lg nav-link-user cssToolTip \" aria-expanded=\"false\">
                                  <div class=\"avatar  ms-4\">
                                      {# <img src=\"assets/images/avatar/avatar-s-1.png\" alt=\"\" srcset=\"\"> #}
                                      <i class=\"fa-regular fa-circle-user fa-2x \"></i>
                              <div class=\"d-none d-md-block d-lg-inline-block ms-2\">Hola, {{ app.user.nombre }} <span> Cerrar sesion</span> </div>

                              {# {{ app.user.email }} #}

                                  </div>
                                  
                              </a>
                              <div class=\"dropdown-menu dropdown-menu-end \">
                                  <a class=\"dropdown-item\" href=\"{{ path('perfil') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg> Perfil</a>
                                  {# <a class=\"dropdown-item\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg> Ajustes</a> #}
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






        {% block body %}{% endblock %}

<!-- Footer -->
<footer class=\"text-center text-lg-start bg-white text-muted\">

<audio id=\"medio\" width=\"720\" height=\"400\">
  <source src=\"images/juegoTronos.mp3\">
  <source src=\"http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv\">
</audio>

<nav>
    
    <input type=\"button\" id=\"play\" value=\"&#9658;\">
   
</nav>
  <!-- Section: Social media -->
  <section class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
    <!-- Left -->
    <div class=\"me-5 d-none d-lg-block\">
      <span>Contaca con nosotros en nuestras redes sociales</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 link-secondary\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <!-- Right -->
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
{# 
{% block styles %}
    <link rel=\"stylesheet\" href=\"assets/vendors/chartjs/Chart.min.css\">
{% endblock %}
{% block js %}
    <script src=\"assets/vendors/chartjs/Chart.min.js\"></script>
    <script src=\"assets/vendors/apexcharts/apexcharts.min.js\"></script>
    <script src=\"assets/js/pages/dashboard.js\"></script>
{% endblock %} #}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\base.html.twig");
    }
}
