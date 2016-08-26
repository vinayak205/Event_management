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
        $__internal_07567d3320bc2aa12f837a648cbdbe33b4780e71220bc123409a284732d311d4 = $this->env->getExtension("native_profiler");
        $__internal_07567d3320bc2aa12f837a648cbdbe33b4780e71220bc123409a284732d311d4->enter($__internal_07567d3320bc2aa12f837a648cbdbe33b4780e71220bc123409a284732d311d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07567d3320bc2aa12f837a648cbdbe33b4780e71220bc123409a284732d311d4->leave($__internal_07567d3320bc2aa12f837a648cbdbe33b4780e71220bc123409a284732d311d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_322aeab4ed89b9592337bb920e41856a8fe23f4189b1e75225a0a96925c0386d = $this->env->getExtension("native_profiler");
        $__internal_322aeab4ed89b9592337bb920e41856a8fe23f4189b1e75225a0a96925c0386d->enter($__internal_322aeab4ed89b9592337bb920e41856a8fe23f4189b1e75225a0a96925c0386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_322aeab4ed89b9592337bb920e41856a8fe23f4189b1e75225a0a96925c0386d->leave($__internal_322aeab4ed89b9592337bb920e41856a8fe23f4189b1e75225a0a96925c0386d_prof);

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
