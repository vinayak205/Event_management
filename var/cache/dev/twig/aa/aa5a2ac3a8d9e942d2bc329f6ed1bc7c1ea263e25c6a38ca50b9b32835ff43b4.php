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
        $__internal_0fec02955ebcd1d74ba57f6372afaa84d15a6d1d4a4d11db9ea53d70f3533edb = $this->env->getExtension("native_profiler");
        $__internal_0fec02955ebcd1d74ba57f6372afaa84d15a6d1d4a4d11db9ea53d70f3533edb->enter($__internal_0fec02955ebcd1d74ba57f6372afaa84d15a6d1d4a4d11db9ea53d70f3533edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fec02955ebcd1d74ba57f6372afaa84d15a6d1d4a4d11db9ea53d70f3533edb->leave($__internal_0fec02955ebcd1d74ba57f6372afaa84d15a6d1d4a4d11db9ea53d70f3533edb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07c6a113eca88b62712e6c9a462d60cc3bdc5672be9ecc605c66a449ea11f529 = $this->env->getExtension("native_profiler");
        $__internal_07c6a113eca88b62712e6c9a462d60cc3bdc5672be9ecc605c66a449ea11f529->enter($__internal_07c6a113eca88b62712e6c9a462d60cc3bdc5672be9ecc605c66a449ea11f529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07c6a113eca88b62712e6c9a462d60cc3bdc5672be9ecc605c66a449ea11f529->leave($__internal_07c6a113eca88b62712e6c9a462d60cc3bdc5672be9ecc605c66a449ea11f529_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd04fbf6be344fa5bee89a1d4609f4a847a2542103bd6188574c5a17bbfdcf21 = $this->env->getExtension("native_profiler");
        $__internal_fd04fbf6be344fa5bee89a1d4609f4a847a2542103bd6188574c5a17bbfdcf21->enter($__internal_fd04fbf6be344fa5bee89a1d4609f4a847a2542103bd6188574c5a17bbfdcf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd04fbf6be344fa5bee89a1d4609f4a847a2542103bd6188574c5a17bbfdcf21->leave($__internal_fd04fbf6be344fa5bee89a1d4609f4a847a2542103bd6188574c5a17bbfdcf21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2277ef571c1191f3682749b4c728f3d995accceb32585008ff313bd83fcb730 = $this->env->getExtension("native_profiler");
        $__internal_a2277ef571c1191f3682749b4c728f3d995accceb32585008ff313bd83fcb730->enter($__internal_a2277ef571c1191f3682749b4c728f3d995accceb32585008ff313bd83fcb730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2277ef571c1191f3682749b4c728f3d995accceb32585008ff313bd83fcb730->leave($__internal_a2277ef571c1191f3682749b4c728f3d995accceb32585008ff313bd83fcb730_prof);

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
