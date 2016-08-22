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
        $__internal_7cacdab1bdb1ac1bfbd35da664b640bec967b8ccb6ba76118d5103cbe8a3b632 = $this->env->getExtension("native_profiler");
        $__internal_7cacdab1bdb1ac1bfbd35da664b640bec967b8ccb6ba76118d5103cbe8a3b632->enter($__internal_7cacdab1bdb1ac1bfbd35da664b640bec967b8ccb6ba76118d5103cbe8a3b632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7cacdab1bdb1ac1bfbd35da664b640bec967b8ccb6ba76118d5103cbe8a3b632->leave($__internal_7cacdab1bdb1ac1bfbd35da664b640bec967b8ccb6ba76118d5103cbe8a3b632_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2ccd2850231970dad814894778818943d76eeae0b8804df046be392035990d1 = $this->env->getExtension("native_profiler");
        $__internal_f2ccd2850231970dad814894778818943d76eeae0b8804df046be392035990d1->enter($__internal_f2ccd2850231970dad814894778818943d76eeae0b8804df046be392035990d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f2ccd2850231970dad814894778818943d76eeae0b8804df046be392035990d1->leave($__internal_f2ccd2850231970dad814894778818943d76eeae0b8804df046be392035990d1_prof);

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
