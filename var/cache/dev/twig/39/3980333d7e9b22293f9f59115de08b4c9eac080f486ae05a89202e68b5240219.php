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
        $__internal_03d071f4d9276372cd3b8991a4322ef05269f144f46c347b936fa8c8040e64d3 = $this->env->getExtension("native_profiler");
        $__internal_03d071f4d9276372cd3b8991a4322ef05269f144f46c347b936fa8c8040e64d3->enter($__internal_03d071f4d9276372cd3b8991a4322ef05269f144f46c347b936fa8c8040e64d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d071f4d9276372cd3b8991a4322ef05269f144f46c347b936fa8c8040e64d3->leave($__internal_03d071f4d9276372cd3b8991a4322ef05269f144f46c347b936fa8c8040e64d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2b08e444b2171312407ca22021bb5ff2ec150b18992b7359424c1e3ba7347fc = $this->env->getExtension("native_profiler");
        $__internal_f2b08e444b2171312407ca22021bb5ff2ec150b18992b7359424c1e3ba7347fc->enter($__internal_f2b08e444b2171312407ca22021bb5ff2ec150b18992b7359424c1e3ba7347fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_f2b08e444b2171312407ca22021bb5ff2ec150b18992b7359424c1e3ba7347fc->leave($__internal_f2b08e444b2171312407ca22021bb5ff2ec150b18992b7359424c1e3ba7347fc_prof);

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
