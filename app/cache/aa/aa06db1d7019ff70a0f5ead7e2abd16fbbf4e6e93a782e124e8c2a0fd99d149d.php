<?php

/* home/index.php */
class __TwigTemplate_ee9a9c954042efea126d892403596da19acb04a2d3ee960b35eda1b8893dcd9d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Simple MVC</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["ASSET_ROOT"] ?? null), "html", null, true);
        echo "/css/global.css\">
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"content\">
            <header class=\"main\">
                <h1>Welcome to the home/index view</h1>
            </header>

            <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>

            <code>/home/index/[name]/[mood]</code>

            <p>";
        // line 21
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " is ";
        echo twig_escape_filter($this->env, ($context["mood"] ?? null), "html", null, true);
        echo "</p>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/index.php", "/home/vagrant/nectar/app/views/home/index.php");
    }
}
