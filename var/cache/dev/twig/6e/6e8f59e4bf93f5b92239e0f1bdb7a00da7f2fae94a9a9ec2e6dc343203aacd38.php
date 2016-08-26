<?php

/* venue/create.html.twig */
class __TwigTemplate_9bf074bb837e7942896e59fee84a5fea4a36cc7b76e5c2771131544d59ef9358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venue/create.html.twig", 1);
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
        $__internal_3c1b5bbb54341266342507ce630ef17a9e0c09324f64947059e7170e7eeb9910 = $this->env->getExtension("native_profiler");
        $__internal_3c1b5bbb54341266342507ce630ef17a9e0c09324f64947059e7170e7eeb9910->enter($__internal_3c1b5bbb54341266342507ce630ef17a9e0c09324f64947059e7170e7eeb9910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venue/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c1b5bbb54341266342507ce630ef17a9e0c09324f64947059e7170e7eeb9910->leave($__internal_3c1b5bbb54341266342507ce630ef17a9e0c09324f64947059e7170e7eeb9910_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a371789eb8f2f44d551a7bbb24ede594f173571b5b8f681af968fd02c6573f7 = $this->env->getExtension("native_profiler");
        $__internal_7a371789eb8f2f44d551a7bbb24ede594f173571b5b8f681af968fd02c6573f7->enter($__internal_7a371789eb8f2f44d551a7bbb24ede594f173571b5b8f681af968fd02c6573f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t
\t<div class=\"container\">
    \t<div class=\"row\">
        \t<div class=\"col-sm-6 col-md-4 col-md-offset-4\">
        \t<h1 class=\"text-center login-title\">Add Venue</h1>
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
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add Venue</button>
\t\t\t\t<a href=\"/\" class=\"btn btn-danger\">Cancel</a>

\t\t\t</div>\t
\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
    </div>
</div>
";
        
        $__internal_7a371789eb8f2f44d551a7bbb24ede594f173571b5b8f681af968fd02c6573f7->leave($__internal_7a371789eb8f2f44d551a7bbb24ede594f173571b5b8f681af968fd02c6573f7_prof);

    }

    public function getTemplateName()
    {
        return "venue/create.html.twig";
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
/*         	<h1 class="text-center login-title">Add Venue</h1>*/
/* 		{{form_start(form)}}*/
/* 		{{form_widget(form)}}*/
/* 		<div style="text-align:center; margin:auto;">*/
/* 			<br>*/
/* 				<button type="submit" class="btn btn-primary">Add Venue</button>*/
/* 				<a href="/" class="btn btn-danger">Cancel</a>*/
/* */
/* 			</div>	*/
/* 		{{form_end(form)}}*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
