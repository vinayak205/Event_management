<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_79af3cae712b52d6f3c5d635481938f1fde73f9b18fbf7934a8d6b7ce864088c extends Twig_Template
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
        $__internal_6edee183b381faa6c0efe1a0cabd0dbccfe1e3a8e983aece901305765d62a6d0 = $this->env->getExtension("native_profiler");
        $__internal_6edee183b381faa6c0efe1a0cabd0dbccfe1e3a8e983aece901305765d62a6d0->enter($__internal_6edee183b381faa6c0efe1a0cabd0dbccfe1e3a8e983aece901305765d62a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6edee183b381faa6c0efe1a0cabd0dbccfe1e3a8e983aece901305765d62a6d0->leave($__internal_6edee183b381faa6c0efe1a0cabd0dbccfe1e3a8e983aece901305765d62a6d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
