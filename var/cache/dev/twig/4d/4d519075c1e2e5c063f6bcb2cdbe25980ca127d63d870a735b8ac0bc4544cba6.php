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
        $__internal_ef06855c05fcb8a68a240acca9280bfe07f76ced956f571997d5d280a6b4d4ec = $this->env->getExtension("native_profiler");
        $__internal_ef06855c05fcb8a68a240acca9280bfe07f76ced956f571997d5d280a6b4d4ec->enter($__internal_ef06855c05fcb8a68a240acca9280bfe07f76ced956f571997d5d280a6b4d4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef06855c05fcb8a68a240acca9280bfe07f76ced956f571997d5d280a6b4d4ec->leave($__internal_ef06855c05fcb8a68a240acca9280bfe07f76ced956f571997d5d280a6b4d4ec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df0bc89550eeaad3e76578719c77b4bb91c6a3ac9ce261d1ab7d6a576afbc531 = $this->env->getExtension("native_profiler");
        $__internal_df0bc89550eeaad3e76578719c77b4bb91c6a3ac9ce261d1ab7d6a576afbc531->enter($__internal_df0bc89550eeaad3e76578719c77b4bb91c6a3ac9ce261d1ab7d6a576afbc531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df0bc89550eeaad3e76578719c77b4bb91c6a3ac9ce261d1ab7d6a576afbc531->leave($__internal_df0bc89550eeaad3e76578719c77b4bb91c6a3ac9ce261d1ab7d6a576afbc531_prof);

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
