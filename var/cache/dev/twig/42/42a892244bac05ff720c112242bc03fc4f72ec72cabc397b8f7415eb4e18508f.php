<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4a9e7ab9a2e8373875f940399b8aaeec35ace584a3d85048d4e154a3be414791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6bc31ca1040df19657b049d7b1f4754ab7da6afb76256a7ba8d5510e31a4be0 = $this->env->getExtension("native_profiler");
        $__internal_f6bc31ca1040df19657b049d7b1f4754ab7da6afb76256a7ba8d5510e31a4be0->enter($__internal_f6bc31ca1040df19657b049d7b1f4754ab7da6afb76256a7ba8d5510e31a4be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bc31ca1040df19657b049d7b1f4754ab7da6afb76256a7ba8d5510e31a4be0->leave($__internal_f6bc31ca1040df19657b049d7b1f4754ab7da6afb76256a7ba8d5510e31a4be0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09e2c414eab302ce3572326747e1d2f622f3160d4bc801abff994306a0c3228f = $this->env->getExtension("native_profiler");
        $__internal_09e2c414eab302ce3572326747e1d2f622f3160d4bc801abff994306a0c3228f->enter($__internal_09e2c414eab302ce3572326747e1d2f622f3160d4bc801abff994306a0c3228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09e2c414eab302ce3572326747e1d2f622f3160d4bc801abff994306a0c3228f->leave($__internal_09e2c414eab302ce3572326747e1d2f622f3160d4bc801abff994306a0c3228f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d78ae0372c1caeb52a62c2d380b38c41c1567d2fc8e96da58051eae11c64153 = $this->env->getExtension("native_profiler");
        $__internal_6d78ae0372c1caeb52a62c2d380b38c41c1567d2fc8e96da58051eae11c64153->enter($__internal_6d78ae0372c1caeb52a62c2d380b38c41c1567d2fc8e96da58051eae11c64153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d78ae0372c1caeb52a62c2d380b38c41c1567d2fc8e96da58051eae11c64153->leave($__internal_6d78ae0372c1caeb52a62c2d380b38c41c1567d2fc8e96da58051eae11c64153_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_321d44c4e0199b57f676a6d5fe3f628e348313bc5ee99cbf0d05650eaf0e8f97 = $this->env->getExtension("native_profiler");
        $__internal_321d44c4e0199b57f676a6d5fe3f628e348313bc5ee99cbf0d05650eaf0e8f97->enter($__internal_321d44c4e0199b57f676a6d5fe3f628e348313bc5ee99cbf0d05650eaf0e8f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_321d44c4e0199b57f676a6d5fe3f628e348313bc5ee99cbf0d05650eaf0e8f97->leave($__internal_321d44c4e0199b57f676a6d5fe3f628e348313bc5ee99cbf0d05650eaf0e8f97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
