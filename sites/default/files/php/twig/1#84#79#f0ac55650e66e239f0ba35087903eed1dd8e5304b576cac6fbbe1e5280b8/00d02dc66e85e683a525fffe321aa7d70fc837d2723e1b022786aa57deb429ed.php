<?php

/* core/modules/system/templates/field.html.twig */
class __TwigTemplate_8479f0ac55650e66e239f0ba35087903eed1dd8e5304b576cac6fbbe1e5280b8 extends Twig_Template
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
        // line 32
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 33
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 34
            echo "    <div class=\"field-label";
            if ($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class")) {
                echo " ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class"), "html", null, true);
            }
            echo "\"";
            echo twig_drupal_escape_filter($this->env, twig_without((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo ":&nbsp;</div>
  ";
        }
        // line 36
        echo "  <div class=\"field-items\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
        echo ">
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 38
            echo "      <div class=\"field-item\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item_attributes"]) ? $context["item_attributes"] : null), (isset($context["delta"]) ? $context["delta"] : null), array(), "array"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 40,  48 => 38,  44 => 37,  26 => 34,  24 => 33,  23 => 21,  105 => 103,  102 => 102,  96 => 99,  93 => 98,  91 => 97,  85 => 94,  81 => 93,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  58 => 84,  55 => 83,  53 => 82,  47 => 80,  39 => 36,  34 => 76,  32 => 75,  28 => 74,  29 => 24,  21 => 71,  19 => 32,);
    }
}
