<?php

/* events/create.html.twig */
class __TwigTemplate_85ac00bcba63c6c31411fb1166c0a0cf08b74b74159e2fd28e3d4f4588af2c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "events/create.html.twig", 1);
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
        $__internal_28462a1956c839c8131aca235752fa01201b8d923131bbfb7db56d5599852410 = $this->env->getExtension("native_profiler");
        $__internal_28462a1956c839c8131aca235752fa01201b8d923131bbfb7db56d5599852410->enter($__internal_28462a1956c839c8131aca235752fa01201b8d923131bbfb7db56d5599852410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "events/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28462a1956c839c8131aca235752fa01201b8d923131bbfb7db56d5599852410->leave($__internal_28462a1956c839c8131aca235752fa01201b8d923131bbfb7db56d5599852410_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_61cad4871d8a1ac86d2465f07cea13dfc73c49858d2671256111def46af3683f = $this->env->getExtension("native_profiler");
        $__internal_61cad4871d8a1ac86d2465f07cea13dfc73c49858d2671256111def46af3683f->enter($__internal_61cad4871d8a1ac86d2465f07cea13dfc73c49858d2671256111def46af3683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-sm-6 col-md-4 col-md-offset-4\">
        \t<h1 class=\"text-center login-title\">Create Event</h1>
\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<div style=\"text-align:center; margin:auto;\">
\t\t\t<br>
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Create Event</button>
\t\t\t\t<a href=\"/events/list\" class=\"btn btn-danger\">Cancel</a>

\t\t\t</div>\t
\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
    </div>
</div>
";
        
        $__internal_61cad4871d8a1ac86d2465f07cea13dfc73c49858d2671256111def46af3683f->leave($__internal_61cad4871d8a1ac86d2465f07cea13dfc73c49858d2671256111def46af3683f_prof);

    }

    public function getTemplateName()
    {
        return "events/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* 	*/
/* 	<div class="container">*/
/*     	<div class="row">*/
/*         	<div class="col-sm-6 col-md-4 col-md-offset-4">*/
/*         	<h1 class="text-center login-title">Create Event</h1>*/
/* 		{{form_start(form)}}*/
/* 		{{form_widget(form)}}*/
/* 		<div style="text-align:center; margin:auto;">*/
/* 			<br>*/
/* 				<button type="submit" class="btn btn-primary">Create Event</button>*/
/* 				<a href="/events/list" class="btn btn-danger">Cancel</a>*/
/* */
/* 			</div>	*/
/* 		{{form_end(form)}}*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
