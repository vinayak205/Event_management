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
        $__internal_9f8f1129172418497ae4049a84d20c84fc68acb247f820eb09e321524ea7a9e3 = $this->env->getExtension("native_profiler");
        $__internal_9f8f1129172418497ae4049a84d20c84fc68acb247f820eb09e321524ea7a9e3->enter($__internal_9f8f1129172418497ae4049a84d20c84fc68acb247f820eb09e321524ea7a9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f8f1129172418497ae4049a84d20c84fc68acb247f820eb09e321524ea7a9e3->leave($__internal_9f8f1129172418497ae4049a84d20c84fc68acb247f820eb09e321524ea7a9e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adc151996551f4e930888a38c9265f8bc39419820b0482e613582ce974a4f1fc = $this->env->getExtension("native_profiler");
        $__internal_adc151996551f4e930888a38c9265f8bc39419820b0482e613582ce974a4f1fc->enter($__internal_adc151996551f4e930888a38c9265f8bc39419820b0482e613582ce974a4f1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_adc151996551f4e930888a38c9265f8bc39419820b0482e613582ce974a4f1fc->leave($__internal_adc151996551f4e930888a38c9265f8bc39419820b0482e613582ce974a4f1fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a6ba18e342966452246790f557b1f029a97ed37f2c22f2b162bf7a9fabb361d = $this->env->getExtension("native_profiler");
        $__internal_0a6ba18e342966452246790f557b1f029a97ed37f2c22f2b162bf7a9fabb361d->enter($__internal_0a6ba18e342966452246790f557b1f029a97ed37f2c22f2b162bf7a9fabb361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a6ba18e342966452246790f557b1f029a97ed37f2c22f2b162bf7a9fabb361d->leave($__internal_0a6ba18e342966452246790f557b1f029a97ed37f2c22f2b162bf7a9fabb361d_prof);

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
