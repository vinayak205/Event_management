<?php

/* default/index.html.twig */
class __TwigTemplate_814c3912c19c1c91b935c98225fe2f3b760b80cfac9aef0d0a137cf1b88e56b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cee949209ca21b2887810d2ab53d759c2c3105dc746bfe8c2e030f3635c325cf = $this->env->getExtension("native_profiler");
        $__internal_cee949209ca21b2887810d2ab53d759c2c3105dc746bfe8c2e030f3635c325cf->enter($__internal_cee949209ca21b2887810d2ab53d759c2c3105dc746bfe8c2e030f3635c325cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee949209ca21b2887810d2ab53d759c2c3105dc746bfe8c2e030f3635c325cf->leave($__internal_cee949209ca21b2887810d2ab53d759c2c3105dc746bfe8c2e030f3635c325cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cfdf7bdd7a62b5083208e4c9f05f2fd92649d7cfb57d3da356397d33525d3c8 = $this->env->getExtension("native_profiler");
        $__internal_8cfdf7bdd7a62b5083208e4c9f05f2fd92649d7cfb57d3da356397d33525d3c8->enter($__internal_8cfdf7bdd7a62b5083208e4c9f05f2fd92649d7cfb57d3da356397d33525d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_8cfdf7bdd7a62b5083208e4c9f05f2fd92649d7cfb57d3da356397d33525d3c8->leave($__internal_8cfdf7bdd7a62b5083208e4c9f05f2fd92649d7cfb57d3da356397d33525d3c8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hello*/
/* {% endblock %}*/
/* */
