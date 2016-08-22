<?php

/* :default:test.html.twig */
class __TwigTemplate_266db6afcded26bb831084e84acd98bd5a318330831481eb0a61f19175f32feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", array()), "twig", array()), ":default:test.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d15ca152256c402cc24b3b8d289eaaa7a784b133f4df0ca30f196e9adcc337d = $this->env->getExtension("native_profiler");
        $__internal_0d15ca152256c402cc24b3b8d289eaaa7a784b133f4df0ca30f196e9adcc337d->enter($__internal_0d15ca152256c402cc24b3b8d289eaaa7a784b133f4df0ca30f196e9adcc337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d15ca152256c402cc24b3b8d289eaaa7a784b133f4df0ca30f196e9adcc337d->leave($__internal_0d15ca152256c402cc24b3b8d289eaaa7a784b133f4df0ca30f196e9adcc337d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ad27098cdf0a336c4180caf3e86189bbd7a94dc5c06d6a5e5c0dc3fd7607cc = $this->env->getExtension("native_profiler");
        $__internal_29ad27098cdf0a336c4180caf3e86189bbd7a94dc5c06d6a5e5c0dc3fd7607cc->enter($__internal_29ad27098cdf0a336c4180caf3e86189bbd7a94dc5c06d6a5e5c0dc3fd7607cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_29ad27098cdf0a336c4180caf3e86189bbd7a94dc5c06d6a5e5c0dc3fd7607cc->leave($__internal_29ad27098cdf0a336c4180caf3e86189bbd7a94dc5c06d6a5e5c0dc3fd7607cc_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  33 => 2,  18 => 1,);
    }
}
/* {% extends base.html.twig %}*/
/* {% block body %}*/
/* 	Test*/
/* {% endblock %}*/
