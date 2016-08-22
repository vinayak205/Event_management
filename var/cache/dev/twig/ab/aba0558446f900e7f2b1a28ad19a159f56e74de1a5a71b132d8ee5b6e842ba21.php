<?php

/* :venue:edit.html.twig */
class __TwigTemplate_ade2737d6fcc07a6a6397e8c83f3f55da293b822f6295771601ba20fb8721fa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venue:edit.html.twig", 1);
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
        $__internal_1d4b5d5c7a1fa07606f6751dbee20e804e199fa8a63b1afd78d27cc5b0bce130 = $this->env->getExtension("native_profiler");
        $__internal_1d4b5d5c7a1fa07606f6751dbee20e804e199fa8a63b1afd78d27cc5b0bce130->enter($__internal_1d4b5d5c7a1fa07606f6751dbee20e804e199fa8a63b1afd78d27cc5b0bce130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4b5d5c7a1fa07606f6751dbee20e804e199fa8a63b1afd78d27cc5b0bce130->leave($__internal_1d4b5d5c7a1fa07606f6751dbee20e804e199fa8a63b1afd78d27cc5b0bce130_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_75610c2ad7d84d0ad2c0f18040ffc3dcb5e288dde6a2ca19342fc41559f482d0 = $this->env->getExtension("native_profiler");
        $__internal_75610c2ad7d84d0ad2c0f18040ffc3dcb5e288dde6a2ca19342fc41559f482d0->enter($__internal_75610c2ad7d84d0ad2c0f18040ffc3dcb5e288dde6a2ca19342fc41559f482d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2 class=\"page-header\">Edit Venue</h2>
\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<a href=\"/venue/list\" class=\"btn btn-danger\">Cancel</a>\t
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_75610c2ad7d84d0ad2c0f18040ffc3dcb5e288dde6a2ca19342fc41559f482d0->leave($__internal_75610c2ad7d84d0ad2c0f18040ffc3dcb5e288dde6a2ca19342fc41559f482d0_prof);

    }

    public function getTemplateName()
    {
        return ":venue:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2 class="page-header">Edit Venue</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	<a href="/venue/list" class="btn btn-danger">Cancel</a>	*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */
