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

/* juego/_form.html.twig */
class __TwigTemplate_3627736d42b4e8de920887b074cb6257 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juego/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "juego/_form.html.twig"));

        // line 1
        echo "<style>

img{
    width: 150px;
}

label.juego_imageFile_delete{
    display:none;
}

</style>

<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group mb-3\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "ancho", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "               
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "alto", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "min_person", [], "any", false, false, false, 32), 'row', ["label" => "Minimo de personas", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "max_person", [], "any", false, false, false, 37), 'row', ["label" => "Maximo de personas", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "imageFile", [], "any", false, false, false, 42), 'row', ["label" => "Imagen del juego", "attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn ";
        // line 46
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 46, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
        echo "  mt-3\" >";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 46, $this->source); })()), "Guardar Juego")) : ("Guardar Juego")), "html", null, true);
        echo "</button>
            </div>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "juego/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 48,  111 => 46,  104 => 42,  96 => 37,  88 => 32,  80 => 27,  72 => 22,  64 => 17,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

img{
    width: 150px;
}

label.juego_imageFile_delete{
    display:none;
}

</style>

<div class=\"row\">
    <div class=\"col-md-6 col-12\">
        {{ form_start(form) }}
            <div class=\"form-group mb-3\">
                    {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.ancho, {'attr': {'class': 'form-control'}}) }}               
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group mb-3\">
                    {{ form_row(form.alto, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.min_person, {'label': 'Minimo de personas','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.max_person, {'label': 'Maximo de personas','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-md-6 col-12\">
                <div class=\"form-group\">
                    {{ form_row(form.imageFile, {'label': 'Imagen del juego','attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"col-12 d-flex justify-content-end\">
                <button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\" >{{ button_label|default('Guardar Juego') }}</button>
            </div>
    {{ form_end(form) }}
    </div>
</div>", "juego/_form.html.twig", "C:\\Users\\Josemi\\Desktop\\proyecto2dam\\juegos\\templates\\juego\\_form.html.twig");
    }
}
