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
        $__internal_6af1c0b5f0608ddea5d9ed406c9954b632bfffc7227ba5d9cada2460ea715e9f = $this->env->getExtension("native_profiler");
        $__internal_6af1c0b5f0608ddea5d9ed406c9954b632bfffc7227ba5d9cada2460ea715e9f->enter($__internal_6af1c0b5f0608ddea5d9ed406c9954b632bfffc7227ba5d9cada2460ea715e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6af1c0b5f0608ddea5d9ed406c9954b632bfffc7227ba5d9cada2460ea715e9f->leave($__internal_6af1c0b5f0608ddea5d9ed406c9954b632bfffc7227ba5d9cada2460ea715e9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_467b029503472ba94ac878e92b53477461276418dd0fc8c99f3cc08f756c4e41 = $this->env->getExtension("native_profiler");
        $__internal_467b029503472ba94ac878e92b53477461276418dd0fc8c99f3cc08f756c4e41->enter($__internal_467b029503472ba94ac878e92b53477461276418dd0fc8c99f3cc08f756c4e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_467b029503472ba94ac878e92b53477461276418dd0fc8c99f3cc08f756c4e41->leave($__internal_467b029503472ba94ac878e92b53477461276418dd0fc8c99f3cc08f756c4e41_prof);

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
