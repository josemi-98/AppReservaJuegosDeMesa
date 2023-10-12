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

/* landingPage2.html.twig */
class __TwigTemplate_10776a7a03994595600a2d714f41e188 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landingPage2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

        <script src=\"js/audio.js\"></script>
  

  <title>Xocas Cia</title>
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

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"#\">Xocas CIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Informacion</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Equipo</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("juegos");
        echo "\">Juegos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contacto</a></li>
          <li><a class=\"getstarted scrollto\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Iniciar Sesion</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn-get-started scrollto\">Iniciar Sesion</a>
      </div>

      <div class=\"row icon-boxes\">
        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ajedrez.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">AJEDREZ</a></h4>
            <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("brisca.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"90%\" /></div>
            <h4 class=\"title\"><a href=\"\">BRISCA</a></h4>
            <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("parchis.png", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">PARCHIS</a></h4>
            <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          <div class=\"icon-box\">
            <div class=\"icon\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("PokerAA.jpg", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"100%\" /></div>
            <h4 class=\"title\"><a href=\"\">POKER</a></h4>
            <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Hero -->


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
           
            <video width=\"600\" height=\"400\" controls>
              <source src=\"images/screen-capture.mp4\" type=\"video/mp4\">
              </source>
            </video>
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

  <audio id=\"medio\" width=\"720\" height=\"400\">
  <source src=\"images/juegoTronos.mp3\">
  <source src=\"http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv\">
</audio>

<nav>
    ";
        // line 496
        echo "    <input type=\"button\" id=\"play\" value=\"Play\" class=\"btn btn-primary\">
    
    ";
        // line 499
        echo "    <input type=\"button\" id=\"silenciar\" value=\"silenciar\" class=\"btn btn-primary\">
    <label>Volumen</label>
    <input type=\"button\" id=\"menosVolumen\" value=\"-\" class=\"btn btn-primary\">
    <input type=\"button\" id=\"masVolumen\" value=\"+\" class=\"btn btn-primary\">
</nav>
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
        return "landingPage2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 499,  559 => 496,  169 => 107,  158 => 99,  147 => 91,  136 => 83,  127 => 77,  106 => 59,  101 => 57,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

        <script src=\"js/audio.js\"></script>
  

  <title>Xocas Cia</title>
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

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <h1 class=\"logo\"><a href=\"#\">Xocas CIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Inicio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">Informacion</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Equipo</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ path('juegos') }}\">Juegos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contacto</a></li>
          <li><a class=\"getstarted scrollto\" href=\"{{ path('app_login') }}\">Iniciar Sesion</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

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
  </section>
  <!-- End Hero -->


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
           
            <video width=\"600\" height=\"400\" controls>
              <source src=\"images/screen-capture.mp4\" type=\"video/mp4\">
              </source>
            </video>
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

  <audio id=\"medio\" width=\"720\" height=\"400\">
  <source src=\"images/juegoTronos.mp3\">
  <source src=\"http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv\">
</audio>

<nav>
    {# <input type=\"button\" id=\"reiniciar\" value=\"reiniciar\" class=\"btn btn-primary\">
    <input type=\"button\" id=\"retrasar\" value=\"&laquo;\" class=\"btn btn-primary\"> #}
    <input type=\"button\" id=\"play\" value=\"Play\" class=\"btn btn-primary\">
    
    {# <input type=\"button\" id=\"adelantar\" value=\"&raquo;\" class=\"btn btn-primary\"> #}
    <input type=\"button\" id=\"silenciar\" value=\"silenciar\" class=\"btn btn-primary\">
    <label>Volumen</label>
    <input type=\"button\" id=\"menosVolumen\" value=\"-\" class=\"btn btn-primary\">
    <input type=\"button\" id=\"masVolumen\" value=\"+\" class=\"btn btn-primary\">
</nav>
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

</html>", "landingPage2.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\landingPage2.html.twig");
    }
}
