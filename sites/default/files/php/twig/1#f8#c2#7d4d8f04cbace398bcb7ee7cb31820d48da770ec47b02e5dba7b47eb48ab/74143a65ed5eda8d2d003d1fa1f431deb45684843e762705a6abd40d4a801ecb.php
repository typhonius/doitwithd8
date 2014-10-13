<?php

/* core/modules/system/templates/details.html.twig */
class __TwigTemplate_f8c27d4d8f04cbace398bcb7ee7cb31820d48da770ec47b02e5dba7b47eb48ab extends Twig_Template
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
        echo "<details";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 20
            echo "<summary";
            echo twig_drupal_escape_filter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</summary>";
        }
        // line 22
        echo "<div class=\"details-wrapper\">";
        // line 23
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 24
            echo "<div class=\"details-description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>";
        }
        // line 26
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 27
            echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        }
        // line 29
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 30
            echo twig_drupal_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        }
        // line 32
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 30,  43 => 27,  41 => 26,  34 => 23,  25 => 20,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 32,  46 => 29,  42 => 30,  32 => 22,  27 => 24,  26 => 20,  54 => 34,  49 => 32,  45 => 31,  39 => 29,  36 => 24,  30 => 22,  28 => 21,  24 => 16,  21 => 22,  35 => 27,  29 => 25,  23 => 19,  19 => 18,);
    }
}
