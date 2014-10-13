<?php

/* core/modules/rdf/templates/rdf-metadata.html.twig */
class __TwigTemplate_7973ce2eee7e857a270e6dfd250e42fa83126f17da8887953b334872525d41ec extends Twig_Template
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metadata"]) ? $context["metadata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
            // line 21
            echo "  <span";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "rdf-meta", 1 => "hidden"), "method"), "html", null, true);
            echo "></span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/rdf/templates/rdf-metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 21,  105 => 103,  102 => 102,  96 => 99,  93 => 98,  91 => 97,  85 => 94,  81 => 93,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  58 => 84,  55 => 83,  53 => 82,  47 => 80,  39 => 77,  34 => 76,  32 => 75,  28 => 74,  29 => 24,  21 => 71,  19 => 20,);
    }
}
