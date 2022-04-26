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

/* act/edit.html.twig */
class __TwigTemplate_4b258024ec843a3a00cd8b71abef0e5d2f2ea46ae55c2b067a75a8022c059a55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "act/edit.html.twig", 1);
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

        echo "Edit Act";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <br><br><br><br><br>
    <h1 style=\"color:steelblue\" align=\"center\">Modifier Une Act</h1>
    <div style=\"width: 500px;margin: auto\" >
        <br>
        <div align=\"center\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            <table align=\"center\">
                <tr>
                    <td><label for=\"\">nomAct : </label></td>
                    <td> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nomAct", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "</td>
                    <td>  ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nomAct", [], "any", false, false, false, 16), 'errors');
        echo "</td>
                </tr>
                <tr>
                    <td><label for=\"\">description : </label></td>
                    <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">dDebut : </label></td>
                    <td> ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dDebut", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dDebut", [], "any", false, false, false, 27), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">dFin : </label></td>
                    <td> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dFin", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dFin", [], "any", false, false, false, 33), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">emplacement : </label>  </td>
                    <td> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "emplacement", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td>  ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "emplacement", [], "any", false, false, false, 39), 'errors');
        echo "</td>
                </tr>


                <tr>
                    <td><label for=\"\">idemplacement : </label></td>
                    <td> ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "idemplacement", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "idemplacement", [], "any", false, false, false, 46), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">nbPersonne : </label></td>
                    <td> ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nbPersonne", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nbPersonne", [], "any", false, false, false, 52), 'errors');
        echo "</td>
                </tr>

                <tr>
                    <td><label for=\"\">idUser : </label></td>
                    <td> ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "idUser", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </td>
                    <td> ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "idUser", [], "any", false, false, false, 58), 'errors');
        echo "</td>
                </tr>

                <br>

            </table>
";
        // line 65
        echo "
           <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_index");
        echo "\">back to list</a>


        </div>
    </div>

    <br>

    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "

    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 74,  202 => 66,  199 => 65,  190 => 58,  186 => 57,  178 => 52,  174 => 51,  166 => 46,  162 => 45,  153 => 39,  149 => 38,  141 => 33,  137 => 32,  129 => 27,  125 => 26,  117 => 21,  113 => 20,  106 => 16,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Act{% endblock %}

{% block body %}
    <br><br><br><br><br>
    <h1 style=\"color:steelblue\" align=\"center\">Modifier Une Act</h1>
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
{# {{ include('act/_form.html.twig', {'button_label': 'Update'}) }} #}

           <a href=\"{{ path('act_index') }}\">back to list</a>


        </div>
    </div>

    <br>

    {{ form_end(form) }}

    <br><br>
{% endblock %}
", "act/edit.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\act\\edit.html.twig");
    }
}
