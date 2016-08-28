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
        $__internal_55305d1671c7b68bbfc04640011ef1a572feb6212acfc805958d45f98d9c48b1 = $this->env->getExtension("native_profiler");
        $__internal_55305d1671c7b68bbfc04640011ef1a572feb6212acfc805958d45f98d9c48b1->enter($__internal_55305d1671c7b68bbfc04640011ef1a572feb6212acfc805958d45f98d9c48b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55305d1671c7b68bbfc04640011ef1a572feb6212acfc805958d45f98d9c48b1->leave($__internal_55305d1671c7b68bbfc04640011ef1a572feb6212acfc805958d45f98d9c48b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9408712852de474f9ea647889e12d0e445ffd3ac6d05e1253756ddd3e36c8e1 = $this->env->getExtension("native_profiler");
        $__internal_f9408712852de474f9ea647889e12d0e445ffd3ac6d05e1253756ddd3e36c8e1->enter($__internal_f9408712852de474f9ea647889e12d0e445ffd3ac6d05e1253756ddd3e36c8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9408712852de474f9ea647889e12d0e445ffd3ac6d05e1253756ddd3e36c8e1->leave($__internal_f9408712852de474f9ea647889e12d0e445ffd3ac6d05e1253756ddd3e36c8e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7300e199e5fcd45b0e9dcf00e7280ca3631e36ac970fa5c83b59022cd88de419 = $this->env->getExtension("native_profiler");
        $__internal_7300e199e5fcd45b0e9dcf00e7280ca3631e36ac970fa5c83b59022cd88de419->enter($__internal_7300e199e5fcd45b0e9dcf00e7280ca3631e36ac970fa5c83b59022cd88de419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7300e199e5fcd45b0e9dcf00e7280ca3631e36ac970fa5c83b59022cd88de419->leave($__internal_7300e199e5fcd45b0e9dcf00e7280ca3631e36ac970fa5c83b59022cd88de419_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_995c74c4b1365c1403ee2fa229d510e54f3e94decf6584a88c5f102130b769c4 = $this->env->getExtension("native_profiler");
        $__internal_995c74c4b1365c1403ee2fa229d510e54f3e94decf6584a88c5f102130b769c4->enter($__internal_995c74c4b1365c1403ee2fa229d510e54f3e94decf6584a88c5f102130b769c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_995c74c4b1365c1403ee2fa229d510e54f3e94decf6584a88c5f102130b769c4->leave($__internal_995c74c4b1365c1403ee2fa229d510e54f3e94decf6584a88c5f102130b769c4_prof);

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
