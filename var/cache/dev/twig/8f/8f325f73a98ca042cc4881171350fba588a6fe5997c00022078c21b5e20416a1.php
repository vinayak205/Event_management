<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5220be38f2bb0a7bb9de30eda7e131ee526525b14927ef0ff0ac0ff0785439bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce5aaf2c5d00332486dbfad4cf7cb0e2f2c50adbfb54fd90feec58cde300439a = $this->env->getExtension("native_profiler");
        $__internal_ce5aaf2c5d00332486dbfad4cf7cb0e2f2c50adbfb54fd90feec58cde300439a->enter($__internal_ce5aaf2c5d00332486dbfad4cf7cb0e2f2c50adbfb54fd90feec58cde300439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5aaf2c5d00332486dbfad4cf7cb0e2f2c50adbfb54fd90feec58cde300439a->leave($__internal_ce5aaf2c5d00332486dbfad4cf7cb0e2f2c50adbfb54fd90feec58cde300439a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79d3e3c25e1eaa75ec6b621f737cbb117d0844aba0494b61a01a4f6a8a8149c8 = $this->env->getExtension("native_profiler");
        $__internal_79d3e3c25e1eaa75ec6b621f737cbb117d0844aba0494b61a01a4f6a8a8149c8->enter($__internal_79d3e3c25e1eaa75ec6b621f737cbb117d0844aba0494b61a01a4f6a8a8149c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_79d3e3c25e1eaa75ec6b621f737cbb117d0844aba0494b61a01a4f6a8a8149c8->leave($__internal_79d3e3c25e1eaa75ec6b621f737cbb117d0844aba0494b61a01a4f6a8a8149c8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1405d77b44d7b3c5fd20ffe4c105925a3d612140b9f18ea5e12c36e3b3bd4cc = $this->env->getExtension("native_profiler");
        $__internal_d1405d77b44d7b3c5fd20ffe4c105925a3d612140b9f18ea5e12c36e3b3bd4cc->enter($__internal_d1405d77b44d7b3c5fd20ffe4c105925a3d612140b9f18ea5e12c36e3b3bd4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d1405d77b44d7b3c5fd20ffe4c105925a3d612140b9f18ea5e12c36e3b3bd4cc->leave($__internal_d1405d77b44d7b3c5fd20ffe4c105925a3d612140b9f18ea5e12c36e3b3bd4cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3cadc5681fd3e94ba6f577a89614a318f9bee512a91596d905b17419dc251ad = $this->env->getExtension("native_profiler");
        $__internal_c3cadc5681fd3e94ba6f577a89614a318f9bee512a91596d905b17419dc251ad->enter($__internal_c3cadc5681fd3e94ba6f577a89614a318f9bee512a91596d905b17419dc251ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c3cadc5681fd3e94ba6f577a89614a318f9bee512a91596d905b17419dc251ad->leave($__internal_c3cadc5681fd3e94ba6f577a89614a318f9bee512a91596d905b17419dc251ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
