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
        $__internal_53dd77c1476565519ab691415c233c0bad8f692e97860d6b49480328fa2607bc = $this->env->getExtension("native_profiler");
        $__internal_53dd77c1476565519ab691415c233c0bad8f692e97860d6b49480328fa2607bc->enter($__internal_53dd77c1476565519ab691415c233c0bad8f692e97860d6b49480328fa2607bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53dd77c1476565519ab691415c233c0bad8f692e97860d6b49480328fa2607bc->leave($__internal_53dd77c1476565519ab691415c233c0bad8f692e97860d6b49480328fa2607bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8e11179c27e6e2e5b081347f9d88b3e6a28d4ca9a953b26d1d7eef072faab8a = $this->env->getExtension("native_profiler");
        $__internal_d8e11179c27e6e2e5b081347f9d88b3e6a28d4ca9a953b26d1d7eef072faab8a->enter($__internal_d8e11179c27e6e2e5b081347f9d88b3e6a28d4ca9a953b26d1d7eef072faab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8e11179c27e6e2e5b081347f9d88b3e6a28d4ca9a953b26d1d7eef072faab8a->leave($__internal_d8e11179c27e6e2e5b081347f9d88b3e6a28d4ca9a953b26d1d7eef072faab8a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_210077b27e311b90225a28a3c96e1603639a7dd400f723a1275a009794ffb0de = $this->env->getExtension("native_profiler");
        $__internal_210077b27e311b90225a28a3c96e1603639a7dd400f723a1275a009794ffb0de->enter($__internal_210077b27e311b90225a28a3c96e1603639a7dd400f723a1275a009794ffb0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_210077b27e311b90225a28a3c96e1603639a7dd400f723a1275a009794ffb0de->leave($__internal_210077b27e311b90225a28a3c96e1603639a7dd400f723a1275a009794ffb0de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f10df5be8e08cd6b530d7b2079ef0290d10090e2d9fc4e9a4b1d2db5f8c5fce = $this->env->getExtension("native_profiler");
        $__internal_9f10df5be8e08cd6b530d7b2079ef0290d10090e2d9fc4e9a4b1d2db5f8c5fce->enter($__internal_9f10df5be8e08cd6b530d7b2079ef0290d10090e2d9fc4e9a4b1d2db5f8c5fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9f10df5be8e08cd6b530d7b2079ef0290d10090e2d9fc4e9a4b1d2db5f8c5fce->leave($__internal_9f10df5be8e08cd6b530d7b2079ef0290d10090e2d9fc4e9a4b1d2db5f8c5fce_prof);

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
