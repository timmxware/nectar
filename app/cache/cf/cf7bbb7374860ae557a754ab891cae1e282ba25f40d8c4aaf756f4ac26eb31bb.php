<?php

/* inputs/input.html */
class __TwigTemplate_de859993241f969bd34f6f10d47198ad711adf753e6f0748a90e58ea5448077a extends Twig_Template
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
\t<label for=\"create-project-field-";
        // line 2
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " :</label>
\t<p class=\"description\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
\t<input type=\"text\" id=\"create-project-field-";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["disabled"] ?? null), "html", null, true);
        echo " name=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">
</div>";
    }

    public function getTemplateName()
    {
        return "inputs/input.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  22 => 2,  19 => 1,);
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
\t<label for=\"create-project-field-{{id}}\"><i class=\"fa fa-{{icon}}\"></i> {{title}} :</label>
\t<p class=\"description\">{{description}}</p>
\t<input type=\"text\" id=\"create-project-field-{{id}}\" {{disabled}} name=\"{{id}}\" placeholder=\"{{placeholder}}\" value=\"{{value}}\">
</div>", "inputs/input.html", "/home/vagrant/nectar/app/views/inputs/input.html");
    }
}
