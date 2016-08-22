<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ca391e82a7474b510af077881507765b8d6a3a3b4706ca86b017b817cc5699ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b27d7cc8bfbdc8373336b76d21f057db9c8edb3b8c8ea9301902c07cbe07dbe0 = $this->env->getExtension("native_profiler");
        $__internal_b27d7cc8bfbdc8373336b76d21f057db9c8edb3b8c8ea9301902c07cbe07dbe0->enter($__internal_b27d7cc8bfbdc8373336b76d21f057db9c8edb3b8c8ea9301902c07cbe07dbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b27d7cc8bfbdc8373336b76d21f057db9c8edb3b8c8ea9301902c07cbe07dbe0->leave($__internal_b27d7cc8bfbdc8373336b76d21f057db9c8edb3b8c8ea9301902c07cbe07dbe0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_219841eb45c632daff658c0ca40e78023a302440168044b66d778a61320b1854 = $this->env->getExtension("native_profiler");
        $__internal_219841eb45c632daff658c0ca40e78023a302440168044b66d778a61320b1854->enter($__internal_219841eb45c632daff658c0ca40e78023a302440168044b66d778a61320b1854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_219841eb45c632daff658c0ca40e78023a302440168044b66d778a61320b1854->leave($__internal_219841eb45c632daff658c0ca40e78023a302440168044b66d778a61320b1854_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30af4304ac1b8c8bb6802e9391ff5d893777561adfc360a7fac7ca3d5075111 = $this->env->getExtension("native_profiler");
        $__internal_e30af4304ac1b8c8bb6802e9391ff5d893777561adfc360a7fac7ca3d5075111->enter($__internal_e30af4304ac1b8c8bb6802e9391ff5d893777561adfc360a7fac7ca3d5075111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e30af4304ac1b8c8bb6802e9391ff5d893777561adfc360a7fac7ca3d5075111->leave($__internal_e30af4304ac1b8c8bb6802e9391ff5d893777561adfc360a7fac7ca3d5075111_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
