<?php

/* :default:register.html.twig */
class __TwigTemplate_ee949c2479485ad0b3104e2a9e43ca93c41c9613aa28b9d88d37b23292c3b9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:register.html.twig", 1);
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
        $__internal_ef7ec33a067c9927389f7925e3d06be9ad3350792e41b42d65a5c09d24cbfde6 = $this->env->getExtension("native_profiler");
        $__internal_ef7ec33a067c9927389f7925e3d06be9ad3350792e41b42d65a5c09d24cbfde6->enter($__internal_ef7ec33a067c9927389f7925e3d06be9ad3350792e41b42d65a5c09d24cbfde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7ec33a067c9927389f7925e3d06be9ad3350792e41b42d65a5c09d24cbfde6->leave($__internal_ef7ec33a067c9927389f7925e3d06be9ad3350792e41b42d65a5c09d24cbfde6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_250ac4ea6100ffa8a8551fdf8566a80bc4082f0997651eb98e99fbe563bf0af4 = $this->env->getExtension("native_profiler");
        $__internal_250ac4ea6100ffa8a8551fdf8566a80bc4082f0997651eb98e99fbe563bf0af4->enter($__internal_250ac4ea6100ffa8a8551fdf8566a80bc4082f0997651eb98e99fbe563bf0af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4 col-md-offset-4\">
        \t<h1 class=\"text-center login-title\">Register</h1>
\t\t\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<div style=\"text-align:center; margin:auto;\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Register</button>
\t\t\t\t<a href=\"/\" class=\"btn btn-danger\">Cancel</a>

\t\t\t</div>\t
\t\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
    </div>
</div>

";
        
        $__internal_250ac4ea6100ffa8a8551fdf8566a80bc4082f0997651eb98e99fbe563bf0af4->leave($__internal_250ac4ea6100ffa8a8551fdf8566a80bc4082f0997651eb98e99fbe563bf0af4_prof);

    }

    public function getTemplateName()
    {
        return ":default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4 col-md-offset-4">*/
/*         	<h1 class="text-center login-title">Register</h1>*/
/* 			{{form_start(form)}}*/
/* 			{{form_widget(form)}}*/
/* 			<div style="text-align:center; margin:auto;">*/
/* 				<button type="submit" class="btn btn-primary">Register</button>*/
/* 				<a href="/" class="btn btn-danger">Cancel</a>*/
/* */
/* 			</div>	*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
