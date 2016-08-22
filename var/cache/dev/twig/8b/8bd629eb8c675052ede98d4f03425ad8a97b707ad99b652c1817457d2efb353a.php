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
        $__internal_59879ee657ee013fc539f28cb631a673d88e9c1057ad7b7e85df98e4be2af905 = $this->env->getExtension("native_profiler");
        $__internal_59879ee657ee013fc539f28cb631a673d88e9c1057ad7b7e85df98e4be2af905->enter($__internal_59879ee657ee013fc539f28cb631a673d88e9c1057ad7b7e85df98e4be2af905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59879ee657ee013fc539f28cb631a673d88e9c1057ad7b7e85df98e4be2af905->leave($__internal_59879ee657ee013fc539f28cb631a673d88e9c1057ad7b7e85df98e4be2af905_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7384ff1230ff195722edead34216e7796b76ecb0367ce6fc03f4df520d20a8c = $this->env->getExtension("native_profiler");
        $__internal_e7384ff1230ff195722edead34216e7796b76ecb0367ce6fc03f4df520d20a8c->enter($__internal_e7384ff1230ff195722edead34216e7796b76ecb0367ce6fc03f4df520d20a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e7384ff1230ff195722edead34216e7796b76ecb0367ce6fc03f4df520d20a8c->leave($__internal_e7384ff1230ff195722edead34216e7796b76ecb0367ce6fc03f4df520d20a8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eb058a0c823b5cf905ce3bb4fe6128a3f3c6d822cb949f0d780afaaa6037bc9 = $this->env->getExtension("native_profiler");
        $__internal_1eb058a0c823b5cf905ce3bb4fe6128a3f3c6d822cb949f0d780afaaa6037bc9->enter($__internal_1eb058a0c823b5cf905ce3bb4fe6128a3f3c6d822cb949f0d780afaaa6037bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1eb058a0c823b5cf905ce3bb4fe6128a3f3c6d822cb949f0d780afaaa6037bc9->leave($__internal_1eb058a0c823b5cf905ce3bb4fe6128a3f3c6d822cb949f0d780afaaa6037bc9_prof);

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
