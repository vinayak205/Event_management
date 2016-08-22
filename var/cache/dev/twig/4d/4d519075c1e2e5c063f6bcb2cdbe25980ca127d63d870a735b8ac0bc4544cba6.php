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
        $__internal_20b3a60150f63f7ba371e555df5f9792d81305351305d322516da7c6d106ce0e = $this->env->getExtension("native_profiler");
        $__internal_20b3a60150f63f7ba371e555df5f9792d81305351305d322516da7c6d106ce0e->enter($__internal_20b3a60150f63f7ba371e555df5f9792d81305351305d322516da7c6d106ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20b3a60150f63f7ba371e555df5f9792d81305351305d322516da7c6d106ce0e->leave($__internal_20b3a60150f63f7ba371e555df5f9792d81305351305d322516da7c6d106ce0e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b5f0d51288f19f4199bbb5e8c08bb2fee7fdd053b0b78c2f4a6c2ef2588008a = $this->env->getExtension("native_profiler");
        $__internal_4b5f0d51288f19f4199bbb5e8c08bb2fee7fdd053b0b78c2f4a6c2ef2588008a->enter($__internal_4b5f0d51288f19f4199bbb5e8c08bb2fee7fdd053b0b78c2f4a6c2ef2588008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b5f0d51288f19f4199bbb5e8c08bb2fee7fdd053b0b78c2f4a6c2ef2588008a->leave($__internal_4b5f0d51288f19f4199bbb5e8c08bb2fee7fdd053b0b78c2f4a6c2ef2588008a_prof);

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
