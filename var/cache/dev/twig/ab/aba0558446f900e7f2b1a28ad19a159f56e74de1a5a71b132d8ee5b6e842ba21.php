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
        $__internal_e2c87a42b4aecb04cfa31e65ebd8413b84798aaa099d1a160b2ddbb124e7a52c = $this->env->getExtension("native_profiler");
        $__internal_e2c87a42b4aecb04cfa31e65ebd8413b84798aaa099d1a160b2ddbb124e7a52c->enter($__internal_e2c87a42b4aecb04cfa31e65ebd8413b84798aaa099d1a160b2ddbb124e7a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c87a42b4aecb04cfa31e65ebd8413b84798aaa099d1a160b2ddbb124e7a52c->leave($__internal_e2c87a42b4aecb04cfa31e65ebd8413b84798aaa099d1a160b2ddbb124e7a52c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c715b1590434a5368ad6a2388162b42945b6cd97076e75f816a87dc9e7f2a819 = $this->env->getExtension("native_profiler");
        $__internal_c715b1590434a5368ad6a2388162b42945b6cd97076e75f816a87dc9e7f2a819->enter($__internal_c715b1590434a5368ad6a2388162b42945b6cd97076e75f816a87dc9e7f2a819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c715b1590434a5368ad6a2388162b42945b6cd97076e75f816a87dc9e7f2a819->leave($__internal_c715b1590434a5368ad6a2388162b42945b6cd97076e75f816a87dc9e7f2a819_prof);

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
