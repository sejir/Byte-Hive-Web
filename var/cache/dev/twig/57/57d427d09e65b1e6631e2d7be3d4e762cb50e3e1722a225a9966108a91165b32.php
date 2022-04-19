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

/* act/index.html.twig */
class __TwigTemplate_fd156c54d4ea4587db6ab0b312065afed260b4a1c083a5cc35b6cf234a6fbfa1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "act/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "act/index.html.twig", 1);
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

        echo "Act index";
        
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
        echo "    <h1>Act index</h1>
    <button><a href=\"/CalendrierAct\">Calendrier</a></button>
    <button><a href=\"/AfficheActPDF\">PDF</a></button>
    <button><a href=\"/triDateDebutAsc\">Date Asc</a></button>
    <button><a href=\"/triDateDebutDesc\">Date Desc</a></button>
    <div class=\"search_item\" >
        <input  id=\"myInputAct\"  type=\"text\" class=\"btn btn-sm btn-outline-info\"  name=\"searchLieu\" placeholder=\"recherche ...\">
    </div>


    <section>
        <table class=\"container\">

    <table class=\"table\">
        <thead>
            <tr>
        
                <th>NomAct</th>
                <th>Description</th>
                <th>DDebut</th>
                <th>DFin</th>
                <th>Emplacement</th>
                <th>Idemplacement</th>
                <th>NbPersonne</th>
                <th>IdUser</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody id=\"myTableAct\">
        <tr>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new RuntimeError('Variable "acts" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 38
            echo "            <tr>
              
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "nomAct", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "description", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["act"], "dDebut", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dDebut", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["act"], "dFin", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "dFin", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "emplacement", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "idemplacement", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "nbPersonne", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["act"], "idUser", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_show", ["idAct" => twig_get_attribute($this->env, $this->source, $context["act"], "idAct", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_edit", ["idAct" => twig_get_attribute($this->env, $this->source, $context["act"], "idAct", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">edit</a>
                    <form method=\"post\" action=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_delete", ["idAct" => twig_get_attribute($this->env, $this->source, $context["act"], "idAct", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["act"], "idAct", [], "any", false, false, false, 52))), "html", null, true);
            echo "\">
    <button class=\"btn\">Delete</button>
</form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>

        </tr>
        </tbody>
    </table>
    </table>
    <div class=\"d-flex justify-content-center\">
        ";
        // line 69
        twig_get_attribute($this->env, $this->source, (isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new RuntimeError('Variable "acts" does not exist.', 69, $this->source); })()), "setPageRange", [0 => 2], "method", false, false, false, 69);
        // line 70
        echo "        ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["acts"]) || array_key_exists("acts", $context) ? $context["acts"] : (function () { throw new RuntimeError('Variable "acts" does not exist.', 70, $this->source); })()), "Pagination.html.twig");
        echo "
    </div>
    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("act_new");
        echo "\">Create new</a>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInputAct\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTableAct tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "act/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 72,  206 => 70,  204 => 69,  195 => 62,  186 => 58,  175 => 52,  171 => 51,  167 => 50,  163 => 49,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Act index{% endblock %}

{% block body %}
    <h1>Act index</h1>
    <button><a href=\"/CalendrierAct\">Calendrier</a></button>
    <button><a href=\"/AfficheActPDF\">PDF</a></button>
    <button><a href=\"/triDateDebutAsc\">Date Asc</a></button>
    <button><a href=\"/triDateDebutDesc\">Date Desc</a></button>
    <div class=\"search_item\" >
        <input  id=\"myInputAct\"  type=\"text\" class=\"btn btn-sm btn-outline-info\"  name=\"searchLieu\" placeholder=\"recherche ...\">
    </div>


    <section>
        <table class=\"container\">

    <table class=\"table\">
        <thead>
            <tr>
        
                <th>NomAct</th>
                <th>Description</th>
                <th>DDebut</th>
                <th>DFin</th>
                <th>Emplacement</th>
                <th>Idemplacement</th>
                <th>NbPersonne</th>
                <th>IdUser</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        <tbody id=\"myTableAct\">
        <tr>
        {% for act in acts %}
            <tr>
              
                <td>{{ act.nomAct }}</td>
                <td>{{ act.description }}</td>
                <td>{{ act.dDebut ? act.dDebut|date('Y-m-d') : '' }}</td>
                <td>{{ act.dFin ? act.dFin|date('Y-m-d') : '' }}</td>
                <td>{{ act.emplacement }}</td>
                <td>{{ act.idemplacement }}</td>
                <td>{{ act.nbPersonne }}</td>
                <td>{{ act.idUser }}</td>
                <td>
                    <a href=\"{{ path('act_show', {'idAct': act.idAct}) }}\">show</a>
                    <a href=\"{{ path('act_edit', {'idAct': act.idAct}) }}\">edit</a>
                    <form method=\"post\" action=\"{{ path('act_delete', {'idAct': act.idAct}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ act.idAct) }}\">
    <button class=\"btn\">Delete</button>
</form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>

        </tr>
        </tbody>
    </table>
    </table>
    <div class=\"d-flex justify-content-center\">
        {% do acts.setPageRange(2) %}
        {{ knp_pagination_render(acts, 'Pagination.html.twig')}}
    </div>
    <a href=\"{{ path('act_new') }}\">Create new</a>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInputAct\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTableAct tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    </section>

{% endblock %}
", "act/index.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\act\\index.html.twig");
    }
}
