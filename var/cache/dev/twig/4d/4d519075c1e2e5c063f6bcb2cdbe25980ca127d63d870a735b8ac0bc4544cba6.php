<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3fadbe21427b51200c979d9b7c6388224ff04ee7c22e060108ad33989207bc57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_289a97c0f27eeee5df46bffc3b005bf82f58d6195552c64c3e6e6a7fc2c720ac = $this->env->getExtension("native_profiler");
        $__internal_289a97c0f27eeee5df46bffc3b005bf82f58d6195552c64c3e6e6a7fc2c720ac->enter($__internal_289a97c0f27eeee5df46bffc3b005bf82f58d6195552c64c3e6e6a7fc2c720ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_289a97c0f27eeee5df46bffc3b005bf82f58d6195552c64c3e6e6a7fc2c720ac->leave($__internal_289a97c0f27eeee5df46bffc3b005bf82f58d6195552c64c3e6e6a7fc2c720ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6399db4241303047752a9f8539319e5717a7044e8e6124dc4602bf3997fc8c2f = $this->env->getExtension("native_profiler");
        $__internal_6399db4241303047752a9f8539319e5717a7044e8e6124dc4602bf3997fc8c2f->enter($__internal_6399db4241303047752a9f8539319e5717a7044e8e6124dc4602bf3997fc8c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6399db4241303047752a9f8539319e5717a7044e8e6124dc4602bf3997fc8c2f->leave($__internal_6399db4241303047752a9f8539319e5717a7044e8e6124dc4602bf3997fc8c2f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
