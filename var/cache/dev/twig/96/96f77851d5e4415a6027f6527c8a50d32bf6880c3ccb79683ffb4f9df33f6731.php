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

/* act/myPDFAct.html.twig */
class __TwigTemplate_5835b6e067a80b81305f6be746e66aec98a7dda419c798c002fb6c425883c7cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/myPDFAct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/myPDFAct.html.twig"));

        // line 1
        echo "<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0cm 0cm;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: purple;margin-left: 10px;margin-top: 10px\"><b>Nature Cruise</b></div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Numéro : +216 52 111 111</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  E-mail : NatureCruise@gmail.com</div>

    <div><img src=\"";
        // line 46
        echo "images/logo esprit.png";
        echo "\" style=\"width: 200px;height: 120px;margin-left: 580px;margin-top: -80px\"></div>
    <hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
</header>

<footer>
</footer>
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "
    <div class=\"container\" style=\"background-color:transparent\">
        <h1 align=\"center\" style=\"color: black\">Liste des activités</h1>
        <table class=\"theme_dark\" style=\"background-color: #ffffff\" style=\"table-border: 2px\" border=\"\" align=\"center\" >
            <tr style=\"background-color: rgba(179,139,194,0.56)\">
                <th> NomAct </th>
                <th> Description </th>
                <th> Date Début </th>
                <th> Date Fin </th>
                <th> Emplacement </th>
            </tr>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new RuntimeError('Variable "acts" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 65
            echo "                <tr>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "nomAct", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "description", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                    <td>";
            // line 68
            ((twig_get_attribute($this->env, $this->source, $context["act"], "dDebut", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dDebut", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " </td>
                    <td>";
            // line 69
            ((twig_get_attribute($this->env, $this->source, $context["act"], "dFin", [], "any", false, false, false, 69)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dFin", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "emplacement", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </table>
        <br><br>
        <div style=\"margin-left: 450px;font-size: 15px\" align=\"center\"></div>
        <br>
        <div style=\"margin-left: 550px;font-size: 15px\"> Le : ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "  </div>
<img src=\"";
        // line 78
        echo "images/logo esprit.png";
        echo "\" style=\"width: 150px;height: 50px;margin-left: 520px\" alt=\"\">
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/myPDFAct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 78,  170 => 77,  164 => 73,  155 => 70,  151 => 69,  147 => 68,  143 => 67,  139 => 66,  136 => 65,  132 => 64,  119 => 53,  100 => 52,  91 => 46,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0cm 0cm;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: purple;margin-left: 10px;margin-top: 10px\"><b>Nature Cruise</b></div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Numéro : +216 52 111 111</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  E-mail : NatureCruise@gmail.com</div>

    <div><img src=\"{{ ('images/logo esprit.png') }}\" style=\"width: 200px;height: 120px;margin-left: 580px;margin-top: -80px\"></div>
    <hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\">
</header>

<footer>
</footer>
{% block body %}

    <div class=\"container\" style=\"background-color:transparent\">
        <h1 align=\"center\" style=\"color: black\">Liste des activités</h1>
        <table class=\"theme_dark\" style=\"background-color: #ffffff\" style=\"table-border: 2px\" border=\"\" align=\"center\" >
            <tr style=\"background-color: rgba(179,139,194,0.56)\">
                <th> NomAct </th>
                <th> Description </th>
                <th> Date Début </th>
                <th> Date Fin </th>
                <th> Emplacement </th>
            </tr>
            {% for act in acts %}
                <tr>
                    <td>{{ act.nomAct}}</td>
                    <td>{{ act.description}}</td>
                    <td>{{ act.dDebut ? act.dDebut|date('Y-m-d') : '' }} </td>
                    <td>{{ act.dFin ? act.dFin|date('Y-m-d') : '' }}</td>
                    <td>{{ act.emplacement }}</td>
                </tr>
            {% endfor %}
        </table>
        <br><br>
        <div style=\"margin-left: 450px;font-size: 15px\" align=\"center\"></div>
        <br>
        <div style=\"margin-left: 550px;font-size: 15px\"> Le : {{ \"now\"|date(\"m/d/Y\")}}  </div>
<img src=\"{{ ('images/logo esprit.png') }}\" style=\"width: 150px;height: 50px;margin-left: 520px\" alt=\"\">
</div>
{% endblock %}
", "act/myPDFAct.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\act\\myPDFAct.html.twig");
    }
}
