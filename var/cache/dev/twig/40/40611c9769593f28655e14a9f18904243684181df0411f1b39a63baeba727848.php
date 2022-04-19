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

/* act/show.html.twig */
class __TwigTemplate_52c418acbdb6d2f0432049cd9ea99d5c5ea98bdc10567e0d76e9327bfe23c240 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "act/show.html.twig", 1);
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

        echo "Act";
        
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
        echo "    <h1>Act</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAct</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 11, $this->source); })()), "idAct", [], "any", false, false, false, 11), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomAct</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 15, $this->source); })()), "nomAct", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DDebut</th>
                <td>";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 23, $this->source); })()), "dDebut", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 23, $this->source); })()), "dDebut", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DFin</th>
                <td>";
        // line 27
        ((twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 27, $this->source); })()), "dFin", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 27, $this->source); })()), "dFin", [], "any", false, false, false, 27), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 31, $this->source); })()), "emplacement", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idemplacement</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 35, $this->source); })()), "idemplacement", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NbPersonne</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 39, $this->source); })()), "nbPersonne", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 43, $this->source); })()), "idUser", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_edit", ["idAct" => twig_get_attribute($this->env, $this->source, (isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 50, $this->source); })()), "idAct", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 52
        echo twig_include($this->env, $context, "act/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  164 => 50,  159 => 48,  151 => 43,  144 => 39,  137 => 35,  130 => 31,  123 => 27,  116 => 23,  109 => 19,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Act{% endblock %}

{% block body %}
    <h1>Act</h1>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAct</th>
                <td>{{ act.idAct }}</td>
            </tr>
            <tr>
                <th>NomAct</th>
                <td>{{ act.nomAct }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ act.description }}</td>
            </tr>
            <tr>
                <th>DDebut</th>
                <td>{{ act.dDebut ? act.dDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DFin</th>
                <td>{{ act.dFin ? act.dFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>{{ act.emplacement }}</td>
            </tr>
            <tr>
                <th>Idemplacement</th>
                <td>{{ act.idemplacement }}</td>
            </tr>
            <tr>
                <th>NbPersonne</th>
                <td>{{ act.nbPersonne }}</td>
            </tr>
            <tr>
                <th>IdUser</th>
                <td>{{ act.idUser }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('act_index') }}\">back to list</a>

    <a href=\"{{ path('act_edit', {'idAct': act.idAct}) }}\">edit</a>

    {{ include('act/_delete_form.html.twig') }}
{% endblock %}
", "act/show.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\act\\show.html.twig");
    }
}
