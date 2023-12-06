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

/* carte/show.html.twig */
class __TwigTemplate_d7cf74d793e7ce3c42f79bf3dc9bcfae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carte/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "carte/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Carte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 6, $this->source); })()), "Nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 12, $this->source); })()), "Nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attaque</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 16, $this->source); })()), "Attaque", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Défense</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 20, $this->source); })()), "defense", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pouvoir</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 24, $this->source); })()), "pouvoir", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paquet</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 28, $this->source); })()), "paquet", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Propriétaire</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 32, $this->source); })()), "proprietaire", [], "any", false, false, false, 32), "pseudo", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paquet_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 37, $this->source); })()), "paquet", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">Retourner au deck</a>
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "\t";
            if ((twig_in_filter((isset($context["carte"]) || array_key_exists("carte", $context) ? $context["carte"] : (function () { throw new RuntimeError('Variable "carte" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "cartes", [], "any", false, false, false, 39)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 40
                echo "        ";
                echo twig_include($this->env, $context, "carte/_delete_form.html.twig");
                echo "
    ";
            }
            // line 42
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "carte/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 42,  150 => 40,  147 => 39,  145 => 38,  141 => 37,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Carte{% endblock %}

{% block body %}
    <h1>{{ carte.Nom }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ carte.Nom }}</td>
            </tr>
            <tr>
                <th>Attaque</th>
                <td>{{ carte.Attaque }}</td>
            </tr>
            <tr>
                <th>Défense</th>
                <td>{{ carte.defense }}</td>
            </tr>
            <tr>
                <th>Pouvoir</th>
                <td>{{ carte.pouvoir }}</td>
            </tr>
            <tr>
                <th>Paquet</th>
                <td>{{ carte.paquet }}</td>
            </tr>
            <tr>
                <th>Propriétaire</th>
                <td>{{ carte.proprietaire.pseudo }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_paquet_show', {'id': carte.paquet.id}) }}\">Retourner au deck</a>
    {% if app.user %}
\t{% if carte in app.user.cartes or is_granted('ROLE_ADMIN') %}
        {{ include('carte/_delete_form.html.twig') }}
    {% endif %}
    {% endif %}
{% endblock %}
", "carte/show.html.twig", "C:\\Users\\hpesq\\OneDrive\\Bureau\\Informatique\\Projet_magic\\MagicCards\\templates\\carte\\show.html.twig");
    }
}
