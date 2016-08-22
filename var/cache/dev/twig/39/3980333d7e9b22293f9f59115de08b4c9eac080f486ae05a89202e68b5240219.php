<?php

/* :default:index.html.twig */
class __TwigTemplate_814c3912c19c1c91b935c98225fe2f3b760b80cfac9aef0d0a137cf1b88e56b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c11715175ed4a97ad856b6e4e6921c3726b3c97cb22980c2a3cacecb233cefb1 = $this->env->getExtension("native_profiler");
        $__internal_c11715175ed4a97ad856b6e4e6921c3726b3c97cb22980c2a3cacecb233cefb1->enter($__internal_c11715175ed4a97ad856b6e4e6921c3726b3c97cb22980c2a3cacecb233cefb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11715175ed4a97ad856b6e4e6921c3726b3c97cb22980c2a3cacecb233cefb1->leave($__internal_c11715175ed4a97ad856b6e4e6921c3726b3c97cb22980c2a3cacecb233cefb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c2c9480ae9b97451fe9e6b23053cce456065d421b3bc7823e7a8013ada964ec = $this->env->getExtension("native_profiler");
        $__internal_9c2c9480ae9b97451fe9e6b23053cce456065d421b3bc7823e7a8013ada964ec->enter($__internal_9c2c9480ae9b97451fe9e6b23053cce456065d421b3bc7823e7a8013ada964ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_9c2c9480ae9b97451fe9e6b23053cce456065d421b3bc7823e7a8013ada964ec->leave($__internal_9c2c9480ae9b97451fe9e6b23053cce456065d421b3bc7823e7a8013ada964ec_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hello*/
/* {% endblock %}*/
/* */
