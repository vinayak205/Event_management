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
        $__internal_92bba0ce5ed4f75c54ee394b34667ab6dca4ade2199248955864b534eaaa24eb = $this->env->getExtension("native_profiler");
        $__internal_92bba0ce5ed4f75c54ee394b34667ab6dca4ade2199248955864b534eaaa24eb->enter($__internal_92bba0ce5ed4f75c54ee394b34667ab6dca4ade2199248955864b534eaaa24eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_92bba0ce5ed4f75c54ee394b34667ab6dca4ade2199248955864b534eaaa24eb->leave($__internal_92bba0ce5ed4f75c54ee394b34667ab6dca4ade2199248955864b534eaaa24eb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_03e0d146f21afec32fdb678f2b04e4ccf9c3639f29d9750d75116a543c8de2f4 = $this->env->getExtension("native_profiler");
        $__internal_03e0d146f21afec32fdb678f2b04e4ccf9c3639f29d9750d75116a543c8de2f4->enter($__internal_03e0d146f21afec32fdb678f2b04e4ccf9c3639f29d9750d75116a543c8de2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03e0d146f21afec32fdb678f2b04e4ccf9c3639f29d9750d75116a543c8de2f4->leave($__internal_03e0d146f21afec32fdb678f2b04e4ccf9c3639f29d9750d75116a543c8de2f4_prof);

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
