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
        $__internal_45e4e16cea37a43f5f8c4eea722b319c629db5279ce60f4505d219448ce5bfa7 = $this->env->getExtension("native_profiler");
        $__internal_45e4e16cea37a43f5f8c4eea722b319c629db5279ce60f4505d219448ce5bfa7->enter($__internal_45e4e16cea37a43f5f8c4eea722b319c629db5279ce60f4505d219448ce5bfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45e4e16cea37a43f5f8c4eea722b319c629db5279ce60f4505d219448ce5bfa7->leave($__internal_45e4e16cea37a43f5f8c4eea722b319c629db5279ce60f4505d219448ce5bfa7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d4926d282c5debba90bd00ae45e24552ea10002edc4e0d6334ce2851a4f952 = $this->env->getExtension("native_profiler");
        $__internal_d2d4926d282c5debba90bd00ae45e24552ea10002edc4e0d6334ce2851a4f952->enter($__internal_d2d4926d282c5debba90bd00ae45e24552ea10002edc4e0d6334ce2851a4f952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_d2d4926d282c5debba90bd00ae45e24552ea10002edc4e0d6334ce2851a4f952->leave($__internal_d2d4926d282c5debba90bd00ae45e24552ea10002edc4e0d6334ce2851a4f952_prof);

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
