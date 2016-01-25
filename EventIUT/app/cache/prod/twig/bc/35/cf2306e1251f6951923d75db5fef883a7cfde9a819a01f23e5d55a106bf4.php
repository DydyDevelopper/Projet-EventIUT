<?php

/* EventIUTSalonsBundle:Salons:index.html.twig */
class __TwigTemplate_bc35cf2306e1251f6951923d75db5fef883a7cfde9a819a01f23e5d55a106bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "EventIUTSalonsBundle:Salons:index.html.twig", 1);
        $this->blocks = array(
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenuCentral($context, array $blocks = array())
    {
        echo " 
<center>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    <div class=\"input-group input-group-md icon-addon\">
                                        <input type=\"text\" placeholder=\"Recherche par nom de salon\" name=\"\" id=\"schbox\" class=\"form-control\">
                                        <i class=\"icon icon-search\"></i>
                                        <span class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-inverse\">Rechercher</button>
                                        </span>
                                    </div>
                                </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>
";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        echo " 
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t
\t\t\t\t\t<ul class=\"nav nav-tabs nav-justified\" id=\"myTab\">
\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#justifmenu1\">Salons à venir</a></li>
\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#justifmenu2\">Salons passés</a></li>\t\t\t
\t
\t\t\t\t\t\t<div id=\"justifmenu1\" class=\"tab-pane fade\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><strong>Nom</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Date de début</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Date de fin</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Lieu</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Horaire</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Fin d'inscription</strong></td>
\t\t\t\t\t\t\t\t<td><strong>Inscrits</strong></td>
\t\t\t\t\t\t\t\t<td><strong>En attente</strong></td>\t
\t\t\t\t\t\t\t\t<td><strong></strong></td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Studyrama</td>
\t\t\t\t\t\t\t\t<td>19 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>19 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>Bayonne</td>
\t\t\t\t\t\t\t\t<td>8h00-17h00</td>
\t\t\t\t\t\t\t\t<td>12 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t<td>0</td>\t
\t\t\t\t\t\t\t\t<td><a href=\"http://iparla.iutbayonne.univ-pau.fr/~tlarzabal/EventIUT/web/app_dev.php/voirSalons\" > <button type=\"submit\" class=\"glyphicon glyphicon-chevron-right\" ></button></a></td>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>InfoSup</td>
\t\t\t\t\t\t\t\t<td>21 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>21 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>Mont de Marsan</td>
\t\t\t\t\t\t\t\t<td>10h00-19h00</td>
\t\t\t\t\t\t\t\t<td>14 Décembre 2015</td>
\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t<td>3</td>\t
\t\t\t\t\t\t\t\t<td><a href=\"http://iparla.iutbayonne.univ-pau.fr/~tlarzabal/EventIUT/web/app_dev.php/voirSalons\" > <button type=\"submit\" class=\"glyphicon glyphicon-chevron-right\" ></button></a></td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"justifmenu1\" class=\"tab-pane fade\">
\t\t\t\t\t\t</div>
\t\t\t\t</table>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "EventIUTSalonsBundle:Salons:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  29 => 2,  11 => 1,);
    }
}
