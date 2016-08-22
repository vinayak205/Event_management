<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4a9e7ab9a2e8373875f940399b8aaeec35ace584a3d85048d4e154a3be414791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2da72ab66eabaa1a3348ca784e5c604b5c910e2dfac8e53a0d69e7cc293039f5 = $this->env->getExtension("native_profiler");
        $__internal_2da72ab66eabaa1a3348ca784e5c604b5c910e2dfac8e53a0d69e7cc293039f5->enter($__internal_2da72ab66eabaa1a3348ca784e5c604b5c910e2dfac8e53a0d69e7cc293039f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da72ab66eabaa1a3348ca784e5c604b5c910e2dfac8e53a0d69e7cc293039f5->leave($__internal_2da72ab66eabaa1a3348ca784e5c604b5c910e2dfac8e53a0d69e7cc293039f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ad1251e3aae674add3a694c20021c3080fbb4e574bf507437bde8c3d044e5a = $this->env->getExtension("native_profiler");
        $__internal_f9ad1251e3aae674add3a694c20021c3080fbb4e574bf507437bde8c3d044e5a->enter($__internal_f9ad1251e3aae674add3a694c20021c3080fbb4e574bf507437bde8c3d044e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9ad1251e3aae674add3a694c20021c3080fbb4e574bf507437bde8c3d044e5a->leave($__internal_f9ad1251e3aae674add3a694c20021c3080fbb4e574bf507437bde8c3d044e5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b778001d216c7ac79c81f157c673b661a71db611c25a7d8e11886dd4879caff9 = $this->env->getExtension("native_profiler");
        $__internal_b778001d216c7ac79c81f157c673b661a71db611c25a7d8e11886dd4879caff9->enter($__internal_b778001d216c7ac79c81f157c673b661a71db611c25a7d8e11886dd4879caff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b778001d216c7ac79c81f157c673b661a71db611c25a7d8e11886dd4879caff9->leave($__internal_b778001d216c7ac79c81f157c673b661a71db611c25a7d8e11886dd4879caff9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1e04c2566325c8c4a9a7b11c9ed05ff9cae6bd12cab92d0d7bf2752d0694106 = $this->env->getExtension("native_profiler");
        $__internal_b1e04c2566325c8c4a9a7b11c9ed05ff9cae6bd12cab92d0d7bf2752d0694106->enter($__internal_b1e04c2566325c8c4a9a7b11c9ed05ff9cae6bd12cab92d0d7bf2752d0694106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b1e04c2566325c8c4a9a7b11c9ed05ff9cae6bd12cab92d0d7bf2752d0694106->leave($__internal_b1e04c2566325c8c4a9a7b11c9ed05ff9cae6bd12cab92d0d7bf2752d0694106_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
