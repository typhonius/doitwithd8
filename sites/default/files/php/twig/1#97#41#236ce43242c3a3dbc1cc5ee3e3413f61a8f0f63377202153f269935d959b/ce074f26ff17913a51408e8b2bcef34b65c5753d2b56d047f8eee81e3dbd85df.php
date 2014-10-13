<?php

/* core/modules/system/templates/datetime-form.html.twig */
class __TwigTemplate_9741236ce43242c3a3dbc1cc5ee3e3413f61a8f0f63377202153f269935d959b extends Twig_Template
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
        // line 15
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "container-inline"), "method"), "html", null, true);
        echo ">
  ";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 30,  43 => 27,  41 => 26,  34 => 23,  25 => 20,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 32,  46 => 29,  42 => 30,  32 => 22,  27 => 24,  26 => 20,  54 => 34,  49 => 32,  45 => 31,  39 => 29,  36 => 24,  30 => 22,  28 => 21,  24 => 16,  21 => 22,  35 => 27,  29 => 25,  23 => 19,  19 => 15,);
    }
}
