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
        $__internal_b0ab12d6559bde759f07503d9c69d107fde3ab5c942700201e0101fdc7be6e26 = $this->env->getExtension("native_profiler");
        $__internal_b0ab12d6559bde759f07503d9c69d107fde3ab5c942700201e0101fdc7be6e26->enter($__internal_b0ab12d6559bde759f07503d9c69d107fde3ab5c942700201e0101fdc7be6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ab12d6559bde759f07503d9c69d107fde3ab5c942700201e0101fdc7be6e26->leave($__internal_b0ab12d6559bde759f07503d9c69d107fde3ab5c942700201e0101fdc7be6e26_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb1e46c6e7cbed13a766cb03dd98f67a8b24d2274b24c6363287b2a48394684f = $this->env->getExtension("native_profiler");
        $__internal_bb1e46c6e7cbed13a766cb03dd98f67a8b24d2274b24c6363287b2a48394684f->enter($__internal_bb1e46c6e7cbed13a766cb03dd98f67a8b24d2274b24c6363287b2a48394684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_bb1e46c6e7cbed13a766cb03dd98f67a8b24d2274b24c6363287b2a48394684f->leave($__internal_bb1e46c6e7cbed13a766cb03dd98f67a8b24d2274b24c6363287b2a48394684f_prof);

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
