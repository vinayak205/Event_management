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
        $__internal_2b9b638a26a7f512172a1e8e1f5deacfc03f084d1fced76c8a17526c222536f4 = $this->env->getExtension("native_profiler");
        $__internal_2b9b638a26a7f512172a1e8e1f5deacfc03f084d1fced76c8a17526c222536f4->enter($__internal_2b9b638a26a7f512172a1e8e1f5deacfc03f084d1fced76c8a17526c222536f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9b638a26a7f512172a1e8e1f5deacfc03f084d1fced76c8a17526c222536f4->leave($__internal_2b9b638a26a7f512172a1e8e1f5deacfc03f084d1fced76c8a17526c222536f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e6c4398afdd5d007291f8fbb24a71b4f80d075b5093812521d28748da66fd3 = $this->env->getExtension("native_profiler");
        $__internal_14e6c4398afdd5d007291f8fbb24a71b4f80d075b5093812521d28748da66fd3->enter($__internal_14e6c4398afdd5d007291f8fbb24a71b4f80d075b5093812521d28748da66fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Hello
";
        
        $__internal_14e6c4398afdd5d007291f8fbb24a71b4f80d075b5093812521d28748da66fd3->leave($__internal_14e6c4398afdd5d007291f8fbb24a71b4f80d075b5093812521d28748da66fd3_prof);

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
