<?php

/* :default:index.html.twig */
class __TwigTemplate_814c3912c19c1c91b935c98225fe2f3b760b80cfac9aef0d0a137cf1b88e56b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368bd68a259c18d0bc672c0a976b2eb50eb9011322ec4afff184a2d91f0de19a = $this->env->getExtension("native_profiler");
        $__internal_368bd68a259c18d0bc672c0a976b2eb50eb9011322ec4afff184a2d91f0de19a->enter($__internal_368bd68a259c18d0bc672c0a976b2eb50eb9011322ec4afff184a2d91f0de19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368bd68a259c18d0bc672c0a976b2eb50eb9011322ec4afff184a2d91f0de19a->leave($__internal_368bd68a259c18d0bc672c0a976b2eb50eb9011322ec4afff184a2d91f0de19a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db6b5a6229c4bc05f7bccafb0997f26013d96fa8a7fda2d23fe57ee470eb14f0 = $this->env->getExtension("native_profiler");
        $__internal_db6b5a6229c4bc05f7bccafb0997f26013d96fa8a7fda2d23fe57ee470eb14f0->enter($__internal_db6b5a6229c4bc05f7bccafb0997f26013d96fa8a7fda2d23fe57ee470eb14f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_db6b5a6229c4bc05f7bccafb0997f26013d96fa8a7fda2d23fe57ee470eb14f0->leave($__internal_db6b5a6229c4bc05f7bccafb0997f26013d96fa8a7fda2d23fe57ee470eb14f0_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Hello*/
/* {% endblock %}*/
/* */
