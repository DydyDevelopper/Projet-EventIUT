<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_847586be66c0d799e1854de9019db719218900e4a1bcadf85ffd2543d62bb81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbecd4747830e35f1e0445a5b1d9d5fcd8f1065f3f76778b698a2e542197ea7e = $this->env->getExtension("native_profiler");
        $__internal_fbecd4747830e35f1e0445a5b1d9d5fcd8f1065f3f76778b698a2e542197ea7e->enter($__internal_fbecd4747830e35f1e0445a5b1d9d5fcd8f1065f3f76778b698a2e542197ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbecd4747830e35f1e0445a5b1d9d5fcd8f1065f3f76778b698a2e542197ea7e->leave($__internal_fbecd4747830e35f1e0445a5b1d9d5fcd8f1065f3f76778b698a2e542197ea7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9ce7bc944f235b26a10003f46025cc2ff1a9bb3234e7c1afa575e9f73df3a4d = $this->env->getExtension("native_profiler");
        $__internal_e9ce7bc944f235b26a10003f46025cc2ff1a9bb3234e7c1afa575e9f73df3a4d->enter($__internal_e9ce7bc944f235b26a10003f46025cc2ff1a9bb3234e7c1afa575e9f73df3a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e9ce7bc944f235b26a10003f46025cc2ff1a9bb3234e7c1afa575e9f73df3a4d->leave($__internal_e9ce7bc944f235b26a10003f46025cc2ff1a9bb3234e7c1afa575e9f73df3a4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3024c1001cf655a496a58c4591d91de7b6744308f0fc361d517cf51a664f28c1 = $this->env->getExtension("native_profiler");
        $__internal_3024c1001cf655a496a58c4591d91de7b6744308f0fc361d517cf51a664f28c1->enter($__internal_3024c1001cf655a496a58c4591d91de7b6744308f0fc361d517cf51a664f28c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3024c1001cf655a496a58c4591d91de7b6744308f0fc361d517cf51a664f28c1->leave($__internal_3024c1001cf655a496a58c4591d91de7b6744308f0fc361d517cf51a664f28c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29254d990c93dcb1b9806ad5c1de27aa1257962c55d946bdf322ec4b425f0902 = $this->env->getExtension("native_profiler");
        $__internal_29254d990c93dcb1b9806ad5c1de27aa1257962c55d946bdf322ec4b425f0902->enter($__internal_29254d990c93dcb1b9806ad5c1de27aa1257962c55d946bdf322ec4b425f0902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_29254d990c93dcb1b9806ad5c1de27aa1257962c55d946bdf322ec4b425f0902->leave($__internal_29254d990c93dcb1b9806ad5c1de27aa1257962c55d946bdf322ec4b425f0902_prof);

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
