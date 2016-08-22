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
        $__internal_6b3059d5d11d266b9cc2c20d8c0e1d8f3ff418ccbc472f4d7cd70400357e4cd2 = $this->env->getExtension("native_profiler");
        $__internal_6b3059d5d11d266b9cc2c20d8c0e1d8f3ff418ccbc472f4d7cd70400357e4cd2->enter($__internal_6b3059d5d11d266b9cc2c20d8c0e1d8f3ff418ccbc472f4d7cd70400357e4cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3059d5d11d266b9cc2c20d8c0e1d8f3ff418ccbc472f4d7cd70400357e4cd2->leave($__internal_6b3059d5d11d266b9cc2c20d8c0e1d8f3ff418ccbc472f4d7cd70400357e4cd2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df187745ba7cfbf8e0a6b3770bac4f66b15ae80d0933a586e5af8fd6c422db6b = $this->env->getExtension("native_profiler");
        $__internal_df187745ba7cfbf8e0a6b3770bac4f66b15ae80d0933a586e5af8fd6c422db6b->enter($__internal_df187745ba7cfbf8e0a6b3770bac4f66b15ae80d0933a586e5af8fd6c422db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df187745ba7cfbf8e0a6b3770bac4f66b15ae80d0933a586e5af8fd6c422db6b->leave($__internal_df187745ba7cfbf8e0a6b3770bac4f66b15ae80d0933a586e5af8fd6c422db6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27e37c8a673b4c798f2f60d85e57b89565e776a1eac6ffa951901687027d1868 = $this->env->getExtension("native_profiler");
        $__internal_27e37c8a673b4c798f2f60d85e57b89565e776a1eac6ffa951901687027d1868->enter($__internal_27e37c8a673b4c798f2f60d85e57b89565e776a1eac6ffa951901687027d1868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_27e37c8a673b4c798f2f60d85e57b89565e776a1eac6ffa951901687027d1868->leave($__internal_27e37c8a673b4c798f2f60d85e57b89565e776a1eac6ffa951901687027d1868_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a05dc25680fe4ba887193fc8aacfb096f999c95fefa4a555a851fe9b51ad534a = $this->env->getExtension("native_profiler");
        $__internal_a05dc25680fe4ba887193fc8aacfb096f999c95fefa4a555a851fe9b51ad534a->enter($__internal_a05dc25680fe4ba887193fc8aacfb096f999c95fefa4a555a851fe9b51ad534a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a05dc25680fe4ba887193fc8aacfb096f999c95fefa4a555a851fe9b51ad534a->leave($__internal_a05dc25680fe4ba887193fc8aacfb096f999c95fefa4a555a851fe9b51ad534a_prof);

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
