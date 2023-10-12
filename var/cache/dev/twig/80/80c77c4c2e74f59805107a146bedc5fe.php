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

/* login/login.html.twig */
class __TwigTemplate_009e8bc2ec4a727950c9e95a5d96e7bc extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "
        <title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 5
        echo "        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<body class=\"\" style=\"background-image: url( '";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fondo.jpg", "imagenlogo"), "html", null, true);
        echo "');
    background-size: 100% 100%;
    background-repeat: no-repeat;\">

<section class=\"mt-5 \" >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-11\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("juego.png", "imagenlogo"), "html", null, true);
        echo "\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">
                      ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "                          ";
            // line 28
            echo "                          <div class=\"alert alert-danger\">Usuario o contraseña incorrecto</div>
                      ";
        }
        // line 30
        echo "
                <form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\" class=\"was-validated\" >

                  <div class=\"d-flex align-items-center  pb-1\">
                     <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo2.png", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                  </div>

                  <div class=\"alert alert-info m-2\" role=\"alert\">
                              Inicia sesion y disfruta jugando con nosotros.
                            </div>

                  <h2 class=\"fw-normal was-validated \" style=\"letter-spacing: 1px;\">Inicia sesion</h2>

                  <div class=\"form-outline mb-3  \">

                  <label for=\"nombre\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Introduce tu correo electronico\" class=\"form-control\"  required>
                            
                                </div>
                  </div>
                  <div class=\"form-outline mb-3\">
                    <label class=\"form-label\" for=\"form2Example27\">Contraseña</label> 
                        <div class=\"form-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control \" placeholder=\"Introduce su contraseña\" required/>
                               
                        </div> 
                  </div>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">
                  <div class=\"\">
                    <button class=\"btn btn-primary btn-lg btn-block mb-2\" type=\"submit\">Iniciar Sesion</button>
                  </div>
                  <a class=\"small text-muted\" href=\"#!\">Olvido la contraseña?</a>
                  <p class=\" pb-lg-2\" style=\"color: #393f81;\">No tienes cuenta? <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"
                      style=\"color: #393f81;\">Registrate aqui</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  154 => 47,  138 => 34,  132 => 31,  129 => 30,  125 => 28,  123 => 27,  121 => 26,  113 => 21,  98 => 10,  88 => 9,  69 => 2,  59 => 9,  53 => 5,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <title>{% block title %}XOKAS/CIA{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# \"<object data=\"../public/images/logo.svg\" width=\"300\" height=\"300\"> </object>\" #}
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\" integrity=\"sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 

{% block body %}
<body class=\"\" style=\"background-image: url( '{{ asset('fondo.jpg', 'imagenlogo') }}');
    background-size: 100% 100%;
    background-repeat: no-repeat;\">

<section class=\"mt-5 \" >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-11\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
              <img src=\"{{ asset('juego.png', 'imagenlogo') }}\" height=\"100%\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">
                      {% if error %}
                          {# <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div> #}
                          <div class=\"alert alert-danger\">Usuario o contraseña incorrecto</div>
                      {% endif %}

                <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"was-validated\" >

                  <div class=\"d-flex align-items-center  pb-1\">
                     <img src=\"{{ asset('logo2.png', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                  </div>

                  <div class=\"alert alert-info m-2\" role=\"alert\">
                              Inicia sesion y disfruta jugando con nosotros.
                            </div>

                  <h2 class=\"fw-normal was-validated \" style=\"letter-spacing: 1px;\">Inicia sesion</h2>

                  <div class=\"form-outline mb-3  \">

                  <label for=\"nombre\">Email: </label>
                                <div class=\"form-group\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Introduce tu correo electronico\" class=\"form-control\"  required>
                            
                                </div>
                  </div>
                  <div class=\"form-outline mb-3\">
                    <label class=\"form-label\" for=\"form2Example27\">Contraseña</label> 
                        <div class=\"form-group\">
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control \" placeholder=\"Introduce su contraseña\" required/>
                               
                        </div> 
                  </div>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/perfil\">
                  <div class=\"\">
                    <button class=\"btn btn-primary btn-lg btn-block mb-2\" type=\"submit\">Iniciar Sesion</button>
                  </div>
                  <a class=\"small text-muted\" href=\"#!\">Olvido la contraseña?</a>
                  <p class=\" pb-lg-2\" style=\"color: #393f81;\">No tienes cuenta? <a href=\"{{ path('app_register') }}\"
                      style=\"color: #393f81;\">Registrate aqui</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
{% endblock %}", "login/login.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\login\\login.html.twig");
    }
}
