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
        $__internal_cbbe4712ac57f42a449aac4e4d417c55d35f050b87f7f6dd526efacd822e0093 = $this->env->getExtension("native_profiler");
        $__internal_cbbe4712ac57f42a449aac4e4d417c55d35f050b87f7f6dd526efacd822e0093->enter($__internal_cbbe4712ac57f42a449aac4e4d417c55d35f050b87f7f6dd526efacd822e0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cbbe4712ac57f42a449aac4e4d417c55d35f050b87f7f6dd526efacd822e0093->leave($__internal_cbbe4712ac57f42a449aac4e4d417c55d35f050b87f7f6dd526efacd822e0093_prof);

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
