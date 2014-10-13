<?php

/* core/modules/system/templates/mark.html.twig */
class __TwigTemplate_704954fa23fe7a1e69004d577c6adc7a27d43ab2b5df9c787e6919a83c102bfe extends Twig_Template
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
        // line 16
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 17
            echo "  ";
            if (((isset($context["status"]) ? $context["status"] : null) === constant("MARK_NEW"))) {
                // line 18
                echo "    <span class=\"marker\">";
                echo twig_render_var(t("new"));
                echo "</span>
  ";
            } elseif (((isset($context["status"]) ? $context["status"] : null) === constant("MARK_UPDATED"))) {
                // line 20
                echo "    <span class=\"marker\">";
                echo twig_render_var(t("updated"));
                echo "</span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/mark.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 20,  24 => 18,  21 => 17,  19 => 16,);
    }
}
