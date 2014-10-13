<?php

/* core/modules/system/templates/menu-local-tasks.html.twig */
class __TwigTemplate_59094e6ad32d31714df94b619013bd26bb449ead17e22217de8844aa929ba530 extends Twig_Template
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
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 22
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 24
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 24,  33 => 23,  31 => 22,  59 => 40,  48 => 38,  44 => 37,  26 => 20,  24 => 33,  23 => 21,  105 => 103,  102 => 102,  96 => 99,  93 => 98,  91 => 97,  85 => 94,  81 => 93,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  58 => 84,  55 => 83,  53 => 82,  47 => 80,  39 => 36,  34 => 76,  32 => 75,  28 => 74,  29 => 24,  21 => 19,  19 => 18,);
    }
}
