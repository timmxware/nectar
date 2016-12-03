<?php

/* inputs/buttons.html */
class __TwigTemplate_54621baeb93a559de3844842f350d4fb54a4ec753316385cd4a5daaa6487bc9e extends Twig_Template
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
        echo "<div class=\"buttons\">
\t<input type=\"submit\" id=\"btn-create-project\" class=\"btn fr valid\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["validlabel"] ?? null), "html", null, true);
        echo "\">
\t<input type=\"submit\" class=\"btn fr cancel\" value=\"Annuler\">
</div>

";
    }

    public function getTemplateName()
    {
        return "inputs/buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"buttons\">
\t<input type=\"submit\" id=\"btn-create-project\" class=\"btn fr valid\" value=\"{{validlabel}}\">
\t<input type=\"submit\" class=\"btn fr cancel\" value=\"Annuler\">
</div>

", "inputs/buttons.html", "/home/vagrant/nectar/app/views/inputs/buttons.html");
    }
}
