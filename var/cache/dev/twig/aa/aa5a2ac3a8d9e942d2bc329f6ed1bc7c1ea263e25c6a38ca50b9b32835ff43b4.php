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
        $__internal_715ab8b040d4fcc28306adf45eff00f39bccd964f52187a5378685c0f811acec = $this->env->getExtension("native_profiler");
        $__internal_715ab8b040d4fcc28306adf45eff00f39bccd964f52187a5378685c0f811acec->enter($__internal_715ab8b040d4fcc28306adf45eff00f39bccd964f52187a5378685c0f811acec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715ab8b040d4fcc28306adf45eff00f39bccd964f52187a5378685c0f811acec->leave($__internal_715ab8b040d4fcc28306adf45eff00f39bccd964f52187a5378685c0f811acec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40fcbc4e2fec89d2ad596b55ab72223f0bf70c853f605315974a810f50bd5d95 = $this->env->getExtension("native_profiler");
        $__internal_40fcbc4e2fec89d2ad596b55ab72223f0bf70c853f605315974a810f50bd5d95->enter($__internal_40fcbc4e2fec89d2ad596b55ab72223f0bf70c853f605315974a810f50bd5d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40fcbc4e2fec89d2ad596b55ab72223f0bf70c853f605315974a810f50bd5d95->leave($__internal_40fcbc4e2fec89d2ad596b55ab72223f0bf70c853f605315974a810f50bd5d95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cc627f8354adc81b834acd8440448fc6e50cd125510888b67e07c693675240e = $this->env->getExtension("native_profiler");
        $__internal_6cc627f8354adc81b834acd8440448fc6e50cd125510888b67e07c693675240e->enter($__internal_6cc627f8354adc81b834acd8440448fc6e50cd125510888b67e07c693675240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cc627f8354adc81b834acd8440448fc6e50cd125510888b67e07c693675240e->leave($__internal_6cc627f8354adc81b834acd8440448fc6e50cd125510888b67e07c693675240e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c97cf57383bea258b32c6779e5e8bc5bc55be230eae0f547cd8f4899b2ed546a = $this->env->getExtension("native_profiler");
        $__internal_c97cf57383bea258b32c6779e5e8bc5bc55be230eae0f547cd8f4899b2ed546a->enter($__internal_c97cf57383bea258b32c6779e5e8bc5bc55be230eae0f547cd8f4899b2ed546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c97cf57383bea258b32c6779e5e8bc5bc55be230eae0f547cd8f4899b2ed546a->leave($__internal_c97cf57383bea258b32c6779e5e8bc5bc55be230eae0f547cd8f4899b2ed546a_prof);

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
