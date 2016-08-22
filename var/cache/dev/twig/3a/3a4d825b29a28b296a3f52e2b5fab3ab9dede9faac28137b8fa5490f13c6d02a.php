<?php

/* :default:test.html.twig */
class __TwigTemplate_266db6afcded26bb831084e84acd98bd5a318330831481eb0a61f19175f32feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", array()), "twig", array()), ":default:test.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e47d4875aef630d62cdab79ca905a27f792fdf9678c3f0c23218e8ec524af75 = $this->env->getExtension("native_profiler");
        $__internal_0e47d4875aef630d62cdab79ca905a27f792fdf9678c3f0c23218e8ec524af75->enter($__internal_0e47d4875aef630d62cdab79ca905a27f792fdf9678c3f0c23218e8ec524af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e47d4875aef630d62cdab79ca905a27f792fdf9678c3f0c23218e8ec524af75->leave($__internal_0e47d4875aef630d62cdab79ca905a27f792fdf9678c3f0c23218e8ec524af75_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_880d4c6097f108deaa99f165d4489b291b493bcf8532a8ccb9c24f3ed4661488 = $this->env->getExtension("native_profiler");
        $__internal_880d4c6097f108deaa99f165d4489b291b493bcf8532a8ccb9c24f3ed4661488->enter($__internal_880d4c6097f108deaa99f165d4489b291b493bcf8532a8ccb9c24f3ed4661488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_880d4c6097f108deaa99f165d4489b291b493bcf8532a8ccb9c24f3ed4661488->leave($__internal_880d4c6097f108deaa99f165d4489b291b493bcf8532a8ccb9c24f3ed4661488_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  33 => 2,  18 => 1,);
    }
}
/* {% extends base.html.twig %}*/
/* {% block body %}*/
/* 	Test*/
/* {% endblock %}*/
