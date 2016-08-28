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
        $__internal_1b28012f5d394960b941107a50d7703326879a5eee524f4394d8ad1b8510351d = $this->env->getExtension("native_profiler");
        $__internal_1b28012f5d394960b941107a50d7703326879a5eee524f4394d8ad1b8510351d->enter($__internal_1b28012f5d394960b941107a50d7703326879a5eee524f4394d8ad1b8510351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b28012f5d394960b941107a50d7703326879a5eee524f4394d8ad1b8510351d->leave($__internal_1b28012f5d394960b941107a50d7703326879a5eee524f4394d8ad1b8510351d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b12300460aeff3e7301a174093b076a7e0aa2d1cff9521dc821d672bbc0ac5d3 = $this->env->getExtension("native_profiler");
        $__internal_b12300460aeff3e7301a174093b076a7e0aa2d1cff9521dc821d672bbc0ac5d3->enter($__internal_b12300460aeff3e7301a174093b076a7e0aa2d1cff9521dc821d672bbc0ac5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b12300460aeff3e7301a174093b076a7e0aa2d1cff9521dc821d672bbc0ac5d3->leave($__internal_b12300460aeff3e7301a174093b076a7e0aa2d1cff9521dc821d672bbc0ac5d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d3ecf04f4b977ca9161a8ee027685db1a704aec86f67e2192bdbbc8904d9250 = $this->env->getExtension("native_profiler");
        $__internal_1d3ecf04f4b977ca9161a8ee027685db1a704aec86f67e2192bdbbc8904d9250->enter($__internal_1d3ecf04f4b977ca9161a8ee027685db1a704aec86f67e2192bdbbc8904d9250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d3ecf04f4b977ca9161a8ee027685db1a704aec86f67e2192bdbbc8904d9250->leave($__internal_1d3ecf04f4b977ca9161a8ee027685db1a704aec86f67e2192bdbbc8904d9250_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6534842ffca2bcb1d29da4431337d134a9841c4b53b824b1d7754756780c6438 = $this->env->getExtension("native_profiler");
        $__internal_6534842ffca2bcb1d29da4431337d134a9841c4b53b824b1d7754756780c6438->enter($__internal_6534842ffca2bcb1d29da4431337d134a9841c4b53b824b1d7754756780c6438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6534842ffca2bcb1d29da4431337d134a9841c4b53b824b1d7754756780c6438->leave($__internal_6534842ffca2bcb1d29da4431337d134a9841c4b53b824b1d7754756780c6438_prof);

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
