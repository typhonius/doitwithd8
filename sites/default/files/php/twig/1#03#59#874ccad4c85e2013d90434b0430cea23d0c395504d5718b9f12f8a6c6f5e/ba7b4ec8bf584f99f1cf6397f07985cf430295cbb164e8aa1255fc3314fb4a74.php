<?php

/* core/modules/node/templates/field--node--title.html.twig */
class __TwigTemplate_0359874ccad4c85e2013d90434b0430cea23d0c395504d5718b9f12f8a6c6f5e extends Twig_Template
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
        // line 18
        echo "<span";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/field--node--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 18,);
    }
}
