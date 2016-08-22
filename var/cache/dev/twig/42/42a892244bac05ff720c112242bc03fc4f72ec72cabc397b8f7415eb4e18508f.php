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
        $__internal_6dc8a5ced23c76a21ef195c71cbb60867765a425e207eefb141b4d36f7213b0a = $this->env->getExtension("native_profiler");
        $__internal_6dc8a5ced23c76a21ef195c71cbb60867765a425e207eefb141b4d36f7213b0a->enter($__internal_6dc8a5ced23c76a21ef195c71cbb60867765a425e207eefb141b4d36f7213b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc8a5ced23c76a21ef195c71cbb60867765a425e207eefb141b4d36f7213b0a->leave($__internal_6dc8a5ced23c76a21ef195c71cbb60867765a425e207eefb141b4d36f7213b0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36561b9cd8e3745cbc12e2becac6ca9a101d94b90896f9f4cc3ec3daf55424dd = $this->env->getExtension("native_profiler");
        $__internal_36561b9cd8e3745cbc12e2becac6ca9a101d94b90896f9f4cc3ec3daf55424dd->enter($__internal_36561b9cd8e3745cbc12e2becac6ca9a101d94b90896f9f4cc3ec3daf55424dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36561b9cd8e3745cbc12e2becac6ca9a101d94b90896f9f4cc3ec3daf55424dd->leave($__internal_36561b9cd8e3745cbc12e2becac6ca9a101d94b90896f9f4cc3ec3daf55424dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_112a1a000a0e393ad94bcb46203fc741bffd65f1368b0ec3a24f4812f94ac483 = $this->env->getExtension("native_profiler");
        $__internal_112a1a000a0e393ad94bcb46203fc741bffd65f1368b0ec3a24f4812f94ac483->enter($__internal_112a1a000a0e393ad94bcb46203fc741bffd65f1368b0ec3a24f4812f94ac483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_112a1a000a0e393ad94bcb46203fc741bffd65f1368b0ec3a24f4812f94ac483->leave($__internal_112a1a000a0e393ad94bcb46203fc741bffd65f1368b0ec3a24f4812f94ac483_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccd70cca53a9ae2f62dd068e002821d10538f805d44b431bba6ce858d644f28a = $this->env->getExtension("native_profiler");
        $__internal_ccd70cca53a9ae2f62dd068e002821d10538f805d44b431bba6ce858d644f28a->enter($__internal_ccd70cca53a9ae2f62dd068e002821d10538f805d44b431bba6ce858d644f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ccd70cca53a9ae2f62dd068e002821d10538f805d44b431bba6ce858d644f28a->leave($__internal_ccd70cca53a9ae2f62dd068e002821d10538f805d44b431bba6ce858d644f28a_prof);

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
