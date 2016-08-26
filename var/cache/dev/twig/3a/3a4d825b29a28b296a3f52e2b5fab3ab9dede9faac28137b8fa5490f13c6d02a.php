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
        $__internal_9d3956284cf98c9aac184f9d60f914d5ffe8ae4cc3b28b1c1558bcc2e9c21c9a = $this->env->getExtension("native_profiler");
        $__internal_9d3956284cf98c9aac184f9d60f914d5ffe8ae4cc3b28b1c1558bcc2e9c21c9a->enter($__internal_9d3956284cf98c9aac184f9d60f914d5ffe8ae4cc3b28b1c1558bcc2e9c21c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3956284cf98c9aac184f9d60f914d5ffe8ae4cc3b28b1c1558bcc2e9c21c9a->leave($__internal_9d3956284cf98c9aac184f9d60f914d5ffe8ae4cc3b28b1c1558bcc2e9c21c9a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f549f5feda98525f4ba0aeecd026233cc12c6e8a576ce4f3922bd51c0c2ef507 = $this->env->getExtension("native_profiler");
        $__internal_f549f5feda98525f4ba0aeecd026233cc12c6e8a576ce4f3922bd51c0c2ef507->enter($__internal_f549f5feda98525f4ba0aeecd026233cc12c6e8a576ce4f3922bd51c0c2ef507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_f549f5feda98525f4ba0aeecd026233cc12c6e8a576ce4f3922bd51c0c2ef507->leave($__internal_f549f5feda98525f4ba0aeecd026233cc12c6e8a576ce4f3922bd51c0c2ef507_prof);

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
