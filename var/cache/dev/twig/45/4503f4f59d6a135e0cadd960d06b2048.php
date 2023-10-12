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

/* registration/register.html.twig */
class __TwigTemplate_d07434c9dd49429f2a1ee350d64afff3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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
        echo "
<body class=\"\" style=\"background-image: url( '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fondo.jpg", "imagenlogo"), "html", null, true);
        echo "');
    background-size: 100% 100%;
    background-repeat: no-repeat;\">

<section  >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-12\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-6 d-none d-md-block\">
              <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("juego.png", "imagenlogo"), "html", null, true);
        echo "\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-5 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">

              <form name=\"registration_form\" method=\"post\" >

                    <div class=\"d-flex align-items-center mb-3  pb-1\">
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo2.png", "imagenlogo"), "html", null, true);
        echo "\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                    </div>

                    <h1 class=\"fw-normal mb-3\" style=\"letter-spacing: 1px;\">Registrate</h1>

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

                    <div class=\"form-outline col-md-12\" required>
                      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                    </div>
                    <div class=\"form-outline\" required>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'row', ["label" => "Contraseña", "attr" => ["class" => "form-control"]]);
        // line 45
        echo "
                    </div>
                    <div class=\"form-outline\" required>
                      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "nombre", [], "any", false, false, false, 48), 'row', ["label" => "Nombre completo", "attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-outline my-2\" required>
                      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "contacto", [], "any", false, false, false, 51), 'row', ["label" => "Telefono", "attr" => ["class" => "form-control"]]);
        echo "
                    </div>

                    <div class=\"form-outline visually-hidden\">
                      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "puntos", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>

                    ";
        // line 61
        echo "                    
                    <div class=\"mb-3\">
                      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63), 'row', ["label" => "Aceptar terminos"]);
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block mb-2\">Crear Cuenta</button>
                    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'form_end');
        echo " 
                
                </form>

                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("landingPage");
        echo "\"
                      style=\"color: #393f81;\">Inicio</a>
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
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  192 => 71,  185 => 67,  178 => 63,  174 => 61,  168 => 55,  161 => 51,  155 => 48,  150 => 45,  148 => 43,  141 => 39,  135 => 36,  127 => 31,  115 => 22,  101 => 11,  98 => 10,  88 => 9,  69 => 2,  59 => 9,  53 => 5,  48 => 2,  45 => 1,);
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

<section  >
  <div class=\"container py-5\">
    <div class=\"row d-flex justify-content-center align-items-center \">
      <div class=\"col col-xl-12\">
        <div class=\"card shadow-lg mb-5 \" style=\"border-radius: 1rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-6 col-lg-6 d-none d-md-block\">
              <img src=\"{{ asset('juego.png', 'imagenlogo') }}\"
                alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem; height: 100%;\" />
            </div>
            <div class=\"col-md-6 col-lg-5 d-flex align-items-center\">
              <div class=\"card-body p-4 p-lg-5 text-black\">

              <form name=\"registration_form\" method=\"post\" >

                    <div class=\"d-flex align-items-center mb-3  pb-1\">
                        <img src=\"{{ asset('logo2.png', 'imagenlogo') }}\" alt=\"Symfony!\" width=\"150px\" height=\"\" />
                    </div>

                    <h1 class=\"fw-normal mb-3\" style=\"letter-spacing: 1px;\">Registrate</h1>

                    {{ form_start(registrationForm) }}

                    <div class=\"form-outline col-md-12\" required>
                      {{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}})  }}

                    </div>
                    <div class=\"form-outline\" required>
                        {{ form_row(registrationForm.plainPassword, {'label': 'Contraseña','attr': {'class': 'form-control'}}, {
                             label: 'Contraseña'
                           }) }}
                    </div>
                    <div class=\"form-outline\" required>
                      {{ form_row(registrationForm.nombre, {'label': 'Nombre completo','attr': {'class': 'form-control'}}) }}
                    </div>
                    <div class=\"form-outline my-2\" required>
                      {{ form_row(registrationForm.contacto, {'label': 'Telefono','attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-outline visually-hidden\">
                      {{ form_row(registrationForm.puntos, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    {# <div class=\"form-outline my-2\">
                      {{ form_row(registrationForm.roles, {'attr': {'class': 'form-control'}}) }}
                    </div> #}
                    
                    <div class=\"mb-3\">
                      {{ form_row(registrationForm.agreeTerms,{'label': 'Aceptar terminos'}) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block mb-2\">Crear Cuenta</button>
                    {{ form_end(registrationForm) }} 
                
                </form>

                <a href=\"{{ path('landingPage') }}\"
                      style=\"color: #393f81;\">Inicio</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\registration\\register.html.twig");
    }
}
