<?php

/* :default:index.html.twig */
class __TwigTemplate_814c3912c19c1c91b935c98225fe2f3b760b80cfac9aef0d0a137cf1b88e56b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_cc62ee36c9ac3866061e58165898235fd60e45efdf885ac53f3b75a753d3227e = $this->env->getExtension("native_profiler");
        $__internal_cc62ee36c9ac3866061e58165898235fd60e45efdf885ac53f3b75a753d3227e->enter($__internal_cc62ee36c9ac3866061e58165898235fd60e45efdf885ac53f3b75a753d3227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc62ee36c9ac3866061e58165898235fd60e45efdf885ac53f3b75a753d3227e->leave($__internal_cc62ee36c9ac3866061e58165898235fd60e45efdf885ac53f3b75a753d3227e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_396e09bb6df1335c90b76a1ec687f0cf7acfde0ec860d52dad878b5b18810bc9 = $this->env->getExtension("native_profiler");
        $__internal_396e09bb6df1335c90b76a1ec687f0cf7acfde0ec860d52dad878b5b18810bc9->enter($__internal_396e09bb6df1335c90b76a1ec687f0cf7acfde0ec860d52dad878b5b18810bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_396e09bb6df1335c90b76a1ec687f0cf7acfde0ec860d52dad878b5b18810bc9->leave($__internal_396e09bb6df1335c90b76a1ec687f0cf7acfde0ec860d52dad878b5b18810bc9_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
