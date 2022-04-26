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

/* act/new.html.twig */
class __TwigTemplate_29aaa59db89bdb522fd73f316691a7d5b937fec7740d88dc3ab222cb4828b44b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "act/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Act";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <br><br><br><br><br>
    <h1 style=\"color:steelblue\" align=\"center\">Ajouter Une Act</h1>
    <div style=\"width: 500px;margin: auto\" >
        <br>
        <div align=\"center\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            <table align=\"center\">
                <tr>
                    <td><label for=\"\">nomAct : </label></td>
                    <td> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nomAct", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                    <td>  ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nomAct", [], "any", false, false, false, 18), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><label for=\"\">description : </label></td>
                    <td> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">dDebut : </label></td>
                    <td> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dDebut", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dDebut", [], "any", false, false, false, 29), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">dFin : </label></td>
                    <td> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dFin", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dFin", [], "any", false, false, false, 35), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">emplacement : </label>  </td>
                    <td> ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "emplacement", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td>  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emplacement", [], "any", false, false, false, 41), 'errors');
        echo "</td>
                </tr>


                <tr>
                    <td><label for=\"\">idemplacement : </label></td>
                    <td> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "idemplacement", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "idemplacement", [], "any", false, false, false, 48), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">nbPersonne : </label></td>
                    <td> ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nbPersonne", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nbPersonne", [], "any", false, false, false, 54), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">idUser : </label></td>
                    <td> ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "idUser", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "idUser", [], "any", false, false, false, 60), 'errors');
        echo "</td>
                </tr>

                <br>

            </table>
        </div>
    </div>

    <br>

    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "

    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  190 => 60,  186 => 59,  178 => 54,  174 => 53,  166 => 48,  162 => 47,  153 => 41,  149 => 40,  141 => 35,  137 => 34,  129 => 29,  125 => 28,  117 => 23,  113 => 22,  106 => 18,  102 => 17,  95 => 13,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Act{% endblock %}



{% block body %}
    <br><br><br><br><br>
    <h1 style=\"color:steelblue\" align=\"center\">Ajouter Une Act</h1>
    <div style=\"width: 500px;margin: auto\" >
        <br>
        <div align=\"center\">
            {{ form_start(form,{'attr':{'class':'form-horizontal'}} ) }}
            <table align=\"center\">
                <tr>
                    <td><label for=\"\">nomAct : </label></td>
                    <td> {{ form_widget(form.nomAct,{'attr':{'class':'form-control'}}) }}</td>
                    <td>  {{ form_errors(form.nomAct) }}</td>
                </tr>
                <tr>
                    <td><label for=\"\">description : </label></td>
                    <td> {{ form_widget(form.description,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.description) }}</td>
                </tr>

                <tr>
                    <td><label for=\"\">dDebut : </label></td>
                    <td> {{ form_widget(form.dDebut,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.dDebut) }}</td>
                </tr>

                <tr>
                    <td><label for=\"\">dFin : </label></td>
                    <td> {{ form_widget(form.dFin,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.dFin) }}</td>
                </tr>

                <tr>
                    <td><label for=\"\">emplacement : </label>  </td>
                    <td> {{ form_widget(form.emplacement,{'attr':{'class':'form-control'}}) }} </td>
                    <td>  {{ form_errors(form.emplacement) }}</td>
                </tr>


                <tr>
                    <td><label for=\"\">idemplacement : </label></td>
                    <td> {{ form_widget(form.idemplacement,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.idemplacement) }}</td>
                </tr>

                <tr>
                    <td><label for=\"\">nbPersonne : </label></td>
                    <td> {{ form_widget(form.nbPersonne,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.nbPersonne) }}</td>
                </tr>

                <tr>
                    <td><label for=\"\">idUser : </label></td>
                    <td> {{ form_widget(form.idUser,{'attr':{'class':'form-control'}}) }} </td>
                    <td> {{ form_errors(form.idUser) }}</td>
                </tr>

                <br>

            </table>
        </div>
    </div>

    <br>

    {{ form_end(form) }}

    <br><br>
{% endblock %}
", "act/new.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\act\\new.html.twig");
    }
}
