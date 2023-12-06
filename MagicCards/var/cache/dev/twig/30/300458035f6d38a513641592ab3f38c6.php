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

/* welcome/index.html.twig */
class __TwigTemplate_b81d9e9b02dd6dc52e34aa3ad6270c35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "welcome/index.html.twig", 1);
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

        echo "Bienvenue";
        
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
        echo "<main>
    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #banner,
        #features {
            width: 70%;
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f8f8f8;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
<section id=\"banner\">
    <h1>
       Galerie pour fan de cartes Magic
    </h1>
    <p>
       Bienvenue sur ce site web ! <br>
       Ce site est destiné à tous les fan de cartes magic pour mettre en ligne vos meilleurs paquets afin de gagner tous les tournois.<br>
       Si vous jouez les cartes blanches vous serez cependant bannis à vie de ce site je préfère prévenir (grâce à ma superbe interface admin)
    </p>
</section>
 
<section id=\"features\" >
    <div>

      <!-- Titre -->
<h2>Rejoignez la Communauté Magique !</h2>
                <img src=\"./register.jpg\" width=\"500\" 
     height=\"200\"/>  
       <p>

<!-- Corps -->
<p>Bienvenue sur notre communauté dédiée aux passionnés de cartes Magic ! 🌟</p>

<p>Pour profiter pleinement de toutes les fonctionnalités exclusives de notre site, nous vous invitons à vous inscrire dès maintenant. En tant que membre, vous aurez accès à des fonctionnalités passionnantes, telles que la création et la consultation de vos paquets de cartes uniques, et bien plus encore !</p>

<!-- Avantages de l'inscription -->
<ul>
    <li>✔️ <strong>Créez vos Paquets Uniques :</strong> Concevez et partagez vos stratégies de jeu en créant vos propres paquets de cartes Magic.</li>
    <li>🔍 <strong>Explorez la Galerie des Cartes :</strong> Découvrez les créations époustouflantes des autres membres de la communauté et trouvez l'inspiration pour vos propres decks.</li>
</ul>

<!-- Appel à l'action -->
<p>Rejoignez-nous dès aujourd'hui et plongez dans l'univers fascinant de Magic !</p>

<!-- Lien d'inscription -->
<p>[<a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Inscrivez-vous maintenant !</a>]</p>

<!-- Conclusion -->
<p>Nous sommes impatients de vous accueillir dans notre communauté de joueurs passionnés.</p>

<p>À bientôt sur le champ de bataille !</p>
       </p>
    </div>
    <div>

        <p><!-- Titre -->
<h2>Dévoilez Votre Stratégie Unique !</h2>
\t\t<img src=\"./galerie_carte.png\" width=\"1000\" 
     height=\"400\"/>

<!-- Corps -->
<p>Cher(e) membre de notre communauté magique,</p>

<p>Vous rêvez de mettre en œuvre des stratégies de jeu incomparables ? Votre espace personnel sur [Nom de Votre Site] vous ouvre les portes de l'innovation avec notre toute nouvelle fonctionnalité : les \"Paquets Personnalisables\" !</p>

<!-- Points forts -->
<ul>
    <li>🌟 <strong>Créez votre propre univers de jeu :</strong> Dans l'onglet \"Mon Compte\", découvrez l'outil puissant qui vous permet de concevoir des paquets de cartes uniques, reflétant votre style de jeu et votre personnalité. Choisissez parmi une vaste collection de cartes Magic pour construire des decks qui vous ressemblent.</li>
    <li>🚀 <strong>Partagez votre génie tactique :</strong> Une fois votre paquet perfectionné, partagez-le avec la communauté ! Les autres membres pourront admirer vos créations, apprendre de vos stratégies et peut-être même relever le défi en affrontant votre paquet.</li>
    <li>🔥 <strong>Relevez des Défis Épiques :</strong> Lancez des défis à d'autres membres en mettant en jeu vos paquets personnalisés. Qui sait, vous pourriez devenir une légende dans notre communauté en remportant des tournois avec votre stratégie unique.</li>
</ul>

<!-- Conclusion -->
<p>Explorez l'infini potentiel des \"Paquets Personnalisables\" dès maintenant depuis votre espace \"Mon Compte\". Développez votre réputation, inspirez les autres membres, et plongez dans une expérience de jeu magique comme jamais auparavant.</p>

<p>Préparez-vous à vivre l'aventure, Maître des Cartes !</p>
        </p>
     </div>
