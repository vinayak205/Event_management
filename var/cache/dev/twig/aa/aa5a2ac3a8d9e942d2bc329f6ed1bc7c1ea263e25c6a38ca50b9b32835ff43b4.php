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
        $__internal_5d02fcac7ebd6d30f88c194e92ce7bfe082117e4050c4974dcef7834681fbd25 = $this->env->getExtension("native_profiler");
        $__internal_5d02fcac7ebd6d30f88c194e92ce7bfe082117e4050c4974dcef7834681fbd25->enter($__internal_5d02fcac7ebd6d30f88c194e92ce7bfe082117e4050c4974dcef7834681fbd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d02fcac7ebd6d30f88c194e92ce7bfe082117e4050c4974dcef7834681fbd25->leave($__internal_5d02fcac7ebd6d30f88c194e92ce7bfe082117e4050c4974dcef7834681fbd25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df3580f7049a39a53dc39a9a149de220359c123b6c901aa04a660d98025ffa68 = $this->env->getExtension("native_profiler");
        $__internal_df3580f7049a39a53dc39a9a149de220359c123b6c901aa04a660d98025ffa68->enter($__internal_df3580f7049a39a53dc39a9a149de220359c123b6c901aa04a660d98025ffa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df3580f7049a39a53dc39a9a149de220359c123b6c901aa04a660d98025ffa68->leave($__internal_df3580f7049a39a53dc39a9a149de220359c123b6c901aa04a660d98025ffa68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04a8f51247a56647bf57046243a0e755d777838f81ca9afc18e3dd07f74eb4c5 = $this->env->getExtension("native_profiler");
        $__internal_04a8f51247a56647bf57046243a0e755d777838f81ca9afc18e3dd07f74eb4c5->enter($__internal_04a8f51247a56647bf57046243a0e755d777838f81ca9afc18e3dd07f74eb4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04a8f51247a56647bf57046243a0e755d777838f81ca9afc18e3dd07f74eb4c5->leave($__internal_04a8f51247a56647bf57046243a0e755d777838f81ca9afc18e3dd07f74eb4c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b81bfa697a8fd6f3b292737351dfada704ab3308026063c02713f7a4ba8576c2 = $this->env->getExtension("native_profiler");
        $__internal_b81bfa697a8fd6f3b292737351dfada704ab3308026063c02713f7a4ba8576c2->enter($__internal_b81bfa697a8fd6f3b292737351dfada704ab3308026063c02713f7a4ba8576c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b81bfa697a8fd6f3b292737351dfada704ab3308026063c02713f7a4ba8576c2->leave($__internal_b81bfa697a8fd6f3b292737351dfada704ab3308026063c02713f7a4ba8576c2_prof);

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
