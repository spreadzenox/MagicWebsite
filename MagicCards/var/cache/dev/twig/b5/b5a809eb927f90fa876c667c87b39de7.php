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

/* my_account/index.html.twig */
class __TwigTemplate_51761d15253f4616fe0d3c326cd8cafc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "my_account/index.html.twig", 1);
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
        echo "\t<h1>Vos cartes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Attaque</th>
                <th>Défense</th>
                <th>Pouvoir</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "cartes", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "Nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "Attaque", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "defense", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "pouvoir", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_show", ["id" => twig_get_attribute($this->env, $this->source, $context["carte"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Voir</a>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["carte"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
    <a href=";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_carte_new");
        echo "> <button class=\"btn btn-primary\">Nouvelle carte</button> </a>
    <h1>Vos paquets</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Cartes</th>
                <th>Publique</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "paquets", [], "any", false, false, false, 52));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paquet"]) {
            // line 53
            echo "            <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paquet"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paquet"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["paquet"], "items", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["carte"]) {
                // line 57
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["carte"], "Nom", [], "any", false, false, false, 57), "html", null, true);
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</td>
                <td>";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["paquet"], "publique", [], "any", false, false, false, 59)) {
                // line 60
                echo "                    \tOui
                    ";
            } else {
                // line 62
                echo "                    \tNon
                </td>
                ";
            }
            // line 65
            echo "                <td>
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paquet_show", ["id" => twig_get_attribute($this->env, $this->source, $context["paquet"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">Voir</a>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paquet_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paquet"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Editer</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paquet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>
    <a href=";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paquet_new");
        echo "> <button class=\"btn btn-primary\">Nouveau paquet</button> </a>
    
    <h1>Votre compte</h1>

";
        // line 81
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "my_account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 81,  248 => 77,  244 => 75,  234 => 70,  225 => 67,  221 => 66,  218 => 65,  213 => 62,  209 => 60,  207 => 59,  204 => 58,  195 => 57,  191 => 56,  187 => 55,  183 => 54,  180 => 53,  175 => 52,  159 => 39,  155 => 37,  145 => 32,  136 => 29,  132 => 28,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  108 => 21,  103 => 20,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
\t<h1>Vos cartes</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Attaque</th>
                <th>Défense</th>
                <th>Pouvoir</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        {% for carte in app.user.cartes %}
            <tr>
                <td>{{ carte.id }}</td>
                <td>{{ carte.Nom }}</td>
                <td>{{ carte.Attaque }}</td>
                <td>{{ carte.defense }}</td>
                <td>{{ carte.pouvoir }}</td>
                <td>
                    <a href=\"{{ path('app_carte_show', {'id': carte.id}) }}\">Voir</a>
                    <a href=\"{{ path('app_carte_edit', {'id': carte.id}) }}\">Editer</a>
                </td>
            </tr>
        {% else %}            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>

        {% endfor %}
        </tbody>
    </table>
    <a href={{ path('app_carte_new')}}> <button class=\"btn btn-primary\">Nouvelle carte</button> </a>
    <h1>Vos paquets</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Cartes</th>
                <th>Publique</th>
            </tr>
        </thead>
        <tbody>
        {% for paquet in app.user.paquets %}
            <tr>
                <td>{{ paquet.id }}</td>
                <td>{{ paquet.description }}</td>
                <td>{% for carte in paquet.items %}
                {{ carte.Nom }} 
                {% endfor %}</td>
                <td>{% if paquet.publique %}
                    \tOui
                    {% else %}
                    \tNon
                </td>
                {% endif %}
                <td>
                    <a href=\"{{ path('app_paquet_show', {'id': paquet.id}) }}\">Voir</a>
                    <a href=\"{{ path('app_paquet_edit', {'id': paquet.id}) }}\">Editer</a>
                </td>
            </tr>
        {% else %}            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>

        {% endfor %}
        </tbody>
    </table>
    <a href={{ path('app_paquet_new')}}> <button class=\"btn btn-primary\">Nouveau paquet</button> </a>
    
    <h1>Votre compte</h1>

{{ include('user/_form.html.twig') }}

{% endblock %}
", "my_account/index.html.twig", "C:\\Users\\hpesq\\OneDrive\\Bureau\\Informatique\\Projet_magic\\MagicCards\\templates\\my_account\\index.html.twig");
    }
}
