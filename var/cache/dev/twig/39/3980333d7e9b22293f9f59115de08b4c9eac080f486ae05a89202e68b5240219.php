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
        $__internal_745aa8241912a55aa9fc456ed507f1931f325b7ad4023ed8a10279ecb0190919 = $this->env->getExtension("native_profiler");
        $__internal_745aa8241912a55aa9fc456ed507f1931f325b7ad4023ed8a10279ecb0190919->enter($__internal_745aa8241912a55aa9fc456ed507f1931f325b7ad4023ed8a10279ecb0190919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_745aa8241912a55aa9fc456ed507f1931f325b7ad4023ed8a10279ecb0190919->leave($__internal_745aa8241912a55aa9fc456ed507f1931f325b7ad4023ed8a10279ecb0190919_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad066fada27fac3ff2921b53c941b34dbfef119c0c3f174a76ddfbacdeb33434 = $this->env->getExtension("native_profiler");
        $__internal_ad066fada27fac3ff2921b53c941b34dbfef119c0c3f174a76ddfbacdeb33434->enter($__internal_ad066fada27fac3ff2921b53c941b34dbfef119c0c3f174a76ddfbacdeb33434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_ad066fada27fac3ff2921b53c941b34dbfef119c0c3f174a76ddfbacdeb33434->leave($__internal_ad066fada27fac3ff2921b53c941b34dbfef119c0c3f174a76ddfbacdeb33434_prof);

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
