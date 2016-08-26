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
        $__internal_ddc9f0dd6f2f49055c665351a3ef40cda1d5be718fcf77151f834015ed955009 = $this->env->getExtension("native_profiler");
        $__internal_ddc9f0dd6f2f49055c665351a3ef40cda1d5be718fcf77151f834015ed955009->enter($__internal_ddc9f0dd6f2f49055c665351a3ef40cda1d5be718fcf77151f834015ed955009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc9f0dd6f2f49055c665351a3ef40cda1d5be718fcf77151f834015ed955009->leave($__internal_ddc9f0dd6f2f49055c665351a3ef40cda1d5be718fcf77151f834015ed955009_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4ba7475ecf5bc94acaa66ff22d4c1865006666ae4750d94b1fb0d4455b916f1 = $this->env->getExtension("native_profiler");
        $__internal_d4ba7475ecf5bc94acaa66ff22d4c1865006666ae4750d94b1fb0d4455b916f1->enter($__internal_d4ba7475ecf5bc94acaa66ff22d4c1865006666ae4750d94b1fb0d4455b916f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d4ba7475ecf5bc94acaa66ff22d4c1865006666ae4750d94b1fb0d4455b916f1->leave($__internal_d4ba7475ecf5bc94acaa66ff22d4c1865006666ae4750d94b1fb0d4455b916f1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_36677cfcd6b8b0dad3b07173b07f992074e08598091981ea682d478934624bce = $this->env->getExtension("native_profiler");
        $__internal_36677cfcd6b8b0dad3b07173b07f992074e08598091981ea682d478934624bce->enter($__internal_36677cfcd6b8b0dad3b07173b07f992074e08598091981ea682d478934624bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_36677cfcd6b8b0dad3b07173b07f992074e08598091981ea682d478934624bce->leave($__internal_36677cfcd6b8b0dad3b07173b07f992074e08598091981ea682d478934624bce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f531774ea2ec624d802b730212f52f8511ad2c51f0bc5247b1c3646f00a974ae = $this->env->getExtension("native_profiler");
        $__internal_f531774ea2ec624d802b730212f52f8511ad2c51f0bc5247b1c3646f00a974ae->enter($__internal_f531774ea2ec624d802b730212f52f8511ad2c51f0bc5247b1c3646f00a974ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f531774ea2ec624d802b730212f52f8511ad2c51f0bc5247b1c3646f00a974ae->leave($__internal_f531774ea2ec624d802b730212f52f8511ad2c51f0bc5247b1c3646f00a974ae_prof);

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
