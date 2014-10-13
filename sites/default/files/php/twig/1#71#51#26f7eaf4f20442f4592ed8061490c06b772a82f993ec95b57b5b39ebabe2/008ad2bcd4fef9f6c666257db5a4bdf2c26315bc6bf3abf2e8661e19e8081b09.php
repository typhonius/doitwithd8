<?php

/* core/modules/views/templates/views-view-unformatted.html.twig */
class __TwigTemplate_715126f7eaf4f20442f4592ed8061490c06b772a82f993ec95b57b5b39ebabe2 extends Twig_Template
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
        // line 17
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 18
            echo "  <h3>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
";
        }
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"), "html", null, true);
            echo ">
    ";
            // line 22
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 22,  31 => 21,  27 => 20,  21 => 18,  19 => 17,);
    }
}
