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
        $__internal_0c1684d00ef0869dcc3be68c042482377c286536d3c5223775c1654c968b1ffd = $this->env->getExtension("native_profiler");
        $__internal_0c1684d00ef0869dcc3be68c042482377c286536d3c5223775c1654c968b1ffd->enter($__internal_0c1684d00ef0869dcc3be68c042482377c286536d3c5223775c1654c968b1ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c1684d00ef0869dcc3be68c042482377c286536d3c5223775c1654c968b1ffd->leave($__internal_0c1684d00ef0869dcc3be68c042482377c286536d3c5223775c1654c968b1ffd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3b2e7da245e0ba62fed0f65f573d80d8d034cca6c26313def4ef4dd12aee0d4 = $this->env->getExtension("native_profiler");
        $__internal_c3b2e7da245e0ba62fed0f65f573d80d8d034cca6c26313def4ef4dd12aee0d4->enter($__internal_c3b2e7da245e0ba62fed0f65f573d80d8d034cca6c26313def4ef4dd12aee0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c3b2e7da245e0ba62fed0f65f573d80d8d034cca6c26313def4ef4dd12aee0d4->leave($__internal_c3b2e7da245e0ba62fed0f65f573d80d8d034cca6c26313def4ef4dd12aee0d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e46bbc17368443b39019f2f792a5e568e8ce563ce969aa53436862df0a77fe32 = $this->env->getExtension("native_profiler");
        $__internal_e46bbc17368443b39019f2f792a5e568e8ce563ce969aa53436862df0a77fe32->enter($__internal_e46bbc17368443b39019f2f792a5e568e8ce563ce969aa53436862df0a77fe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e46bbc17368443b39019f2f792a5e568e8ce563ce969aa53436862df0a77fe32->leave($__internal_e46bbc17368443b39019f2f792a5e568e8ce563ce969aa53436862df0a77fe32_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c597146f689d76103d3d91cae0a0f6c287d8523c4d5dac3f1b07759b5b8e2115 = $this->env->getExtension("native_profiler");
        $__internal_c597146f689d76103d3d91cae0a0f6c287d8523c4d5dac3f1b07759b5b8e2115->enter($__internal_c597146f689d76103d3d91cae0a0f6c287d8523c4d5dac3f1b07759b5b8e2115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c597146f689d76103d3d91cae0a0f6c287d8523c4d5dac3f1b07759b5b8e2115->leave($__internal_c597146f689d76103d3d91cae0a0f6c287d8523c4d5dac3f1b07759b5b8e2115_prof);

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
