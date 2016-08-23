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
        $__internal_14e2c74af2f21d3253af3cb0892758dc7b8dd291f8ac4f3c3c0b0cc1f72e4e37 = $this->env->getExtension("native_profiler");
        $__internal_14e2c74af2f21d3253af3cb0892758dc7b8dd291f8ac4f3c3c0b0cc1f72e4e37->enter($__internal_14e2c74af2f21d3253af3cb0892758dc7b8dd291f8ac4f3c3c0b0cc1f72e4e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14e2c74af2f21d3253af3cb0892758dc7b8dd291f8ac4f3c3c0b0cc1f72e4e37->leave($__internal_14e2c74af2f21d3253af3cb0892758dc7b8dd291f8ac4f3c3c0b0cc1f72e4e37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac2f44e6334cadb82ae65b5c93bd851de303f78e229e9122471a130690cc8c0 = $this->env->getExtension("native_profiler");
        $__internal_4ac2f44e6334cadb82ae65b5c93bd851de303f78e229e9122471a130690cc8c0->enter($__internal_4ac2f44e6334cadb82ae65b5c93bd851de303f78e229e9122471a130690cc8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_4ac2f44e6334cadb82ae65b5c93bd851de303f78e229e9122471a130690cc8c0->leave($__internal_4ac2f44e6334cadb82ae65b5c93bd851de303f78e229e9122471a130690cc8c0_prof);

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
