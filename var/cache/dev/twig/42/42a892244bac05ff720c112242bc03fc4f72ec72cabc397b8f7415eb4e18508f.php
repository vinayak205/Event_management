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
        $__internal_8dde3e2c8444b1ecdd6c0e6caef7f73be289e97849abd043eef0fa0a151421bd = $this->env->getExtension("native_profiler");
        $__internal_8dde3e2c8444b1ecdd6c0e6caef7f73be289e97849abd043eef0fa0a151421bd->enter($__internal_8dde3e2c8444b1ecdd6c0e6caef7f73be289e97849abd043eef0fa0a151421bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dde3e2c8444b1ecdd6c0e6caef7f73be289e97849abd043eef0fa0a151421bd->leave($__internal_8dde3e2c8444b1ecdd6c0e6caef7f73be289e97849abd043eef0fa0a151421bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24f3b4d7bafc8b7dc160def7f3ce5c2f0bcb8a12fa40b24c4849d5279d0a36d4 = $this->env->getExtension("native_profiler");
        $__internal_24f3b4d7bafc8b7dc160def7f3ce5c2f0bcb8a12fa40b24c4849d5279d0a36d4->enter($__internal_24f3b4d7bafc8b7dc160def7f3ce5c2f0bcb8a12fa40b24c4849d5279d0a36d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24f3b4d7bafc8b7dc160def7f3ce5c2f0bcb8a12fa40b24c4849d5279d0a36d4->leave($__internal_24f3b4d7bafc8b7dc160def7f3ce5c2f0bcb8a12fa40b24c4849d5279d0a36d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71421cc80aadf23ebefc233ed5d94aee608a56a3ee57cafc13ee0c2d29c18796 = $this->env->getExtension("native_profiler");
        $__internal_71421cc80aadf23ebefc233ed5d94aee608a56a3ee57cafc13ee0c2d29c18796->enter($__internal_71421cc80aadf23ebefc233ed5d94aee608a56a3ee57cafc13ee0c2d29c18796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71421cc80aadf23ebefc233ed5d94aee608a56a3ee57cafc13ee0c2d29c18796->leave($__internal_71421cc80aadf23ebefc233ed5d94aee608a56a3ee57cafc13ee0c2d29c18796_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d4af1eac2ff0ed81169545e785528e95c3dbd5a5bd7da5276441fa5c86e7094 = $this->env->getExtension("native_profiler");
        $__internal_3d4af1eac2ff0ed81169545e785528e95c3dbd5a5bd7da5276441fa5c86e7094->enter($__internal_3d4af1eac2ff0ed81169545e785528e95c3dbd5a5bd7da5276441fa5c86e7094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d4af1eac2ff0ed81169545e785528e95c3dbd5a5bd7da5276441fa5c86e7094->leave($__internal_3d4af1eac2ff0ed81169545e785528e95c3dbd5a5bd7da5276441fa5c86e7094_prof);

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
