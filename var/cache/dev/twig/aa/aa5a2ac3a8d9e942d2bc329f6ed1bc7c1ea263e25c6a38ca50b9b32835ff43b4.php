<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26a86f4b654ee92dc3feb3cef87e8ed7f4e9059d9673902c107c70f38854055a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9198e095d8e8b92f6cb6297842e1377256172c7eb0fd0ce362d9b85cf168ef13 = $this->env->getExtension("native_profiler");
        $__internal_9198e095d8e8b92f6cb6297842e1377256172c7eb0fd0ce362d9b85cf168ef13->enter($__internal_9198e095d8e8b92f6cb6297842e1377256172c7eb0fd0ce362d9b85cf168ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9198e095d8e8b92f6cb6297842e1377256172c7eb0fd0ce362d9b85cf168ef13->leave($__internal_9198e095d8e8b92f6cb6297842e1377256172c7eb0fd0ce362d9b85cf168ef13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef7ab0564ca9401bba25139fdf0efbe038d6698cd30d74390a6beb5f5be9e020 = $this->env->getExtension("native_profiler");
        $__internal_ef7ab0564ca9401bba25139fdf0efbe038d6698cd30d74390a6beb5f5be9e020->enter($__internal_ef7ab0564ca9401bba25139fdf0efbe038d6698cd30d74390a6beb5f5be9e020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef7ab0564ca9401bba25139fdf0efbe038d6698cd30d74390a6beb5f5be9e020->leave($__internal_ef7ab0564ca9401bba25139fdf0efbe038d6698cd30d74390a6beb5f5be9e020_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3316bd76006e327f6728b91063a08ef97fa42e74420b2f15cf1f1e485b33c1d = $this->env->getExtension("native_profiler");
        $__internal_b3316bd76006e327f6728b91063a08ef97fa42e74420b2f15cf1f1e485b33c1d->enter($__internal_b3316bd76006e327f6728b91063a08ef97fa42e74420b2f15cf1f1e485b33c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3316bd76006e327f6728b91063a08ef97fa42e74420b2f15cf1f1e485b33c1d->leave($__internal_b3316bd76006e327f6728b91063a08ef97fa42e74420b2f15cf1f1e485b33c1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e64a1297f21510772df9dee2339a3f44090576a4ba490ebdce3f07ad8707a3e = $this->env->getExtension("native_profiler");
        $__internal_2e64a1297f21510772df9dee2339a3f44090576a4ba490ebdce3f07ad8707a3e->enter($__internal_2e64a1297f21510772df9dee2339a3f44090576a4ba490ebdce3f07ad8707a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e64a1297f21510772df9dee2339a3f44090576a4ba490ebdce3f07ad8707a3e->leave($__internal_2e64a1297f21510772df9dee2339a3f44090576a4ba490ebdce3f07ad8707a3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
