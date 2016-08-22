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
        $__internal_8cf9684072f81698f84fdfc800bd80b5cf7777e7ab823dde0fb9a4f004be4749 = $this->env->getExtension("native_profiler");
        $__internal_8cf9684072f81698f84fdfc800bd80b5cf7777e7ab823dde0fb9a4f004be4749->enter($__internal_8cf9684072f81698f84fdfc800bd80b5cf7777e7ab823dde0fb9a4f004be4749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cf9684072f81698f84fdfc800bd80b5cf7777e7ab823dde0fb9a4f004be4749->leave($__internal_8cf9684072f81698f84fdfc800bd80b5cf7777e7ab823dde0fb9a4f004be4749_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6275743d9c97502f6081c41c84e85b440c8aad07a92ecfc5806da7138e1ffbb = $this->env->getExtension("native_profiler");
        $__internal_a6275743d9c97502f6081c41c84e85b440c8aad07a92ecfc5806da7138e1ffbb->enter($__internal_a6275743d9c97502f6081c41c84e85b440c8aad07a92ecfc5806da7138e1ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6275743d9c97502f6081c41c84e85b440c8aad07a92ecfc5806da7138e1ffbb->leave($__internal_a6275743d9c97502f6081c41c84e85b440c8aad07a92ecfc5806da7138e1ffbb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d025d341709e478f175b0a2c28f9f88d193f315c6c12f42c1394000625bd653 = $this->env->getExtension("native_profiler");
        $__internal_0d025d341709e478f175b0a2c28f9f88d193f315c6c12f42c1394000625bd653->enter($__internal_0d025d341709e478f175b0a2c28f9f88d193f315c6c12f42c1394000625bd653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d025d341709e478f175b0a2c28f9f88d193f315c6c12f42c1394000625bd653->leave($__internal_0d025d341709e478f175b0a2c28f9f88d193f315c6c12f42c1394000625bd653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d96e345d6e20772f78f60ff7f767e44d9853c24205ca865e9a436e723f98313 = $this->env->getExtension("native_profiler");
        $__internal_0d96e345d6e20772f78f60ff7f767e44d9853c24205ca865e9a436e723f98313->enter($__internal_0d96e345d6e20772f78f60ff7f767e44d9853c24205ca865e9a436e723f98313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d96e345d6e20772f78f60ff7f767e44d9853c24205ca865e9a436e723f98313->leave($__internal_0d96e345d6e20772f78f60ff7f767e44d9853c24205ca865e9a436e723f98313_prof);

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
