<?php

/* :default:register.html.twig */
class __TwigTemplate_ee949c2479485ad0b3104e2a9e43ca93c41c9613aa28b9d88d37b23292c3b9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:register.html.twig", 1);
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
        $__internal_d1eef88710d07ade15801b82fd857b233722c04768d514e4ebc94f5dd7d44e0d = $this->env->getExtension("native_profiler");
        $__internal_d1eef88710d07ade15801b82fd857b233722c04768d514e4ebc94f5dd7d44e0d->enter($__internal_d1eef88710d07ade15801b82fd857b233722c04768d514e4ebc94f5dd7d44e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1eef88710d07ade15801b82fd857b233722c04768d514e4ebc94f5dd7d44e0d->leave($__internal_d1eef88710d07ade15801b82fd857b233722c04768d514e4ebc94f5dd7d44e0d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef9bab3b01bfe293557dc90a9951a07e85c67eca956902b582530d5d595089d8 = $this->env->getExtension("native_profiler");
        $__internal_ef9bab3b01bfe293557dc90a9951a07e85c67eca956902b582530d5d595089d8->enter($__internal_ef9bab3b01bfe293557dc90a9951a07e85c67eca956902b582530d5d595089d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2 class=\"page-header\">Register</h2>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<button type=\"submit\" class=\"btn btn-success\">Register</button>
<a href=\"/\" class=\"btn btn-danger\">Cancel</a>\t
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ef9bab3b01bfe293557dc90a9951a07e85c67eca956902b582530d5d595089d8->leave($__internal_ef9bab3b01bfe293557dc90a9951a07e85c67eca956902b582530d5d595089d8_prof);

    }

    public function getTemplateName()
    {
        return ":default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2 class="page-header">Register</h2>*/
/* {{form_start(form)}}*/
/* {{form_widget(form)}}*/
/* */
/* <button type="submit" class="btn btn-success">Register</button>*/
/* <a href="/" class="btn btn-danger">Cancel</a>	*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
