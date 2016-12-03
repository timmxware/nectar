<?php

/* blocks/footer.html */
class __TwigTemplate_f970ab076ea8680cd330a5e6d86f8a6aeb0daba33434dc55cf7e10453ec01f9a extends Twig_Template
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
        echo "  <script>
  var apiUrl = \"";
        // line 2
        echo twig_escape_filter($this->env, ($context["api_url"] ?? null), "html", null, true);
        echo "\";
  var token = \"";
        // line 3
        echo twig_escape_filter($this->env, ($context["access_token"] ?? null), "html", null, true);
        echo "\";
  </script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/js/modal.js\"></script>
  <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/js/rest.js\"></script>
  <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/js/main.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "blocks/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <script>
  var apiUrl = \"{{api_url}}\";
  var token = \"{{access_token}}\";
  </script>
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
  <script src=\"{{ ASSET_ROOT }}/js/modal.js\"></script>
  <script src=\"{{ ASSET_ROOT }}/js/rest.js\"></script>
  <script src=\"{{ ASSET_ROOT }}/js/main.js\"></script>
</body>
</html>
", "blocks/footer.html", "/home/vagrant/nectar/app/views/blocks/footer.html");
    }
}
