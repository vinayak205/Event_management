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
        $__internal_2f27891837af59783ecf2d93fd4fd67d951329893b022ba51577535f71ba0585 = $this->env->getExtension("native_profiler");
        $__internal_2f27891837af59783ecf2d93fd4fd67d951329893b022ba51577535f71ba0585->enter($__internal_2f27891837af59783ecf2d93fd4fd67d951329893b022ba51577535f71ba0585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2f27891837af59783ecf2d93fd4fd67d951329893b022ba51577535f71ba0585->leave($__internal_2f27891837af59783ecf2d93fd4fd67d951329893b022ba51577535f71ba0585_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_142d9e2bd4396f3023dbe3855a4eb05a543805bd811c813e3d9fd863685f58bc = $this->env->getExtension("native_profiler");
        $__internal_142d9e2bd4396f3023dbe3855a4eb05a543805bd811c813e3d9fd863685f58bc->enter($__internal_142d9e2bd4396f3023dbe3855a4eb05a543805bd811c813e3d9fd863685f58bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_142d9e2bd4396f3023dbe3855a4eb05a543805bd811c813e3d9fd863685f58bc->leave($__internal_142d9e2bd4396f3023dbe3855a4eb05a543805bd811c813e3d9fd863685f58bc_prof);

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
