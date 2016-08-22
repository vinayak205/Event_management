<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_79841c7f1e77188ea38a4ee0be4238c3bc51ac45b0649435c065b47845e9a556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d3fc933122943c0baaaf862ff34efd4eb6ec53cccf8bb07c24f255090c372de = $this->env->getExtension("native_profiler");
        $__internal_7d3fc933122943c0baaaf862ff34efd4eb6ec53cccf8bb07c24f255090c372de->enter($__internal_7d3fc933122943c0baaaf862ff34efd4eb6ec53cccf8bb07c24f255090c372de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7d3fc933122943c0baaaf862ff34efd4eb6ec53cccf8bb07c24f255090c372de->leave($__internal_7d3fc933122943c0baaaf862ff34efd4eb6ec53cccf8bb07c24f255090c372de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
