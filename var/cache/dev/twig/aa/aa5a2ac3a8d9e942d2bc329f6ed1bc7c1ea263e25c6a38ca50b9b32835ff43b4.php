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
        $__internal_aa4e4fafe9e81651b38f35e5376f8d4ddd41462d81cc3e4173fb385025db1137 = $this->env->getExtension("native_profiler");
        $__internal_aa4e4fafe9e81651b38f35e5376f8d4ddd41462d81cc3e4173fb385025db1137->enter($__internal_aa4e4fafe9e81651b38f35e5376f8d4ddd41462d81cc3e4173fb385025db1137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4e4fafe9e81651b38f35e5376f8d4ddd41462d81cc3e4173fb385025db1137->leave($__internal_aa4e4fafe9e81651b38f35e5376f8d4ddd41462d81cc3e4173fb385025db1137_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a92eeec0202308e8e4aa62a189dae2feb218b15910691e2fd66a644010ecf06 = $this->env->getExtension("native_profiler");
        $__internal_9a92eeec0202308e8e4aa62a189dae2feb218b15910691e2fd66a644010ecf06->enter($__internal_9a92eeec0202308e8e4aa62a189dae2feb218b15910691e2fd66a644010ecf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a92eeec0202308e8e4aa62a189dae2feb218b15910691e2fd66a644010ecf06->leave($__internal_9a92eeec0202308e8e4aa62a189dae2feb218b15910691e2fd66a644010ecf06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f4e650b80b45b908c8feeedad7985dc7d770a9f14c1bececbfacec51e3a9ab2 = $this->env->getExtension("native_profiler");
        $__internal_4f4e650b80b45b908c8feeedad7985dc7d770a9f14c1bececbfacec51e3a9ab2->enter($__internal_4f4e650b80b45b908c8feeedad7985dc7d770a9f14c1bececbfacec51e3a9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f4e650b80b45b908c8feeedad7985dc7d770a9f14c1bececbfacec51e3a9ab2->leave($__internal_4f4e650b80b45b908c8feeedad7985dc7d770a9f14c1bececbfacec51e3a9ab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_269afa84a6dc44c332f9b564f7649103543d5bd6cbe2e1ba638ca3d26ece9e18 = $this->env->getExtension("native_profiler");
        $__internal_269afa84a6dc44c332f9b564f7649103543d5bd6cbe2e1ba638ca3d26ece9e18->enter($__internal_269afa84a6dc44c332f9b564f7649103543d5bd6cbe2e1ba638ca3d26ece9e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_269afa84a6dc44c332f9b564f7649103543d5bd6cbe2e1ba638ca3d26ece9e18->leave($__internal_269afa84a6dc44c332f9b564f7649103543d5bd6cbe2e1ba638ca3d26ece9e18_prof);

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
