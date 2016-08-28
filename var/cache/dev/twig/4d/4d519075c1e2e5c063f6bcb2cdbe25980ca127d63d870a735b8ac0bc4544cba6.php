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
        $__internal_58d1c8ccdc10a7d5fe7162e7af7f75b512d820c643b16a9cc38f7c960bff32cf = $this->env->getExtension("native_profiler");
        $__internal_58d1c8ccdc10a7d5fe7162e7af7f75b512d820c643b16a9cc38f7c960bff32cf->enter($__internal_58d1c8ccdc10a7d5fe7162e7af7f75b512d820c643b16a9cc38f7c960bff32cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_58d1c8ccdc10a7d5fe7162e7af7f75b512d820c643b16a9cc38f7c960bff32cf->leave($__internal_58d1c8ccdc10a7d5fe7162e7af7f75b512d820c643b16a9cc38f7c960bff32cf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_800826908b46ca51295a141319b2027d8ee6afce3b3f3c9a3e8412d1872008e2 = $this->env->getExtension("native_profiler");
        $__internal_800826908b46ca51295a141319b2027d8ee6afce3b3f3c9a3e8412d1872008e2->enter($__internal_800826908b46ca51295a141319b2027d8ee6afce3b3f3c9a3e8412d1872008e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_800826908b46ca51295a141319b2027d8ee6afce3b3f3c9a3e8412d1872008e2->leave($__internal_800826908b46ca51295a141319b2027d8ee6afce3b3f3c9a3e8412d1872008e2_prof);

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
