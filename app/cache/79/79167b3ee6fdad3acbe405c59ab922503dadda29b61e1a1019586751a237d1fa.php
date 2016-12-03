<?php

/* blocks/header.html */
class __TwigTemplate_f367087fe745eff2b1c2e4ba3634c3843eaea482b9503eaa10031b85fbeea7c2 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>Nectar | Timmxware</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/knacss.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/basefields.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/font-awesome.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/modal.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/styles.css\" media=\"all\">
</head>
<body class='";
        // line 14
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "'>
";
    }

    public function getTemplateName()
    {
        return "blocks/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>Nectar | Timmxware</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ ASSET_ROOT }}/css/knacss.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"{{ ASSET_ROOT }}/css/basefields.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"{{ ASSET_ROOT }}/css/font-awesome.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"{{ ASSET_ROOT }}/css/modal.css\" media=\"all\">
  <link rel=\"stylesheet\" href=\"{{ ASSET_ROOT }}/css/styles.css\" media=\"all\">
</head>
<body class='{{class}}'>
", "blocks/header.html", "/home/vagrant/nectar/app/views/blocks/header.html");
    }
}
