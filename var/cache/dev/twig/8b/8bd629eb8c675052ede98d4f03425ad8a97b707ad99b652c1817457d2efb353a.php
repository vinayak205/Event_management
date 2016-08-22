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
        $__internal_cf2f183dfe0669e260cb67c2eb05370f769073ffbb8e5cfec1e9469a28e79e8c = $this->env->getExtension("native_profiler");
        $__internal_cf2f183dfe0669e260cb67c2eb05370f769073ffbb8e5cfec1e9469a28e79e8c->enter($__internal_cf2f183dfe0669e260cb67c2eb05370f769073ffbb8e5cfec1e9469a28e79e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf2f183dfe0669e260cb67c2eb05370f769073ffbb8e5cfec1e9469a28e79e8c->leave($__internal_cf2f183dfe0669e260cb67c2eb05370f769073ffbb8e5cfec1e9469a28e79e8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01d51baf6686e1770967d75b9d02f1bc705bde7974787a67bf765ad2c9513610 = $this->env->getExtension("native_profiler");
        $__internal_01d51baf6686e1770967d75b9d02f1bc705bde7974787a67bf765ad2c9513610->enter($__internal_01d51baf6686e1770967d75b9d02f1bc705bde7974787a67bf765ad2c9513610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_01d51baf6686e1770967d75b9d02f1bc705bde7974787a67bf765ad2c9513610->leave($__internal_01d51baf6686e1770967d75b9d02f1bc705bde7974787a67bf765ad2c9513610_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddae1fe64f045e48e08bcf71c686cbeb4634e0fa86d4798ce57c1d1556042bd9 = $this->env->getExtension("native_profiler");
        $__internal_ddae1fe64f045e48e08bcf71c686cbeb4634e0fa86d4798ce57c1d1556042bd9->enter($__internal_ddae1fe64f045e48e08bcf71c686cbeb4634e0fa86d4798ce57c1d1556042bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddae1fe64f045e48e08bcf71c686cbeb4634e0fa86d4798ce57c1d1556042bd9->leave($__internal_ddae1fe64f045e48e08bcf71c686cbeb4634e0fa86d4798ce57c1d1556042bd9_prof);

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
