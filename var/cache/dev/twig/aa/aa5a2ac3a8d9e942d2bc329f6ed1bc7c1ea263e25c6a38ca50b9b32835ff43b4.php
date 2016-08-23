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
        $__internal_44a30e812f1555b8113d9eb9a7a2c11ddfb1a976d1af4d6293bd8d887ebfb2d1 = $this->env->getExtension("native_profiler");
        $__internal_44a30e812f1555b8113d9eb9a7a2c11ddfb1a976d1af4d6293bd8d887ebfb2d1->enter($__internal_44a30e812f1555b8113d9eb9a7a2c11ddfb1a976d1af4d6293bd8d887ebfb2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a30e812f1555b8113d9eb9a7a2c11ddfb1a976d1af4d6293bd8d887ebfb2d1->leave($__internal_44a30e812f1555b8113d9eb9a7a2c11ddfb1a976d1af4d6293bd8d887ebfb2d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b157e004aa3dcd059461bf3620cf6ff99319c8017cb8a2b5f89ea0be23b844de = $this->env->getExtension("native_profiler");
        $__internal_b157e004aa3dcd059461bf3620cf6ff99319c8017cb8a2b5f89ea0be23b844de->enter($__internal_b157e004aa3dcd059461bf3620cf6ff99319c8017cb8a2b5f89ea0be23b844de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b157e004aa3dcd059461bf3620cf6ff99319c8017cb8a2b5f89ea0be23b844de->leave($__internal_b157e004aa3dcd059461bf3620cf6ff99319c8017cb8a2b5f89ea0be23b844de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f460161dbe307167edf6098a2622e35cf515c22fe471f8b6488c527edb5a490c = $this->env->getExtension("native_profiler");
        $__internal_f460161dbe307167edf6098a2622e35cf515c22fe471f8b6488c527edb5a490c->enter($__internal_f460161dbe307167edf6098a2622e35cf515c22fe471f8b6488c527edb5a490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f460161dbe307167edf6098a2622e35cf515c22fe471f8b6488c527edb5a490c->leave($__internal_f460161dbe307167edf6098a2622e35cf515c22fe471f8b6488c527edb5a490c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd1e727a5da25ab68aa2d1b87b377865300c1badd949e5c13bef66b119ffda24 = $this->env->getExtension("native_profiler");
        $__internal_bd1e727a5da25ab68aa2d1b87b377865300c1badd949e5c13bef66b119ffda24->enter($__internal_bd1e727a5da25ab68aa2d1b87b377865300c1badd949e5c13bef66b119ffda24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd1e727a5da25ab68aa2d1b87b377865300c1badd949e5c13bef66b119ffda24->leave($__internal_bd1e727a5da25ab68aa2d1b87b377865300c1badd949e5c13bef66b119ffda24_prof);

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
