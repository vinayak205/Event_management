<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_26a86f4b654ee92dc3feb3cef87e8ed7f4e9059d9673902c107c70f38854055a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952c25be1de58d93b344c03c7f9fba697854f787b5ba7b0166e24586ded19ed1 = $this->env->getExtension("native_profiler");
        $__internal_952c25be1de58d93b344c03c7f9fba697854f787b5ba7b0166e24586ded19ed1->enter($__internal_952c25be1de58d93b344c03c7f9fba697854f787b5ba7b0166e24586ded19ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952c25be1de58d93b344c03c7f9fba697854f787b5ba7b0166e24586ded19ed1->leave($__internal_952c25be1de58d93b344c03c7f9fba697854f787b5ba7b0166e24586ded19ed1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2361cfc660772d4d516f0c466302971802642dadb7bd59d9090fe576a48a1c8d = $this->env->getExtension("native_profiler");
        $__internal_2361cfc660772d4d516f0c466302971802642dadb7bd59d9090fe576a48a1c8d->enter($__internal_2361cfc660772d4d516f0c466302971802642dadb7bd59d9090fe576a48a1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2361cfc660772d4d516f0c466302971802642dadb7bd59d9090fe576a48a1c8d->leave($__internal_2361cfc660772d4d516f0c466302971802642dadb7bd59d9090fe576a48a1c8d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f85c8a80464edfbf9646b2af17397fd34fd780410991cfc7f6b60313c24494b1 = $this->env->getExtension("native_profiler");
        $__internal_f85c8a80464edfbf9646b2af17397fd34fd780410991cfc7f6b60313c24494b1->enter($__internal_f85c8a80464edfbf9646b2af17397fd34fd780410991cfc7f6b60313c24494b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f85c8a80464edfbf9646b2af17397fd34fd780410991cfc7f6b60313c24494b1->leave($__internal_f85c8a80464edfbf9646b2af17397fd34fd780410991cfc7f6b60313c24494b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6f7b1a5d2477bf2ea2fbded359aff51939877c1b91d70f88ffb83c1bf061e3d = $this->env->getExtension("native_profiler");
        $__internal_d6f7b1a5d2477bf2ea2fbded359aff51939877c1b91d70f88ffb83c1bf061e3d->enter($__internal_d6f7b1a5d2477bf2ea2fbded359aff51939877c1b91d70f88ffb83c1bf061e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6f7b1a5d2477bf2ea2fbded359aff51939877c1b91d70f88ffb83c1bf061e3d->leave($__internal_d6f7b1a5d2477bf2ea2fbded359aff51939877c1b91d70f88ffb83c1bf061e3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
