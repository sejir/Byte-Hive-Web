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
class __TwigTemplate_c070cf7d2a47cc77506d87ca71d4091b793c56fdd040cde0940456b69e15af7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>activité</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Bootstrap Icons-->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- SimpleLightbox plugin CSS-->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css\" rel=\"stylesheet\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    </head>
    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3\" id=\"mainNav\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#page-top\">Nature Cruise</a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto my-2 my-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://127.0.0.1:8000/localisation/\">localisation</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#Nosactivitées\">Nos activitées</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#magasine\">magasine</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reclamation\">reclamation</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        
        <!-- About-->
        
        <!-- Services-->
        
        
                <div class=\"row gx-4 gx-lg-5 justify-content-center mb-5\">
                    <div class=\"col-lg-6\">
                        
                        
                    
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "

                    </div>
                </div>
                
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"bg-light py-5\">
            <div class=\"container px-4 px-lg-5\"><div class=\"small text-center text-muted\">Copyright &copy; 2021 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Core theme JS-->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.startbootstrap.com/sb-forms-latest.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
        ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "
    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  203 => 78,  185 => 53,  166 => 22,  151 => 79,  149 => 78,  144 => 76,  136 => 71,  131 => 69,  126 => 67,  111 => 54,  109 => 53,  77 => 23,  75 => 22,  69 => 19,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>activité</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/favicon.ico')}}\" />
        <!-- Bootstrap Icons-->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\" rel=\"stylesheet\" />
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- SimpleLightbox plugin CSS-->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css\" rel=\"stylesheet\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"{{ asset('css/styles.css')}}\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

        {% block stylesheets %} {% endblock %}

    </head>
    <body id=\"page-top\">
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3\" id=\"mainNav\">
            <div class=\"container px-4 px-lg-5\">
                <a class=\"navbar-brand\" href=\"#page-top\">Nature Cruise</a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ms-auto my-2 my-lg-0\">
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://127.0.0.1:8000/localisation/\">localisation</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#Nosactivitées\">Nos activitées</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#magasine\">magasine</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reclamation\">reclamation</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        
        <!-- About-->
        
        <!-- Services-->
        
        
                <div class=\"row gx-4 gx-lg-5 justify-content-center mb-5\">
                    <div class=\"col-lg-6\">
                        
                        
                    
        {% block body %}{% endblock %}


                    </div>
                </div>
                
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class=\"bg-light py-5\">
            <div class=\"container px-4 px-lg-5\"><div class=\"small text-center text-muted\">Copyright &copy; 2021 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}\"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js') }}\"></script>
        <!-- Core theme JS-->
        <script src=\"{{ asset('js/scripts.js')}}\"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src=\"{{ asset('https://cdn.startbootstrap.com/sb-forms-latest.js') }}\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
        {% block javascripts %} {% endblock %}

    </body>
</html>


", "base.html.twig", "C:\\xampp\\htdocs\\FirstP\\templates\\base.html.twig");
    }
}
