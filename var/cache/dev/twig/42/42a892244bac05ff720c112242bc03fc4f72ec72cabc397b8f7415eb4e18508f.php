<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4a9e7ab9a2e8373875f940399b8aaeec35ace584a3d85048d4e154a3be414791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_df2c8da9b99eb23d742f2dd2ee1e26be6277f7dba99784ce33f313b2f28f6737 = $this->env->getExtension("native_profiler");
        $__internal_df2c8da9b99eb23d742f2dd2ee1e26be6277f7dba99784ce33f313b2f28f6737->enter($__internal_df2c8da9b99eb23d742f2dd2ee1e26be6277f7dba99784ce33f313b2f28f6737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2c8da9b99eb23d742f2dd2ee1e26be6277f7dba99784ce33f313b2f28f6737->leave($__internal_df2c8da9b99eb23d742f2dd2ee1e26be6277f7dba99784ce33f313b2f28f6737_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b7a51a5430d371e7f6aaaf6612b75eb3f60b3414b6e16fac506302a9347abe0 = $this->env->getExtension("native_profiler");
        $__internal_0b7a51a5430d371e7f6aaaf6612b75eb3f60b3414b6e16fac506302a9347abe0->enter($__internal_0b7a51a5430d371e7f6aaaf6612b75eb3f60b3414b6e16fac506302a9347abe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b7a51a5430d371e7f6aaaf6612b75eb3f60b3414b6e16fac506302a9347abe0->leave($__internal_0b7a51a5430d371e7f6aaaf6612b75eb3f60b3414b6e16fac506302a9347abe0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_132cb9d6d645439538d16aebac98ba8efd1ee9b9506064acee4b71e544c47193 = $this->env->getExtension("native_profiler");
        $__internal_132cb9d6d645439538d16aebac98ba8efd1ee9b9506064acee4b71e544c47193->enter($__internal_132cb9d6d645439538d16aebac98ba8efd1ee9b9506064acee4b71e544c47193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_132cb9d6d645439538d16aebac98ba8efd1ee9b9506064acee4b71e544c47193->leave($__internal_132cb9d6d645439538d16aebac98ba8efd1ee9b9506064acee4b71e544c47193_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cc15d3747d81aef9aefdce2649ed3a2395f816467be93a36b9abb21a65c31ed = $this->env->getExtension("native_profiler");
        $__internal_4cc15d3747d81aef9aefdce2649ed3a2395f816467be93a36b9abb21a65c31ed->enter($__internal_4cc15d3747d81aef9aefdce2649ed3a2395f816467be93a36b9abb21a65c31ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4cc15d3747d81aef9aefdce2649ed3a2395f816467be93a36b9abb21a65c31ed->leave($__internal_4cc15d3747d81aef9aefdce2649ed3a2395f816467be93a36b9abb21a65c31ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
