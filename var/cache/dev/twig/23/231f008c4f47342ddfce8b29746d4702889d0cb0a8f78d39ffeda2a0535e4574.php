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
        $__internal_b1d8994e29281a860cbe9754e45fd4f8283e0c2590b4911b6e520b29f9fc027f = $this->env->getExtension("native_profiler");
        $__internal_b1d8994e29281a860cbe9754e45fd4f8283e0c2590b4911b6e520b29f9fc027f->enter($__internal_b1d8994e29281a860cbe9754e45fd4f8283e0c2590b4911b6e520b29f9fc027f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b1d8994e29281a860cbe9754e45fd4f8283e0c2590b4911b6e520b29f9fc027f->leave($__internal_b1d8994e29281a860cbe9754e45fd4f8283e0c2590b4911b6e520b29f9fc027f_prof);

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
