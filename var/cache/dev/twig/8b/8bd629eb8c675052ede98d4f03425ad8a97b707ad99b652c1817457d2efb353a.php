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
        $__internal_f1904a8d2b8f6c9987403e2d1faf395b13f6251a9cb8a6e81cd45bfe70430015 = $this->env->getExtension("native_profiler");
        $__internal_f1904a8d2b8f6c9987403e2d1faf395b13f6251a9cb8a6e81cd45bfe70430015->enter($__internal_f1904a8d2b8f6c9987403e2d1faf395b13f6251a9cb8a6e81cd45bfe70430015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1904a8d2b8f6c9987403e2d1faf395b13f6251a9cb8a6e81cd45bfe70430015->leave($__internal_f1904a8d2b8f6c9987403e2d1faf395b13f6251a9cb8a6e81cd45bfe70430015_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a3c44fa82c34a2f07572ed51d06d3543db168c7ff2f5939cc11c5bcc5ad5d14 = $this->env->getExtension("native_profiler");
        $__internal_7a3c44fa82c34a2f07572ed51d06d3543db168c7ff2f5939cc11c5bcc5ad5d14->enter($__internal_7a3c44fa82c34a2f07572ed51d06d3543db168c7ff2f5939cc11c5bcc5ad5d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a3c44fa82c34a2f07572ed51d06d3543db168c7ff2f5939cc11c5bcc5ad5d14->leave($__internal_7a3c44fa82c34a2f07572ed51d06d3543db168c7ff2f5939cc11c5bcc5ad5d14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_196fce2b3332e9e1f9c4ff7fbd3859588d6386fdb0c60634e23e40c8203032b7 = $this->env->getExtension("native_profiler");
        $__internal_196fce2b3332e9e1f9c4ff7fbd3859588d6386fdb0c60634e23e40c8203032b7->enter($__internal_196fce2b3332e9e1f9c4ff7fbd3859588d6386fdb0c60634e23e40c8203032b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_196fce2b3332e9e1f9c4ff7fbd3859588d6386fdb0c60634e23e40c8203032b7->leave($__internal_196fce2b3332e9e1f9c4ff7fbd3859588d6386fdb0c60634e23e40c8203032b7_prof);

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
