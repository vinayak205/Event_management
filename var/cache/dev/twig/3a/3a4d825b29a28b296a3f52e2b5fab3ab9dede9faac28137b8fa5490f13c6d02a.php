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
        $__internal_99df8bb168765377c42847771aa9654fd06a4853ecb43194bd4acbfa84ed496a = $this->env->getExtension("native_profiler");
        $__internal_99df8bb168765377c42847771aa9654fd06a4853ecb43194bd4acbfa84ed496a->enter($__internal_99df8bb168765377c42847771aa9654fd06a4853ecb43194bd4acbfa84ed496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99df8bb168765377c42847771aa9654fd06a4853ecb43194bd4acbfa84ed496a->leave($__internal_99df8bb168765377c42847771aa9654fd06a4853ecb43194bd4acbfa84ed496a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a22af68858db03215b43730a2dfab03e75303609f1fdeaec6f4a1bdc11e53e = $this->env->getExtension("native_profiler");
        $__internal_69a22af68858db03215b43730a2dfab03e75303609f1fdeaec6f4a1bdc11e53e->enter($__internal_69a22af68858db03215b43730a2dfab03e75303609f1fdeaec6f4a1bdc11e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_69a22af68858db03215b43730a2dfab03e75303609f1fdeaec6f4a1bdc11e53e->leave($__internal_69a22af68858db03215b43730a2dfab03e75303609f1fdeaec6f4a1bdc11e53e_prof);

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
