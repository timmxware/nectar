<?php

/* inputs/radios.html */
class __TwigTemplate_f35aca1c8ad9f5aa4af9c2863da0c2e66566bb628c8278f2d850a5c8397eafde extends Twig_Template
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
  <fieldset>
    <legend><i class=\"fa fa-";
        // line 3
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " :</legend>
    <p class=\"description\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
    <div class=\"grid-3 has-gutter-l\">
     ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["k"]) {
            // line 7
            echo "     <div class=\"radio-img \">
       <input type=\"radio\" name=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\" ";
            echo ((($context["i"] == 0)) ? ("checked") : (""));
            echo " />
       <label for=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\"><img class=\"center\" src=\"";
            echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
            echo "/img/projects/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["img"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\" alt=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["type"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "</label>
     </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "   </div>
 </fieldset>
</div>";
    }

    public function getTemplateName()
    {
        return "inputs/radios.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  51 => 9,  41 => 8,  38 => 7,  34 => 6,  29 => 4,  23 => 3,  19 => 1,);
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
  <fieldset>
    <legend><i class=\"fa fa-{{icon}}\"></i> {{title}} :</legend>
    <p class=\"description\">{{description}}</p>
    <div class=\"grid-3 has-gutter-l\">
     {% for i,k in value %}
     <div class=\"radio-img \">
       <input type=\"radio\" name=\"{{id}}\" id=\"{{value[i]}}\" value=\"{{value[i]}}\" {{ i == 0 ? 'checked' : '' }} />
       <label for=\"{{value[i]}}\"><img class=\"center\" src=\"{{ ASSET_ROOT }}/img/projects/{{img[i]}}\" alt=\"\">{{type[i]}}</label>
     </div>
     {% endfor %}
   </div>
 </fieldset>
</div>", "inputs/radios.html", "/home/vagrant/nectar/app/views/inputs/radios.html");
    }
}
