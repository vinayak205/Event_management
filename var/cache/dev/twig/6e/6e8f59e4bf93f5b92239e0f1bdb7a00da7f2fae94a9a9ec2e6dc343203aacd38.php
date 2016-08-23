<?php

/* :venue:create.html.twig */
class __TwigTemplate_9bf074bb837e7942896e59fee84a5fea4a36cc7b76e5c2771131544d59ef9358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venue:create.html.twig", 1);
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
        $__internal_4a2ec265b751f6d69424d46b7857bf77b2d790a5c6178ecbf1c6862380e2d9e4 = $this->env->getExtension("native_profiler");
        $__internal_4a2ec265b751f6d69424d46b7857bf77b2d790a5c6178ecbf1c6862380e2d9e4->enter($__internal_4a2ec265b751f6d69424d46b7857bf77b2d790a5c6178ecbf1c6862380e2d9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venue:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2ec265b751f6d69424d46b7857bf77b2d790a5c6178ecbf1c6862380e2d9e4->leave($__internal_4a2ec265b751f6d69424d46b7857bf77b2d790a5c6178ecbf1c6862380e2d9e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4193b0951d4eaedb4c67da628988a1f645a06a905c709c7f4ca9aeeaa484cde8 = $this->env->getExtension("native_profiler");
        $__internal_4193b0951d4eaedb4c67da628988a1f645a06a905c709c7f4ca9aeeaa484cde8->enter($__internal_4193b0951d4eaedb4c67da628988a1f645a06a905c709c7f4ca9aeeaa484cde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2 class=\"page-header\">Add Venue</h2>
\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" class=\"btn btn-success\" value=\"Save\" />
\t<a href=\"/\" class=\"btn btn-danger\">Cancel</a>\t
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4193b0951d4eaedb4c67da628988a1f645a06a905c709c7f4ca9aeeaa484cde8->leave($__internal_4193b0951d4eaedb4c67da628988a1f645a06a905c709c7f4ca9aeeaa484cde8_prof);

    }

    public function getTemplateName()
    {
        return ":venue:create.html.twig";
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
/* 	<h2 class="page-header">Add Venue</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	<input type="submit" class="btn btn-success" value="Save" />*/
/* 	<a href="/" class="btn btn-danger">Cancel</a>	*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
/* */
