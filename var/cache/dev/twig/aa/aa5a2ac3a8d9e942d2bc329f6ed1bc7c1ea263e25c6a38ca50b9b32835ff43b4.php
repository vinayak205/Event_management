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
        $__internal_24896a080d337ebd47c4102c33d1e6043de00d8069e0e8934d7acf4a8652e532 = $this->env->getExtension("native_profiler");
        $__internal_24896a080d337ebd47c4102c33d1e6043de00d8069e0e8934d7acf4a8652e532->enter($__internal_24896a080d337ebd47c4102c33d1e6043de00d8069e0e8934d7acf4a8652e532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24896a080d337ebd47c4102c33d1e6043de00d8069e0e8934d7acf4a8652e532->leave($__internal_24896a080d337ebd47c4102c33d1e6043de00d8069e0e8934d7acf4a8652e532_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f03e76b12d0900db2b3a8f50719709022ca26ff1e25d88902caeaffa813cef4 = $this->env->getExtension("native_profiler");
        $__internal_1f03e76b12d0900db2b3a8f50719709022ca26ff1e25d88902caeaffa813cef4->enter($__internal_1f03e76b12d0900db2b3a8f50719709022ca26ff1e25d88902caeaffa813cef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f03e76b12d0900db2b3a8f50719709022ca26ff1e25d88902caeaffa813cef4->leave($__internal_1f03e76b12d0900db2b3a8f50719709022ca26ff1e25d88902caeaffa813cef4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5029593cbdb9ad758492fcfa95f2aa6c1dec085f58711f89c95022a8b58accd0 = $this->env->getExtension("native_profiler");
        $__internal_5029593cbdb9ad758492fcfa95f2aa6c1dec085f58711f89c95022a8b58accd0->enter($__internal_5029593cbdb9ad758492fcfa95f2aa6c1dec085f58711f89c95022a8b58accd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5029593cbdb9ad758492fcfa95f2aa6c1dec085f58711f89c95022a8b58accd0->leave($__internal_5029593cbdb9ad758492fcfa95f2aa6c1dec085f58711f89c95022a8b58accd0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c791e1fcce5e29232d0c83537fb70539c3e8fec506071dd4cdf815699e8508e5 = $this->env->getExtension("native_profiler");
        $__internal_c791e1fcce5e29232d0c83537fb70539c3e8fec506071dd4cdf815699e8508e5->enter($__internal_c791e1fcce5e29232d0c83537fb70539c3e8fec506071dd4cdf815699e8508e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c791e1fcce5e29232d0c83537fb70539c3e8fec506071dd4cdf815699e8508e5->leave($__internal_c791e1fcce5e29232d0c83537fb70539c3e8fec506071dd4cdf815699e8508e5_prof);

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