</section>
</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 67,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue{% endblock %}

{% block body %}
<main>
    <style>
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        #banner,
        #features {
            width: 70%;
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f8f8f8;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
<section id=\"banner\">
    <h1>
       Galerie pour fan de cartes Magic
    </h1>
    <p>
       Bienvenue sur ce site web ! <br>
       Ce site est destiné à tous les fan de cartes magic pour mettre en ligne vos meilleurs paquets afin de gagner tous les tournois.<br>
       Si vous jouez les cartes blanches vous serez cependant bannis à vie de ce site je préfère prévenir (grâce à ma superbe interface admin)
    </p>
</section>
 
<section id=\"features\" >
    <div>

      <!-- Titre -->
<h2>Rejoignez la Communauté Magique !</h2>
                <img src=\"./register.jpg\" width=\"500\" 
     height=\"200\"/>  
       <p>

<!-- Corps -->
<p>Bienvenue sur notre communauté dédiée aux passionnés de cartes Magic ! 🌟</p>

<p>Pour profiter pleinement de toutes les fonctionnalités exclusives de notre site, nous vous invitons à vous inscrire dès maintenant. En tant que membre, vous aurez accès à des fonctionnalités passionnantes, telles que la création et la consultation de vos paquets de cartes uniques, et bien plus encore !</p>

<!-- Avantages de l'inscription -->
<ul>
    <li>✔️ <strong>Créez vos Paquets Uniques :</strong> Concevez et partagez vos stratégies de jeu en créant vos propres paquets de cartes Magic.</li>
    <li>🔍 <strong>Explorez la Galerie des Cartes :</strong> Découvrez les créations époustouflantes des autres membres de la communauté et trouvez l'inspiration pour vos propres decks.</li>
</ul>

<!-- Appel à l'action -->
<p>Rejoignez-nous dès aujourd'hui et plongez dans l'univers fascinant de Magic !</p>

<!-- Lien d'inscription -->
<p>[<a href=\"{{ path('app_register') }}\">Inscrivez-vous maintenant !</a>]</p>

<!-- Conclusion -->
<p>Nous sommes impatients de vous accueillir dans notre communauté de joueurs passionnés.</p>

<p>À bientôt sur le champ de bataille !</p>
       </p>
    </div>
    <div>

        <p><!-- Titre -->
<h2>Dévoilez Votre Stratégie Unique !</h2>
\t\t<img src=\"./galerie_carte.png\" width=\"1000\" 
     height=\"400\"/>

<!-- Corps -->
<p>Cher(e) membre de notre communauté magique,</p>

<p>Vous rêvez de mettre en œuvre des stratégies de jeu incomparables ? Votre espace personnel sur [Nom de Votre Site] vous ouvre les portes de l'innovation avec notre toute nouvelle fonctionnalité : les \"Paquets Personnalisables\" !</p>

<!-- Points forts -->
<ul>
    <li>🌟 <strong>Créez votre propre univers de jeu :</strong> Dans l'onglet \"Mon Compte\", découvrez l'outil puissant qui vous permet de concevoir des paquets de cartes uniques, reflétant votre style de jeu et votre personnalité. Choisissez parmi une vaste collection de cartes Magic pour construire des decks qui vous ressemblent.</li>
    <li>🚀 <strong>Partagez votre génie tactique :</strong> Une fois votre paquet perfectionné, partagez-le avec la communauté ! Les autres membres pourront admirer vos créations, apprendre de vos stratégies et peut-être même relever le défi en affrontant votre paquet.</li>
    <li>🔥 <strong>Relevez des Défis Épiques :</strong> Lancez des défis à d'autres membres en mettant en jeu vos paquets personnalisés. Qui sait, vous pourriez devenir une légende dans notre communauté en remportant des tournois avec votre stratégie unique.</li>
</ul>

<!-- Conclusion -->
<p>Explorez l'infini potentiel des \"Paquets Personnalisables\" dès maintenant depuis votre espace \"Mon Compte\". Développez votre réputation, inspirez les autres membres, et plongez dans une expérience de jeu magique comme jamais auparavant.</p>

<p>Préparez-vous à vivre l'aventure, Maître des Cartes !</p>
        </p>
     </div>
</section>
</main>

{% endblock %}
", "welcome/index.html.twig", "C:\\Users\\hpesq\\OneDrive\\Bureau\\Informatique\\Projet_magic\\MagicCards\\templates\\welcome\\index.html.twig");
    }
}
