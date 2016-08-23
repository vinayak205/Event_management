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
        $__internal_0ce98345644ec1138f1497c3146cd37f3db81f3e9b4bfd636b0cf3398bde35ae = $this->env->getExtension("native_profiler");
        $__internal_0ce98345644ec1138f1497c3146cd37f3db81f3e9b4bfd636b0cf3398bde35ae->enter($__internal_0ce98345644ec1138f1497c3146cd37f3db81f3e9b4bfd636b0cf3398bde35ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce98345644ec1138f1497c3146cd37f3db81f3e9b4bfd636b0cf3398bde35ae->leave($__internal_0ce98345644ec1138f1497c3146cd37f3db81f3e9b4bfd636b0cf3398bde35ae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed9dfc5cb706b9fa452373fc4d442275b88e9b01215a5f39e91b1e9bfd8bec8d = $this->env->getExtension("native_profiler");
        $__internal_ed9dfc5cb706b9fa452373fc4d442275b88e9b01215a5f39e91b1e9bfd8bec8d->enter($__internal_ed9dfc5cb706b9fa452373fc4d442275b88e9b01215a5f39e91b1e9bfd8bec8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<button type=\"submit\" class=\"btn btn-primary\">Save Venue</button>
\t<a href=\"/venue/list\" class=\"btn btn-danger\">Cancel</a>\t
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ed9dfc5cb706b9fa452373fc4d442275b88e9b01215a5f39e91b1e9bfd8bec8d->leave($__internal_ed9dfc5cb706b9fa452373fc4d442275b88e9b01215a5f39e91b1e9bfd8bec8d_prof);

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
        return array (  53 => 8,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2 class="page-header">Edit Venue</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	<button type="submit" class="btn btn-primary">Save Venue</button>*/
/* 	<a href="/venue/list" class="btn btn-danger">Cancel</a>	*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */
