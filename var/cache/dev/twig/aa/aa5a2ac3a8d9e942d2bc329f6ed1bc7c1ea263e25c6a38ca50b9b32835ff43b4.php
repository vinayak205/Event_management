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
        $__internal_a4f0a44df3273132c586b3357ec4300d82ae87f33fd593786dd2fedc80b0ef8b = $this->env->getExtension("native_profiler");
        $__internal_a4f0a44df3273132c586b3357ec4300d82ae87f33fd593786dd2fedc80b0ef8b->enter($__internal_a4f0a44df3273132c586b3357ec4300d82ae87f33fd593786dd2fedc80b0ef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f0a44df3273132c586b3357ec4300d82ae87f33fd593786dd2fedc80b0ef8b->leave($__internal_a4f0a44df3273132c586b3357ec4300d82ae87f33fd593786dd2fedc80b0ef8b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f24b909f81d7e177050547664ba21212160de4daa4698b43ad42284fcafa2bf = $this->env->getExtension("native_profiler");
        $__internal_9f24b909f81d7e177050547664ba21212160de4daa4698b43ad42284fcafa2bf->enter($__internal_9f24b909f81d7e177050547664ba21212160de4daa4698b43ad42284fcafa2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f24b909f81d7e177050547664ba21212160de4daa4698b43ad42284fcafa2bf->leave($__internal_9f24b909f81d7e177050547664ba21212160de4daa4698b43ad42284fcafa2bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fee55fd2b344cf78acdc0a53f24a2cde3616051cd0cf6c7e74abf5f078358f5 = $this->env->getExtension("native_profiler");
        $__internal_7fee55fd2b344cf78acdc0a53f24a2cde3616051cd0cf6c7e74abf5f078358f5->enter($__internal_7fee55fd2b344cf78acdc0a53f24a2cde3616051cd0cf6c7e74abf5f078358f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fee55fd2b344cf78acdc0a53f24a2cde3616051cd0cf6c7e74abf5f078358f5->leave($__internal_7fee55fd2b344cf78acdc0a53f24a2cde3616051cd0cf6c7e74abf5f078358f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3ddba94004bae75861c7f716d3a434a2e5c5df28bf926e2f31eab1d4ac1a19d = $this->env->getExtension("native_profiler");
        $__internal_b3ddba94004bae75861c7f716d3a434a2e5c5df28bf926e2f31eab1d4ac1a19d->enter($__internal_b3ddba94004bae75861c7f716d3a434a2e5c5df28bf926e2f31eab1d4ac1a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3ddba94004bae75861c7f716d3a434a2e5c5df28bf926e2f31eab1d4ac1a19d->leave($__internal_b3ddba94004bae75861c7f716d3a434a2e5c5df28bf926e2f31eab1d4ac1a19d_prof);

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
