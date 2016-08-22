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
        $__internal_e7ecb1714e6b8e9a7a5b81ceb3d6ebac7cf59aa0ebac6e40e54c6724078a8b44 = $this->env->getExtension("native_profiler");
        $__internal_e7ecb1714e6b8e9a7a5b81ceb3d6ebac7cf59aa0ebac6e40e54c6724078a8b44->enter($__internal_e7ecb1714e6b8e9a7a5b81ceb3d6ebac7cf59aa0ebac6e40e54c6724078a8b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ecb1714e6b8e9a7a5b81ceb3d6ebac7cf59aa0ebac6e40e54c6724078a8b44->leave($__internal_e7ecb1714e6b8e9a7a5b81ceb3d6ebac7cf59aa0ebac6e40e54c6724078a8b44_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_681f2d4c3ba7ada5db691a0170cd632db0609573d9a73dcc38c627648b695054 = $this->env->getExtension("native_profiler");
        $__internal_681f2d4c3ba7ada5db691a0170cd632db0609573d9a73dcc38c627648b695054->enter($__internal_681f2d4c3ba7ada5db691a0170cd632db0609573d9a73dcc38c627648b695054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_681f2d4c3ba7ada5db691a0170cd632db0609573d9a73dcc38c627648b695054->leave($__internal_681f2d4c3ba7ada5db691a0170cd632db0609573d9a73dcc38c627648b695054_prof);

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
