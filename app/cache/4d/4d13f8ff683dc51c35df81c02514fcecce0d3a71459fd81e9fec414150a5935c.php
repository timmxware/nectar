<?php

/* inputs/select.html */
class __TwigTemplate_1d82138eba212be2ec35477c3e3037d7c6f4302da9db2f79bd968ab0abf64d85 extends Twig_Template
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
  <label for=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " :</label>
  <p class=\"description\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</p>
  <select id=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 6
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "inputs/select.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  44 => 6,  40 => 5,  34 => 4,  30 => 3,  22 => 2,  19 => 1,);
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
  <label for=\"{{id}}\"><i class=\"fa fa-{{icon}}\"></i> {{title}} :</label>
  <p class=\"description\">{{description}}</p>
  <select id=\"{{id}}\" name=\"{{id}}\">
    {% for option in options %}
    <option value=\"{{ option }}\">{{ option }}</option>
    {% endfor %}
  </select>
</div>
", "inputs/select.html", "/home/vagrant/nectar/app/views/inputs/select.html");
    }
}
