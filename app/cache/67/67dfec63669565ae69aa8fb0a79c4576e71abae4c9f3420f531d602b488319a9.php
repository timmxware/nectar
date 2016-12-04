<?php

/* login.html */
class __TwigTemplate_39ee683678ea338487be7cc0ba2b9903df91c6835042d926e14c8e4964a774fc extends Twig_Template
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
        $this->loadTemplate("blocks/header.html", "login.html", 1)->display($context);
        // line 2
        echo "<div class=\"login-zone\">
\t<img class=\"\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/img/timmxware.png\" alt=\"\">
\t<input class=\"btn\" type=\"button\" onClick=\"return window.location='";
        // line 4
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "';\" value=\"Connexion\" />
</div>
";
        // line 6
        $this->loadTemplate("blocks/footer.html", "login.html", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'blocks/header.html' %}
<div class=\"login-zone\">
\t<img class=\"\" src=\"{{ ASSET_ROOT }}/img/timmxware.png\" alt=\"\">
\t<input class=\"btn\" type=\"button\" onClick=\"return window.location='{{url}}';\" value=\"Connexion\" />
</div>
{% include 'blocks/footer.html' %}
", "login.html", "/home/vagrant/nectar/app/views/login.html");
    }
}
