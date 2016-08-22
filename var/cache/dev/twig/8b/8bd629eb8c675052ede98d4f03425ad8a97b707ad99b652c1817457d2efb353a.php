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
        $__internal_0f2a303204604728e29c7f505acc9bbb8a1aa7ae08e3d56a08ae007b4a1d49d6 = $this->env->getExtension("native_profiler");
        $__internal_0f2a303204604728e29c7f505acc9bbb8a1aa7ae08e3d56a08ae007b4a1d49d6->enter($__internal_0f2a303204604728e29c7f505acc9bbb8a1aa7ae08e3d56a08ae007b4a1d49d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f2a303204604728e29c7f505acc9bbb8a1aa7ae08e3d56a08ae007b4a1d49d6->leave($__internal_0f2a303204604728e29c7f505acc9bbb8a1aa7ae08e3d56a08ae007b4a1d49d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b0c05adda41b513ab30b8ad60061b49820a9ad0564adf75d7fa0de6d8ed8358 = $this->env->getExtension("native_profiler");
        $__internal_5b0c05adda41b513ab30b8ad60061b49820a9ad0564adf75d7fa0de6d8ed8358->enter($__internal_5b0c05adda41b513ab30b8ad60061b49820a9ad0564adf75d7fa0de6d8ed8358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b0c05adda41b513ab30b8ad60061b49820a9ad0564adf75d7fa0de6d8ed8358->leave($__internal_5b0c05adda41b513ab30b8ad60061b49820a9ad0564adf75d7fa0de6d8ed8358_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa799957a2cc1f6af784ba91a4b6813267cc606095ec3f83da2774a41219a849 = $this->env->getExtension("native_profiler");
        $__internal_fa799957a2cc1f6af784ba91a4b6813267cc606095ec3f83da2774a41219a849->enter($__internal_fa799957a2cc1f6af784ba91a4b6813267cc606095ec3f83da2774a41219a849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa799957a2cc1f6af784ba91a4b6813267cc606095ec3f83da2774a41219a849->leave($__internal_fa799957a2cc1f6af784ba91a4b6813267cc606095ec3f83da2774a41219a849_prof);

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
