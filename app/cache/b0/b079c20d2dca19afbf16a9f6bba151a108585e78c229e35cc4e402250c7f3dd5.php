<?php

/* repos/create.html */
class __TwigTemplate_3c1d7e0d5720c1be00ff2e7f0184ddf280aca0ee5c66f7551aa1b3e23f982ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"create-form\" class=\"form\">
<form class=\"center\" action=\"\">
<h1>Création d'un projet</h1>

\t";
        // line 5
        $this->loadTemplate("inputs/input.html", "repos/create.html", 5)->display(array_merge($context, array("id" => "projectname", "icon" => "book", "title" => "Nom du projet", "placeholder" => "super-project", "description" => "Le nom du projet doit être composé de minuscules et de tirets uniquement. Il ne peut pas être modifié après la création.")));
        // line 12
        echo "
\t";
        // line 13
        $this->loadTemplate("inputs/radios.html", "repos/create.html", 13)->display(array_merge($context, array("id" => "projecttype", "icon" => "cog", "title" => "Type de projet", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "value" => array(0 => "html5", 1 => "symfony", 2 => "virgin"), "type" => array(0 => "Projet HTML5", 1 => "Projet Symfony", 2 => "Projet vide"), "img" => array(0 => "html5.svg", 1 => "symfony.svg", 2 => "empty.svg"))));
        // line 22
        echo "
\t";
        // line 23
        $this->loadTemplate("inputs/checkbox.html", "repos/create.html", 23)->display(array_merge($context, array("id" => "ishosted", "icon" => "server", "description" => "Le projet sera déployé sur le serveur.", "value" => "ishosted", "title" => "En préprod sur ce serveur")));
        // line 30
        echo "
\t";
        // line 31
        $this->loadTemplate("inputs/checkbox.html", "repos/create.html", 31)->display(array_merge($context, array("id" => "isdb", "icon" => "database", "description" => "Installe MySQL, PHPMyAdmin et une base de données vide.", "value" => "isdb", "title" => "Nécessite une base de données")));
        // line 38
        echo "
\t<p id=\"advanced-settings-title\" class=\"important-link\">Réglages avancés</p>
\t<section id=\"advanced-settings\" class=\"is-hidden well\" >

\t";
        // line 42
        $this->loadTemplate("inputs/input.html", "repos/create.html", 42)->display(array_merge($context, array("id" => "publicfolder", "icon" => "folder-open", "value" => "web", "title" => "Dossier public", "description" => "Le dossier public du site.")));
        // line 49
        echo "
\t";
        // line 50
        $this->loadTemplate("inputs/select.html", "repos/create.html", 50)->display(array_merge($context, array("id" => "phpver", "title" => "Version de PHP", "icon" => "server", "description" => "Choix entre PHP 5.6 et 7. Le serveur ne supporte que PHP 7.x", "options" => array(0 => "7", 1 => "5.6"))));
        // line 57
        echo "
\t";
        // line 58
        $this->loadTemplate("inputs/input.html", "repos/create.html", 58)->display(array_merge($context, array("id" => "pmaver", "icon" => "database", "value" => "4.6.4", "title" => "Version de PHPMyAdmin", "description" => "Version de PHPMyAdmin")));
        // line 65
        echo "
\t";
        // line 66
        $this->loadTemplate("inputs/input.html", "repos/create.html", 66)->display(array_merge($context, array("id" => "defaultdb", "icon" => "table", "disabled" => "disabled", "title" => "Nom de la base de données par défaut", "description" => "La base de données chargée automatiquement au lancement de la VM.")));
        // line 73
        echo "
\t";
        // line 74
        $context["customIP"] = ((("192.168." . twig_random($this->env, 198)) . ".") . twig_random($this->env, 98));
        // line 75
        echo "\t";
        $this->loadTemplate("inputs/input.html", "repos/create.html", 75)->display(array_merge($context, array("id" => "customip", "icon" => "globe", "value" =>         // line 78
($context["customIP"] ?? null), "title" => "Adresse IP locale", "description" => "L'adresse IP de développement.")));
        // line 82
        echo "
\t";
        // line 83
        $this->loadTemplate("inputs/input.html", "repos/create.html", 83)->display(array_merge($context, array("id" => "timezone", "icon" => "clock-o", "value" => "Europe/Paris", "title" => "Fuseau horaire", "description" => "Sélection du fuseau horaire de la machine")));
        // line 90
        echo "
\t";
        // line 91
        $this->loadTemplate("inputs/input.html", "repos/create.html", 91)->display(array_merge($context, array("id" => "password", "icon" => "lock", "value" => "root", "title" => "Mot de passe root", "description" => "Mot de passe par default pour les différents services (mysql, PHPMyadmin,...")));
        // line 98
        echo "
