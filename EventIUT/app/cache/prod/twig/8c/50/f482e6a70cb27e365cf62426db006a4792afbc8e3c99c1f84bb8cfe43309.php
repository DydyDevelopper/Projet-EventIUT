<?php

/* ::vueMere.html.twig */
class __TwigTemplate_8c50f482e6a70cb27e365cf62426db006a4792afbc8e3c99c1f84bb8cfe43309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'menu' => array($this, 'block_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chapeau.png"), "html", null, true);
        echo "\" />
\t\t <title>
\t\t    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t    </title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
<body>

\t
\t\t\t<div class=\"container\">
\t\t\t\t<!-- LIGNE 1 -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t\t<center> <h1><span class=\"glyphicon glyphicon-education\" aria-hidden=\"true\"></span> EventIUT</h1> </center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t<form class=\"form-signin\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"identifiant\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus>
\t\t\t\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\"></label>
\t\t\t\t\t\t\t<input type=\"password\" id=\"motPasse\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
\t\t\t\t\t\t  </form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- LIGNE 2 --> 
                <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
        // line 38
        $this->displayBlock('contenuCentral', $context, $blocks);
        echo "     
                </div>
                </div>\t\t\t

\t\t\t\t
\t\t\t\t<!-- LIGNE 3 -->\t\t\t\t      \t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
                ";
        // line 46
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>\t\t\t\t
\t\t\t\t
\t\t\t\t<br><br><br>
\t\t\t\t
\t\t\t\t
\t\t<!-- LIGNE 4 -->
\t\t<div class=\"row\">
\t\t    <div class=\"col-sm-12>
            ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "\t\t    </div>
\t\t</div>
    </div>
\t\t<script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "EventIUT ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 38
    public function block_contenuCentral($context, array $blocks = array())
    {
        echo " ";
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "            <footer>
\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<strong><img src=";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo " width=\"25\" height=\"40\" hlt=\"Logo de l'IUT de Bayonne\"/> Réalisation par Antoine ARNAUDIN, Thibault LARZABAL, Dylan SEZAT, Hugo URANGA </strong>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div> 
\t\t\t\t\t</footer>
\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::vueMere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  143 => 57,  140 => 56,  134 => 46,  128 => 38,  123 => 11,  117 => 9,  109 => 75,  105 => 74,  100 => 71,  98 => 56,  87 => 47,  85 => 46,  74 => 38,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  34 => 7,  30 => 6,  24 => 2,);
    }
}
