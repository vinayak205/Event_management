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
        $__internal_82279a1129dc15473910c5bf9598c5c649078236fc8839b4d275b49eaca2d773 = $this->env->getExtension("native_profiler");
        $__internal_82279a1129dc15473910c5bf9598c5c649078236fc8839b4d275b49eaca2d773->enter($__internal_82279a1129dc15473910c5bf9598c5c649078236fc8839b4d275b49eaca2d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82279a1129dc15473910c5bf9598c5c649078236fc8839b4d275b49eaca2d773->leave($__internal_82279a1129dc15473910c5bf9598c5c649078236fc8839b4d275b49eaca2d773_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5147efb82806a17ccff98fbcd58825d1a82cc613b9e7c149782eab27e054e31d = $this->env->getExtension("native_profiler");
        $__internal_5147efb82806a17ccff98fbcd58825d1a82cc613b9e7c149782eab27e054e31d->enter($__internal_5147efb82806a17ccff98fbcd58825d1a82cc613b9e7c149782eab27e054e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5147efb82806a17ccff98fbcd58825d1a82cc613b9e7c149782eab27e054e31d->leave($__internal_5147efb82806a17ccff98fbcd58825d1a82cc613b9e7c149782eab27e054e31d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f537ee5d9c83be0f77d2a6292e43b8b9977c516071a700f79b217f657e13499 = $this->env->getExtension("native_profiler");
        $__internal_6f537ee5d9c83be0f77d2a6292e43b8b9977c516071a700f79b217f657e13499->enter($__internal_6f537ee5d9c83be0f77d2a6292e43b8b9977c516071a700f79b217f657e13499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f537ee5d9c83be0f77d2a6292e43b8b9977c516071a700f79b217f657e13499->leave($__internal_6f537ee5d9c83be0f77d2a6292e43b8b9977c516071a700f79b217f657e13499_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3658540299b57bb3264d8b5f352298d939a905fcccf1cea405de9c281e081df7 = $this->env->getExtension("native_profiler");
        $__internal_3658540299b57bb3264d8b5f352298d939a905fcccf1cea405de9c281e081df7->enter($__internal_3658540299b57bb3264d8b5f352298d939a905fcccf1cea405de9c281e081df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3658540299b57bb3264d8b5f352298d939a905fcccf1cea405de9c281e081df7->leave($__internal_3658540299b57bb3264d8b5f352298d939a905fcccf1cea405de9c281e081df7_prof);

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
