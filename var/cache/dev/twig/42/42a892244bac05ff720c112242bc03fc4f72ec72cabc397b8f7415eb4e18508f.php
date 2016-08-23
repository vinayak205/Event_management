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
        $__internal_9c61d6a3b1c403ae6c710cf2dbc15e40cc621286060ca7f9bdff791a26c38123 = $this->env->getExtension("native_profiler");
        $__internal_9c61d6a3b1c403ae6c710cf2dbc15e40cc621286060ca7f9bdff791a26c38123->enter($__internal_9c61d6a3b1c403ae6c710cf2dbc15e40cc621286060ca7f9bdff791a26c38123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c61d6a3b1c403ae6c710cf2dbc15e40cc621286060ca7f9bdff791a26c38123->leave($__internal_9c61d6a3b1c403ae6c710cf2dbc15e40cc621286060ca7f9bdff791a26c38123_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84ccae0fd09d33ed51c38f9f2ef96294ff399d02b929f04e7482adcf06489bc8 = $this->env->getExtension("native_profiler");
        $__internal_84ccae0fd09d33ed51c38f9f2ef96294ff399d02b929f04e7482adcf06489bc8->enter($__internal_84ccae0fd09d33ed51c38f9f2ef96294ff399d02b929f04e7482adcf06489bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84ccae0fd09d33ed51c38f9f2ef96294ff399d02b929f04e7482adcf06489bc8->leave($__internal_84ccae0fd09d33ed51c38f9f2ef96294ff399d02b929f04e7482adcf06489bc8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23e2a67c87bce61b21e2262f065b295527fa83d01929462a582aae87e4b7d970 = $this->env->getExtension("native_profiler");
        $__internal_23e2a67c87bce61b21e2262f065b295527fa83d01929462a582aae87e4b7d970->enter($__internal_23e2a67c87bce61b21e2262f065b295527fa83d01929462a582aae87e4b7d970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_23e2a67c87bce61b21e2262f065b295527fa83d01929462a582aae87e4b7d970->leave($__internal_23e2a67c87bce61b21e2262f065b295527fa83d01929462a582aae87e4b7d970_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c456eb73c0514235356c5b509253d452af64864421d034eaf743ca3b6312dbc = $this->env->getExtension("native_profiler");
        $__internal_5c456eb73c0514235356c5b509253d452af64864421d034eaf743ca3b6312dbc->enter($__internal_5c456eb73c0514235356c5b509253d452af64864421d034eaf743ca3b6312dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5c456eb73c0514235356c5b509253d452af64864421d034eaf743ca3b6312dbc->leave($__internal_5c456eb73c0514235356c5b509253d452af64864421d034eaf743ca3b6312dbc_prof);

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