\t</section>

\t";
        // line 101
        $this->loadTemplate("inputs/buttons.html", "repos/create.html", 101)->display(array_merge($context, array("validlabel" => "Créer le projet")));
        // line 104
        echo "
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "repos/create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 104,  89 => 101,  84 => 98,  82 => 91,  79 => 90,  77 => 83,  74 => 82,  72 => 78,  70 => 75,  68 => 74,  65 => 73,  63 => 66,  60 => 65,  58 => 58,  55 => 57,  53 => 50,  50 => 49,  48 => 42,  42 => 38,  40 => 31,  37 => 30,  35 => 23,  32 => 22,  30 => 13,  27 => 12,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"create-form\" class=\"form\">
<form class=\"center\" action=\"\">
<h1>Création d'un projet</h1>

\t{% include 'inputs/input.html' with {
\tid: 'projectname',
\ticon: 'book',
\ttitle: 'Nom du projet',
\tplaceholder: 'super-project',
\tdescription: 'Le nom du projet doit être composé de minuscules et de tirets uniquement. Il ne peut pas être modifié après la création.' ,
\t}%}

\t{% include 'inputs/radios.html' with {
\tid: 'projecttype',
\ticon: 'cog',
\ttitle: 'Type de projet',
\tdescription: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
\tvalue: ['html5','symfony', 'virgin'],
\ttype: ['Projet HTML5','Projet Symfony', 'Projet vide'],
\timg: ['html5.svg', 'symfony.svg', 'empty.svg'],
\t}%}

\t{% include 'inputs/checkbox.html' with {
\tid: 'ishosted',
\ticon: 'server',
\tdescription: 'Le projet sera déployé sur le serveur.',
\tvalue: 'ishosted',
\ttitle: 'En préprod sur ce serveur',
\t}%}

\t{% include 'inputs/checkbox.html' with {
\tid: 'isdb',
\ticon: 'database',
\tdescription: 'Installe MySQL, PHPMyAdmin et une base de données vide.',
\tvalue: 'isdb',
\ttitle: 'Nécessite une base de données',
\t}%}

\t<p id=\"advanced-settings-title\" class=\"important-link\">Réglages avancés</p>
\t<section id=\"advanced-settings\" class=\"is-hidden well\" >

\t{% include 'inputs/input.html' with {
\tid: 'publicfolder',
\ticon: 'folder-open',
\tvalue: 'web',
\ttitle: 'Dossier public',
\tdescription: 'Le dossier public du site.',
\t}%}

\t{% include 'inputs/select.html' with {
\tid: 'phpver',
\ttitle: 'Version de PHP',
\ticon: 'server',
\tdescription: 'Choix entre PHP 5.6 et 7. Le serveur ne supporte que PHP 7.x',
\toptions\t: ['7','5.6']
\t}%}

\t{% include 'inputs/input.html' with {
\tid: 'pmaver',
\ticon: 'database',
\tvalue: '4.6.4',
\ttitle: 'Version de PHPMyAdmin',
\tdescription: 'Version de PHPMyAdmin',
\t}%}

\t{% include 'inputs/input.html' with {
\tid: 'defaultdb',
\ticon: 'table',
\tdisabled: 'disabled',
\ttitle: 'Nom de la base de données par défaut',
\tdescription: \"La base de données chargée automatiquement au lancement de la VM.\",
\t}%}

\t{% set customIP = '192.168.' ~ random(198) ~ '.' ~ random(98) %}
\t{% include 'inputs/input.html' with {
\tid: 'customip',
\ticon: 'globe',
\tvalue: customIP,
\ttitle: 'Adresse IP locale',
\tdescription: \"L'adresse IP de développement.\",
\t}%}

\t{% include 'inputs/input.html' with {
\tid: 'timezone',
\ticon: 'clock-o',
\tvalue: 'Europe/Paris',
\ttitle: 'Fuseau horaire',
\tdescription: 'Sélection du fuseau horaire de la machine',
\t}%}

\t{% include 'inputs/input.html' with {
\tid: 'password',
\ticon: 'lock',
\tvalue: 'root',
\ttitle: 'Mot de passe root',
\tdescription: 'Mot de passe par default pour les différents services (mysql, PHPMyadmin,...',
\t}%}

\t</section>

\t{% include 'inputs/buttons.html' with {
\tvalidlabel: 'Créer le projet',
\t}%}

</form>
</div>
", "repos/create.html", "/home/vagrant/nectar/app/views/repos/create.html");
    }
}
