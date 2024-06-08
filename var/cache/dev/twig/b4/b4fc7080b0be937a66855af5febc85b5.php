<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* project/about.html.twig */
class __TwigTemplate_5e7986db04fb3c033deffa6de349929e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base7.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/about.html.twig"));

        $this->parent = $this->loadTemplate("base7.html.twig", "project/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Card Game";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "<h1>Black Jack Game:</h1>
<p>'Blackjack Game' ett spännande kortspel där tre spelare tävlar mot banken för att nå närmast 21 utan att gå över. Blackjack, ett av världens mest kända casinospel, där Varje spelare står inför utmaningen att slå banken och uppnå den perfekta handen. </p>

<h3>Spelregler:</h3><br>
Utdelning av kort:<br>

Varje spelare får två kort.<br>
Dealern får också två kort, en kort visas<br></p>

<p>Kortens värde:<br>

Nummerkorten (2-10) är värda sitt nominella värde.<br>
Klädda kort (knekt, dam, kung) är värda 10.<br>
Ess kan vara värda antingen 1 eller 11, beroende på vad som är mest fördelaktigt för handen.<br></p>
<p>Spelarens tur:<br>

spelaren kan välja att:<br>
\"Hit\": Ta ett till kort.<br>
\"Stay\": Behålla sin nuvarande hand och avsluta sin tur.<br>
Spelaren blir \"Busted\" om sin total hand värde är > 21, banken tar sin insats<br>
Spelaren får \"Black Jack\" om sin total hand värde är 21, vinner 1.5 sin insats.
</p>
<p>
Dealerns tur:<br>


När alla spelare har valt \"Stay\" är det dealerns tur. Dealern drar kort tills handen är värd minst 17. Om dealerns hand överstiger 21 blir dealern \"busted\" och förlorar automatiskt mot alla spelare som inte är \"busted\", de får dubblasina insats. Om dealerns hand är under 21, får alla spelare som har högre handvärde än dealern dubbla sin insats. Spelare som har lägre handvärde förlorar sin insats. Om dealern har högre handvärde än alla spelare, vinner dealern och får alla spelares insatser.</p>

<!-- Knapp för att starta spelet -->
<form action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_setup");
        yield "\" method=\"post\">
    <button class=\"button_proj\" type=\"submit\">Start Game</button>
</form>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "project/about.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  121 => 35,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base7.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block main %}
<h1>Black Jack Game:</h1>
<p>'Blackjack Game' ett spännande kortspel där tre spelare tävlar mot banken för att nå närmast 21 utan att gå över. Blackjack, ett av världens mest kända casinospel, där Varje spelare står inför utmaningen att slå banken och uppnå den perfekta handen. </p>

<h3>Spelregler:</h3><br>
Utdelning av kort:<br>

Varje spelare får två kort.<br>
Dealern får också två kort, en kort visas<br></p>

<p>Kortens värde:<br>

Nummerkorten (2-10) är värda sitt nominella värde.<br>
Klädda kort (knekt, dam, kung) är värda 10.<br>
Ess kan vara värda antingen 1 eller 11, beroende på vad som är mest fördelaktigt för handen.<br></p>
<p>Spelarens tur:<br>

spelaren kan välja att:<br>
\"Hit\": Ta ett till kort.<br>
\"Stay\": Behålla sin nuvarande hand och avsluta sin tur.<br>
Spelaren blir \"Busted\" om sin total hand värde är > 21, banken tar sin insats<br>
Spelaren får \"Black Jack\" om sin total hand värde är 21, vinner 1.5 sin insats.
</p>
<p>
Dealerns tur:<br>


När alla spelare har valt \"Stay\" är det dealerns tur. Dealern drar kort tills handen är värd minst 17. Om dealerns hand överstiger 21 blir dealern \"busted\" och förlorar automatiskt mot alla spelare som inte är \"busted\", de får dubblasina insats. Om dealerns hand är under 21, får alla spelare som har högre handvärde än dealern dubbla sin insats. Spelare som har lägre handvärde förlorar sin insats. Om dealern har högre handvärde än alla spelare, vinner dealern och får alla spelares insatser.</p>

<!-- Knapp för att starta spelet -->
<form action=\"{{ path('proj_setup') }}\" method=\"post\">
    <button class=\"button_proj\" type=\"submit\">Start Game</button>
</form>


{% endblock %}", "project/about.html.twig", "/Users/sarahabanakeh/dbwebb-kurser/mvc/me/report/templates/project/about.html.twig");
    }
}
