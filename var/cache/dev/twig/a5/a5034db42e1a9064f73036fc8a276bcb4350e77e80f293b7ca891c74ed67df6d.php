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
        $__internal_8ce51934d984153b8b551ebf05755aab5bfa87defcb4c182c72be654dc57a58e = $this->env->getExtension("native_profiler");
        $__internal_8ce51934d984153b8b551ebf05755aab5bfa87defcb4c182c72be654dc57a58e->enter($__internal_8ce51934d984153b8b551ebf05755aab5bfa87defcb4c182c72be654dc57a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ce51934d984153b8b551ebf05755aab5bfa87defcb4c182c72be654dc57a58e->leave($__internal_8ce51934d984153b8b551ebf05755aab5bfa87defcb4c182c72be654dc57a58e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b648177cb0426c84b612687b350e2eed025ce25066e9cc998c95ae8ce79710d3 = $this->env->getExtension("native_profiler");
        $__internal_b648177cb0426c84b612687b350e2eed025ce25066e9cc998c95ae8ce79710d3->enter($__internal_b648177cb0426c84b612687b350e2eed025ce25066e9cc998c95ae8ce79710d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2 class=\"page-header\">Register</h2>
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<button type=\"submit\" class=\"btn btn-success\">Register</button>
<a href=\"/\" class=\"btn btn-danger\">Cancel</a>\t
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b648177cb0426c84b612687b350e2eed025ce25066e9cc998c95ae8ce79710d3->leave($__internal_b648177cb0426c84b612687b350e2eed025ce25066e9cc998c95ae8ce79710d3_prof);

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
        return array (  54 => 9,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h2 class="page-header">Register</h2>*/
/* {{form_start(form)}}*/
/* {{form_widget(form)}}*/
/* */
/* <button type="submit" class="btn btn-success">Register</button>*/
/* <a href="/" class="btn btn-danger">Cancel</a>	*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
