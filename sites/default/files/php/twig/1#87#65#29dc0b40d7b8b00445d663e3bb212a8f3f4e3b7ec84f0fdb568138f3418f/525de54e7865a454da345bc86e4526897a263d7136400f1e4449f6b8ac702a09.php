<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_876529dc0b40d7b8b00445d663e3bb212a8f3f4e3b7ec84f0fdb568138f3418f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 42
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 45
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 47
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 48,  46 => 48,  41 => 47,  33 => 45,  22 => 42,  20 => 37,  45 => 28,  39 => 26,  37 => 25,  31 => 44,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 88,  78 => 87,  76 => 86,  72 => 85,  65 => 81,  62 => 80,  56 => 49,  54 => 77,  48 => 51,  42 => 71,  40 => 70,  35 => 69,  29 => 67,  27 => 43,  23 => 65,  43 => 24,  30 => 22,  26 => 21,  21 => 19,  19 => 18,);
    }
}
