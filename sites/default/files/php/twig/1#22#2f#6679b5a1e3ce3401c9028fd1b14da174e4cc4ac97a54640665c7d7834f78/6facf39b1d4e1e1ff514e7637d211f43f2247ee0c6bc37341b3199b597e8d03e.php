<?php

/* core/modules/filter/templates/filter-guidelines.html.twig */
class __TwigTemplate_222f6679b5a1e3ce3401c9028fd1b14da174e4cc4ac97a54640665c7d7834f78 extends Twig_Template
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
        // line 23
        $context["classes"] = array(0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "format")));
        // line 28
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  <h4 class=\"label\">";
        // line 29
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "name"), "html", null, true);
        echo "</h4>
  ";
        // line 30
        echo twig_drupal_escape_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 29,  54 => 34,  49 => 33,  45 => 31,  39 => 29,  36 => 28,  30 => 30,  28 => 25,  24 => 24,  21 => 28,  35 => 28,  29 => 25,  23 => 22,  19 => 23,);
    }
}
