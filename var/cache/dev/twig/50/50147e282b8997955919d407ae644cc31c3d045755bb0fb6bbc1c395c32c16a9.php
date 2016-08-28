<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_370e00fb4b59ae982f123efd010b6f5d00a70036e659cb96d176ea1a34ee14c4 extends Twig_Template
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
        $__internal_c70d9fd0838711f880a7db261dfdcf79ae8b8e47fbbcd3ed67c8379c9bbed4ef = $this->env->getExtension("native_profiler");
        $__internal_c70d9fd0838711f880a7db261dfdcf79ae8b8e47fbbcd3ed67c8379c9bbed4ef->enter($__internal_c70d9fd0838711f880a7db261dfdcf79ae8b8e47fbbcd3ed67c8379c9bbed4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c70d9fd0838711f880a7db261dfdcf79ae8b8e47fbbcd3ed67c8379c9bbed4ef->leave($__internal_c70d9fd0838711f880a7db261dfdcf79ae8b8e47fbbcd3ed67c8379c9bbed4ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
