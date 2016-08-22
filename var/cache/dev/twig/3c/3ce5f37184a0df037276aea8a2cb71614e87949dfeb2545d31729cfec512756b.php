<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d4932353683a67dae2129f4bfc226a8ea37cb26a58be57f1b59835f4e2724560 extends Twig_Template
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
        $__internal_461524a14e05962c2a70b8c6566547796147f6fe1b6b954eb3937f4d5699481e = $this->env->getExtension("native_profiler");
        $__internal_461524a14e05962c2a70b8c6566547796147f6fe1b6b954eb3937f4d5699481e->enter($__internal_461524a14e05962c2a70b8c6566547796147f6fe1b6b954eb3937f4d5699481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_461524a14e05962c2a70b8c6566547796147f6fe1b6b954eb3937f4d5699481e->leave($__internal_461524a14e05962c2a70b8c6566547796147f6fe1b6b954eb3937f4d5699481e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
