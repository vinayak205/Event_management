<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_63d53c8e205ef8a7d6e954fd7454761f3cb2f1d3a2bb81a4924806c93b1b7ec6 extends Twig_Template
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
        $__internal_b7ddd87a3a47a19fdc20bbb00be2dab6bed28740bbb2e2fc87761e8d9c3730a2 = $this->env->getExtension("native_profiler");
        $__internal_b7ddd87a3a47a19fdc20bbb00be2dab6bed28740bbb2e2fc87761e8d9c3730a2->enter($__internal_b7ddd87a3a47a19fdc20bbb00be2dab6bed28740bbb2e2fc87761e8d9c3730a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ddd87a3a47a19fdc20bbb00be2dab6bed28740bbb2e2fc87761e8d9c3730a2->leave($__internal_b7ddd87a3a47a19fdc20bbb00be2dab6bed28740bbb2e2fc87761e8d9c3730a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2de6ce12d29d843ee4b717e1dbf0a8b86668a4ba88eb53fb23a22a55bf93ea06 = $this->env->getExtension("native_profiler");
        $__internal_2de6ce12d29d843ee4b717e1dbf0a8b86668a4ba88eb53fb23a22a55bf93ea06->enter($__internal_2de6ce12d29d843ee4b717e1dbf0a8b86668a4ba88eb53fb23a22a55bf93ea06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2de6ce12d29d843ee4b717e1dbf0a8b86668a4ba88eb53fb23a22a55bf93ea06->leave($__internal_2de6ce12d29d843ee4b717e1dbf0a8b86668a4ba88eb53fb23a22a55bf93ea06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0722894928b1ce719af1e43d2ec27b39b2cc96c711591fcb65c8fcd3394cd129 = $this->env->getExtension("native_profiler");
        $__internal_0722894928b1ce719af1e43d2ec27b39b2cc96c711591fcb65c8fcd3394cd129->enter($__internal_0722894928b1ce719af1e43d2ec27b39b2cc96c711591fcb65c8fcd3394cd129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0722894928b1ce719af1e43d2ec27b39b2cc96c711591fcb65c8fcd3394cd129->leave($__internal_0722894928b1ce719af1e43d2ec27b39b2cc96c711591fcb65c8fcd3394cd129_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9eca28cf94a63b0041d3448f823d05520731cf5586e744e968cc9f21f4171722 = $this->env->getExtension("native_profiler");
        $__internal_9eca28cf94a63b0041d3448f823d05520731cf5586e744e968cc9f21f4171722->enter($__internal_9eca28cf94a63b0041d3448f823d05520731cf5586e744e968cc9f21f4171722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9eca28cf94a63b0041d3448f823d05520731cf5586e744e968cc9f21f4171722->leave($__internal_9eca28cf94a63b0041d3448f823d05520731cf5586e744e968cc9f21f4171722_prof);

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
