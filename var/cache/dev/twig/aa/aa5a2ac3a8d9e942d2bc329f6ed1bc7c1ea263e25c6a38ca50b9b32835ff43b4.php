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
        $__internal_eecca9b13b810377ebbb9bfa533932bb1d730e2f6e376d81e1d33ea6e18dc508 = $this->env->getExtension("native_profiler");
        $__internal_eecca9b13b810377ebbb9bfa533932bb1d730e2f6e376d81e1d33ea6e18dc508->enter($__internal_eecca9b13b810377ebbb9bfa533932bb1d730e2f6e376d81e1d33ea6e18dc508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecca9b13b810377ebbb9bfa533932bb1d730e2f6e376d81e1d33ea6e18dc508->leave($__internal_eecca9b13b810377ebbb9bfa533932bb1d730e2f6e376d81e1d33ea6e18dc508_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c888d7c24ad14ba9f0c67b2c2ec9375db21e0bc590fb330e53e1c2d02bc46b3 = $this->env->getExtension("native_profiler");
        $__internal_4c888d7c24ad14ba9f0c67b2c2ec9375db21e0bc590fb330e53e1c2d02bc46b3->enter($__internal_4c888d7c24ad14ba9f0c67b2c2ec9375db21e0bc590fb330e53e1c2d02bc46b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c888d7c24ad14ba9f0c67b2c2ec9375db21e0bc590fb330e53e1c2d02bc46b3->leave($__internal_4c888d7c24ad14ba9f0c67b2c2ec9375db21e0bc590fb330e53e1c2d02bc46b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9163be45424089e73d17811ebeadfa4d4b858fbb2a5c2f05028e02081813f5f5 = $this->env->getExtension("native_profiler");
        $__internal_9163be45424089e73d17811ebeadfa4d4b858fbb2a5c2f05028e02081813f5f5->enter($__internal_9163be45424089e73d17811ebeadfa4d4b858fbb2a5c2f05028e02081813f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9163be45424089e73d17811ebeadfa4d4b858fbb2a5c2f05028e02081813f5f5->leave($__internal_9163be45424089e73d17811ebeadfa4d4b858fbb2a5c2f05028e02081813f5f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a68d20ecb7f87701ce5602e87d840e032f79aa33950b35fd1ca2d5c58193a8f = $this->env->getExtension("native_profiler");
        $__internal_2a68d20ecb7f87701ce5602e87d840e032f79aa33950b35fd1ca2d5c58193a8f->enter($__internal_2a68d20ecb7f87701ce5602e87d840e032f79aa33950b35fd1ca2d5c58193a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a68d20ecb7f87701ce5602e87d840e032f79aa33950b35fd1ca2d5c58193a8f->leave($__internal_2a68d20ecb7f87701ce5602e87d840e032f79aa33950b35fd1ca2d5c58193a8f_prof);

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
