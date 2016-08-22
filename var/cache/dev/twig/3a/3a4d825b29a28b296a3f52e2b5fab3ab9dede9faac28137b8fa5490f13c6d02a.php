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
        $__internal_5ec327ed18d6504f18012502898674674127753ec353293c1846c2cf2223d097 = $this->env->getExtension("native_profiler");
        $__internal_5ec327ed18d6504f18012502898674674127753ec353293c1846c2cf2223d097->enter($__internal_5ec327ed18d6504f18012502898674674127753ec353293c1846c2cf2223d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec327ed18d6504f18012502898674674127753ec353293c1846c2cf2223d097->leave($__internal_5ec327ed18d6504f18012502898674674127753ec353293c1846c2cf2223d097_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_006087190ba4238334edd477390244186528dd589559495e27cceb3993766c83 = $this->env->getExtension("native_profiler");
        $__internal_006087190ba4238334edd477390244186528dd589559495e27cceb3993766c83->enter($__internal_006087190ba4238334edd477390244186528dd589559495e27cceb3993766c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_006087190ba4238334edd477390244186528dd589559495e27cceb3993766c83->leave($__internal_006087190ba4238334edd477390244186528dd589559495e27cceb3993766c83_prof);

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
