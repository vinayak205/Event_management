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
        $__internal_6a54e62223ffb3fc8d034275a8c6ecdbf316b33d7d96e29f8975ae57e76f5705 = $this->env->getExtension("native_profiler");
        $__internal_6a54e62223ffb3fc8d034275a8c6ecdbf316b33d7d96e29f8975ae57e76f5705->enter($__internal_6a54e62223ffb3fc8d034275a8c6ecdbf316b33d7d96e29f8975ae57e76f5705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a54e62223ffb3fc8d034275a8c6ecdbf316b33d7d96e29f8975ae57e76f5705->leave($__internal_6a54e62223ffb3fc8d034275a8c6ecdbf316b33d7d96e29f8975ae57e76f5705_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee2d2b5ba81c5f354b53691136df134d2e8547065429af95c3a08cbbc783711e = $this->env->getExtension("native_profiler");
        $__internal_ee2d2b5ba81c5f354b53691136df134d2e8547065429af95c3a08cbbc783711e->enter($__internal_ee2d2b5ba81c5f354b53691136df134d2e8547065429af95c3a08cbbc783711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_ee2d2b5ba81c5f354b53691136df134d2e8547065429af95c3a08cbbc783711e->leave($__internal_ee2d2b5ba81c5f354b53691136df134d2e8547065429af95c3a08cbbc783711e_prof);

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
