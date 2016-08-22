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
        $__internal_c8cc52699ba96e866774bd4bc994145856feba818d6412fb5c7ceafad629cf5b = $this->env->getExtension("native_profiler");
        $__internal_c8cc52699ba96e866774bd4bc994145856feba818d6412fb5c7ceafad629cf5b->enter($__internal_c8cc52699ba96e866774bd4bc994145856feba818d6412fb5c7ceafad629cf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8cc52699ba96e866774bd4bc994145856feba818d6412fb5c7ceafad629cf5b->leave($__internal_c8cc52699ba96e866774bd4bc994145856feba818d6412fb5c7ceafad629cf5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_929497d39d0aa1e8f95a4bd78078cdf87967eb5977be49d6be5289affd695c51 = $this->env->getExtension("native_profiler");
        $__internal_929497d39d0aa1e8f95a4bd78078cdf87967eb5977be49d6be5289affd695c51->enter($__internal_929497d39d0aa1e8f95a4bd78078cdf87967eb5977be49d6be5289affd695c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_929497d39d0aa1e8f95a4bd78078cdf87967eb5977be49d6be5289affd695c51->leave($__internal_929497d39d0aa1e8f95a4bd78078cdf87967eb5977be49d6be5289affd695c51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33c58c8c5206f2a19476c314191ee378444370768e52b1525578d2e364885f30 = $this->env->getExtension("native_profiler");
        $__internal_33c58c8c5206f2a19476c314191ee378444370768e52b1525578d2e364885f30->enter($__internal_33c58c8c5206f2a19476c314191ee378444370768e52b1525578d2e364885f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33c58c8c5206f2a19476c314191ee378444370768e52b1525578d2e364885f30->leave($__internal_33c58c8c5206f2a19476c314191ee378444370768e52b1525578d2e364885f30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4e88309a688b0a64503407cb18b29f8bef36d5b97faa887654db7b5cc32cc2b = $this->env->getExtension("native_profiler");
        $__internal_f4e88309a688b0a64503407cb18b29f8bef36d5b97faa887654db7b5cc32cc2b->enter($__internal_f4e88309a688b0a64503407cb18b29f8bef36d5b97faa887654db7b5cc32cc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f4e88309a688b0a64503407cb18b29f8bef36d5b97faa887654db7b5cc32cc2b->leave($__internal_f4e88309a688b0a64503407cb18b29f8bef36d5b97faa887654db7b5cc32cc2b_prof);

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
