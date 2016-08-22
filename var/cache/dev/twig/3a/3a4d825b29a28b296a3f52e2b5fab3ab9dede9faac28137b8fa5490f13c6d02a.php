<?php

/* :default:test.html.twig */
class __TwigTemplate_266db6afcded26bb831084e84acd98bd5a318330831481eb0a61f19175f32feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["base"]) ? $context["base"] : $this->getContext($context, "base")), "html", array()), "twig", array()), ":default:test.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34a5ec304586e9ad3c700f4f4cf7dfd19f51657488ed3f7459f84ef328df9d29 = $this->env->getExtension("native_profiler");
        $__internal_34a5ec304586e9ad3c700f4f4cf7dfd19f51657488ed3f7459f84ef328df9d29->enter($__internal_34a5ec304586e9ad3c700f4f4cf7dfd19f51657488ed3f7459f84ef328df9d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a5ec304586e9ad3c700f4f4cf7dfd19f51657488ed3f7459f84ef328df9d29->leave($__internal_34a5ec304586e9ad3c700f4f4cf7dfd19f51657488ed3f7459f84ef328df9d29_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_866b246eac371cf613cd3037aa17158a4aedcac85f808e19512179ea0931c2b2 = $this->env->getExtension("native_profiler");
        $__internal_866b246eac371cf613cd3037aa17158a4aedcac85f808e19512179ea0931c2b2->enter($__internal_866b246eac371cf613cd3037aa17158a4aedcac85f808e19512179ea0931c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tTest
";
        
        $__internal_866b246eac371cf613cd3037aa17158a4aedcac85f808e19512179ea0931c2b2->leave($__internal_866b246eac371cf613cd3037aa17158a4aedcac85f808e19512179ea0931c2b2_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  33 => 2,  18 => 1,);
    }
}
/* {% extends base.html.twig %}*/
/* {% block body %}*/
/* 	Test*/
/* {% endblock %}*/
