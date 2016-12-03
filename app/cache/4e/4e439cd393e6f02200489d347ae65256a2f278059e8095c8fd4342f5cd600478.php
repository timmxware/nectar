<?php

/* repos/list.html */
class __TwigTemplate_1558733aed2cf6887c7dd31a6985dbfbbd051b51a7d940614daeac944be5d2ab extends Twig_Template
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
        $this->loadTemplate("blocks/header.html", "repos/list.html", 1)->display($context);
        // line 2
        echo "

<div class=\"container list-repos\">
\t<div class=\"title-zone\">
\t\t<h1>Liste des projets</h1>
\t\t<a class=\"btn new-repo\" id=\"btn-new-project\" href=\"/repos/create\">
\t\t\t<span class=\"fa fa-plus-circle\"></span> Créer un projet
\t\t</a>
\t</div>
\t<table>
\t\t<thead><tr>
\t\t\t<td>Nom</td>
\t\t\t<td>WebURL</td>
\t\t\t<td>Git</td>
\t\t\t<td>Création</td>
\t\t</tr>
\t</thead>
\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["repos"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["k"]) {
            // line 20
            echo "\t<tr>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["repos"] ?? null), $context["i"]), "name", array()), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["repos"] ?? null), $context["i"]), "web_url", array()), "html", null, true);
            echo "\">Lien</a></td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["repos"] ?? null), $context["i"]), "ssh_url_to_repo", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["repos"] ?? null), $context["i"]), "created_at", array()), 0, 10), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
</div>

<div id=\"modal-zone\"></div>

<!-- <div id=\"login-form\" class=\"w50\" style=\"display:none;\"> -->

<!--
<section class=\"flex-container\">
  <span class=\"flex-item-center\">
    <p>I am centered</p>
  </span>
</section>
-->


<!-- Link to open the modal -->

<!-- <section class=\"grid test\">
  <div class=\"push center three-quarters\">.push</div>
</section> -->

";
        // line 49
        $this->loadTemplate("blocks/footer.html", "repos/list.html", 49)->display($context);
    }

    public function getTemplateName()
    {
        return "repos/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 49,  68 => 27,  59 => 24,  55 => 23,  51 => 22,  47 => 21,  44 => 20,  40 => 19,  21 => 2,  19 => 1,);
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


<div class=\"container list-repos\">
\t<div class=\"title-zone\">
\t\t<h1>Liste des projets</h1>
\t\t<a class=\"btn new-repo\" id=\"btn-new-project\" href=\"/repos/create\">
\t\t\t<span class=\"fa fa-plus-circle\"></span> Créer un projet
\t\t</a>
\t</div>
\t<table>
\t\t<thead><tr>
\t\t\t<td>Nom</td>
\t\t\t<td>WebURL</td>
\t\t\t<td>Git</td>
\t\t\t<td>Création</td>
\t\t</tr>
\t</thead>
\t{% for i,k in repos %}
\t<tr>
\t\t<td>{{ attribute(repos, i).name }}</td>
\t\t<td><a href=\"{{ attribute(repos, i).web_url }}\">Lien</a></td>
\t\t<td>{{ attribute(repos, i).ssh_url_to_repo }}</td>
\t\t<td>{{ attribute(repos, i).created_at |slice(0, 10)}}</td>
\t</tr>
\t{% endfor %}
</table>
</div>

<div id=\"modal-zone\"></div>

<!-- <div id=\"login-form\" class=\"w50\" style=\"display:none;\"> -->

<!--
<section class=\"flex-container\">
  <span class=\"flex-item-center\">
    <p>I am centered</p>
  </span>
</section>
-->


<!-- Link to open the modal -->

<!-- <section class=\"grid test\">
  <div class=\"push center three-quarters\">.push</div>
</section> -->

{% include 'blocks/footer.html' %}
", "repos/list.html", "/home/vagrant/nectar/app/views/repos/list.html");
    }
}
