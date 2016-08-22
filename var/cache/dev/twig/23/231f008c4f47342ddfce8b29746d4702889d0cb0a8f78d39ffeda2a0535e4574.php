<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_df6ca7b45738664a71e72ddfab75b65abb18ac0a3ee1dcd34e06bc304e0f2df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12c022dad1f2a21ff88dfd6878eb16af74ef4147a2702b5f684eff3e4044fdfd = $this->env->getExtension("native_profiler");
        $__internal_12c022dad1f2a21ff88dfd6878eb16af74ef4147a2702b5f684eff3e4044fdfd->enter($__internal_12c022dad1f2a21ff88dfd6878eb16af74ef4147a2702b5f684eff3e4044fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_12c022dad1f2a21ff88dfd6878eb16af74ef4147a2702b5f684eff3e4044fdfd->leave($__internal_12c022dad1f2a21ff88dfd6878eb16af74ef4147a2702b5f684eff3e4044fdfd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
