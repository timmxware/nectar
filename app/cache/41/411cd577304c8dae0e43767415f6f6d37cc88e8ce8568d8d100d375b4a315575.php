<?php

/* inputs/checkbox.html */
class __TwigTemplate_cf0462b738ca5db96b2924b56228ae906d4aba63ae28629af7854e81b2d8a96f extends Twig_Template
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
        echo "<div class=\"field\">
\t<label for=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " : <input type=\"checkbox\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"></label>
\t<p class=\"description\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "inputs/checkbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"field\">
\t<label for=\"{{id}}\"><i class=\"fa fa-{{icon}}\"></i> {{title}} : <input type=\"checkbox\" id=\"{{id}}\" value=\"{{value}}\"></label>
\t<p class=\"description\">{{description}}</p>
</div>

", "inputs/checkbox.html", "/home/vagrant/nectar/app/views/inputs/checkbox.html");
    }
}
