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
        $__internal_efe5994d8b43ad34165778c4be4c31f5aa9236f93cdb7e3e5b1b70d870b14ac0 = $this->env->getExtension("native_profiler");
        $__internal_efe5994d8b43ad34165778c4be4c31f5aa9236f93cdb7e3e5b1b70d870b14ac0->enter($__internal_efe5994d8b43ad34165778c4be4c31f5aa9236f93cdb7e3e5b1b70d870b14ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_efe5994d8b43ad34165778c4be4c31f5aa9236f93cdb7e3e5b1b70d870b14ac0->leave($__internal_efe5994d8b43ad34165778c4be4c31f5aa9236f93cdb7e3e5b1b70d870b14ac0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_111da1faaa572f86b0163366ef7f7a499f21935f68174273309d8374a8467f95 = $this->env->getExtension("native_profiler");
        $__internal_111da1faaa572f86b0163366ef7f7a499f21935f68174273309d8374a8467f95->enter($__internal_111da1faaa572f86b0163366ef7f7a499f21935f68174273309d8374a8467f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_111da1faaa572f86b0163366ef7f7a499f21935f68174273309d8374a8467f95->leave($__internal_111da1faaa572f86b0163366ef7f7a499f21935f68174273309d8374a8467f95_prof);

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
