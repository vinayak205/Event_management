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
        $__internal_9111369df81e9590aa26439571e22acb3c8158eacb8231a3e551edb00cc8e67d = $this->env->getExtension("native_profiler");
        $__internal_9111369df81e9590aa26439571e22acb3c8158eacb8231a3e551edb00cc8e67d->enter($__internal_9111369df81e9590aa26439571e22acb3c8158eacb8231a3e551edb00cc8e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9111369df81e9590aa26439571e22acb3c8158eacb8231a3e551edb00cc8e67d->leave($__internal_9111369df81e9590aa26439571e22acb3c8158eacb8231a3e551edb00cc8e67d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10d2a4290837cf68e9b080cf4472d5c7d2a1bb8bf2810d53ebc0dd8c00339868 = $this->env->getExtension("native_profiler");
        $__internal_10d2a4290837cf68e9b080cf4472d5c7d2a1bb8bf2810d53ebc0dd8c00339868->enter($__internal_10d2a4290837cf68e9b080cf4472d5c7d2a1bb8bf2810d53ebc0dd8c00339868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10d2a4290837cf68e9b080cf4472d5c7d2a1bb8bf2810d53ebc0dd8c00339868->leave($__internal_10d2a4290837cf68e9b080cf4472d5c7d2a1bb8bf2810d53ebc0dd8c00339868_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_514ccc93b63983140d13d645e0df91deb10ff5a2af9feefcac28aed3be085508 = $this->env->getExtension("native_profiler");
        $__internal_514ccc93b63983140d13d645e0df91deb10ff5a2af9feefcac28aed3be085508->enter($__internal_514ccc93b63983140d13d645e0df91deb10ff5a2af9feefcac28aed3be085508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_514ccc93b63983140d13d645e0df91deb10ff5a2af9feefcac28aed3be085508->leave($__internal_514ccc93b63983140d13d645e0df91deb10ff5a2af9feefcac28aed3be085508_prof);

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
