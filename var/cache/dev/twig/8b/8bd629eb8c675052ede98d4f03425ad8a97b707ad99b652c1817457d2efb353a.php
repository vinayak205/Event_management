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
        $__internal_618e3c853dec7e107f9c5c5763088a699eb81dc482df63bc6da3cfc3abc58764 = $this->env->getExtension("native_profiler");
        $__internal_618e3c853dec7e107f9c5c5763088a699eb81dc482df63bc6da3cfc3abc58764->enter($__internal_618e3c853dec7e107f9c5c5763088a699eb81dc482df63bc6da3cfc3abc58764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618e3c853dec7e107f9c5c5763088a699eb81dc482df63bc6da3cfc3abc58764->leave($__internal_618e3c853dec7e107f9c5c5763088a699eb81dc482df63bc6da3cfc3abc58764_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f09464a637fa17fd5266757c5d1f6cefb3c476ac41e1e97d844c148b0e71c20 = $this->env->getExtension("native_profiler");
        $__internal_1f09464a637fa17fd5266757c5d1f6cefb3c476ac41e1e97d844c148b0e71c20->enter($__internal_1f09464a637fa17fd5266757c5d1f6cefb3c476ac41e1e97d844c148b0e71c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1f09464a637fa17fd5266757c5d1f6cefb3c476ac41e1e97d844c148b0e71c20->leave($__internal_1f09464a637fa17fd5266757c5d1f6cefb3c476ac41e1e97d844c148b0e71c20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4532bd0d5128bf62a48379b2f6e68ce4b33b89d5f6ffe719f16c122af05f71be = $this->env->getExtension("native_profiler");
        $__internal_4532bd0d5128bf62a48379b2f6e68ce4b33b89d5f6ffe719f16c122af05f71be->enter($__internal_4532bd0d5128bf62a48379b2f6e68ce4b33b89d5f6ffe719f16c122af05f71be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4532bd0d5128bf62a48379b2f6e68ce4b33b89d5f6ffe719f16c122af05f71be->leave($__internal_4532bd0d5128bf62a48379b2f6e68ce4b33b89d5f6ffe719f16c122af05f71be_prof);

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
