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
        $__internal_0b3974bf81c28750c7cdcd6ab6ff256172f90a3fe821dfef9fb54b763bbe0b25 = $this->env->getExtension("native_profiler");
        $__internal_0b3974bf81c28750c7cdcd6ab6ff256172f90a3fe821dfef9fb54b763bbe0b25->enter($__internal_0b3974bf81c28750c7cdcd6ab6ff256172f90a3fe821dfef9fb54b763bbe0b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3974bf81c28750c7cdcd6ab6ff256172f90a3fe821dfef9fb54b763bbe0b25->leave($__internal_0b3974bf81c28750c7cdcd6ab6ff256172f90a3fe821dfef9fb54b763bbe0b25_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37f1b6e5f378d42879f29369da2acd5b07313adaa01f09c3dc62593a562b68b = $this->env->getExtension("native_profiler");
        $__internal_f37f1b6e5f378d42879f29369da2acd5b07313adaa01f09c3dc62593a562b68b->enter($__internal_f37f1b6e5f378d42879f29369da2acd5b07313adaa01f09c3dc62593a562b68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_f37f1b6e5f378d42879f29369da2acd5b07313adaa01f09c3dc62593a562b68b->leave($__internal_f37f1b6e5f378d42879f29369da2acd5b07313adaa01f09c3dc62593a562b68b_prof);

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
