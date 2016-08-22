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
        $__internal_c813de792373ae92c556fa1355a9ec8a8e90f5f9b9ace3902081be307e24a7b3 = $this->env->getExtension("native_profiler");
        $__internal_c813de792373ae92c556fa1355a9ec8a8e90f5f9b9ace3902081be307e24a7b3->enter($__internal_c813de792373ae92c556fa1355a9ec8a8e90f5f9b9ace3902081be307e24a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c813de792373ae92c556fa1355a9ec8a8e90f5f9b9ace3902081be307e24a7b3->leave($__internal_c813de792373ae92c556fa1355a9ec8a8e90f5f9b9ace3902081be307e24a7b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0beaa976443c610bb8b89481b8096649cb8144820f08ed65c5526b2e970965e = $this->env->getExtension("native_profiler");
        $__internal_b0beaa976443c610bb8b89481b8096649cb8144820f08ed65c5526b2e970965e->enter($__internal_b0beaa976443c610bb8b89481b8096649cb8144820f08ed65c5526b2e970965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0beaa976443c610bb8b89481b8096649cb8144820f08ed65c5526b2e970965e->leave($__internal_b0beaa976443c610bb8b89481b8096649cb8144820f08ed65c5526b2e970965e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8bdd42a0168170520d6b1d48ee3777727e94e57f57e35bdf73cfa4cf6b16758 = $this->env->getExtension("native_profiler");
        $__internal_d8bdd42a0168170520d6b1d48ee3777727e94e57f57e35bdf73cfa4cf6b16758->enter($__internal_d8bdd42a0168170520d6b1d48ee3777727e94e57f57e35bdf73cfa4cf6b16758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8bdd42a0168170520d6b1d48ee3777727e94e57f57e35bdf73cfa4cf6b16758->leave($__internal_d8bdd42a0168170520d6b1d48ee3777727e94e57f57e35bdf73cfa4cf6b16758_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7732b05169e22b3fd31a7b37c27cd42f89aa320c46e9158136c719581b1d2876 = $this->env->getExtension("native_profiler");
        $__internal_7732b05169e22b3fd31a7b37c27cd42f89aa320c46e9158136c719581b1d2876->enter($__internal_7732b05169e22b3fd31a7b37c27cd42f89aa320c46e9158136c719581b1d2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7732b05169e22b3fd31a7b37c27cd42f89aa320c46e9158136c719581b1d2876->leave($__internal_7732b05169e22b3fd31a7b37c27cd42f89aa320c46e9158136c719581b1d2876_prof);

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
