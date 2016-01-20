<?php

/* EventIUTSalonsBundle:Salons:voirSalons.html.twig */
class __TwigTemplate_108ad928b5da959548e0ce055da234ec65de2fde1e84dcfb02008342d169f254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::vueMere.html.twig", "EventIUTSalonsBundle:Salons:voirSalons.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'contenuCentral' => array($this, 'block_contenuCentral'),
            'menu' => array($this, 'block_menu'),
            'contenu1' => array($this, 'block_contenu1'),
            'contenu2' => array($this, 'block_contenu2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::vueMere.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4161e73c7635a668b8413d067e67752ac4d3a9e329b2521a858d15469cade2ec = $this->env->getExtension("native_profiler");
        $__internal_4161e73c7635a668b8413d067e67752ac4d3a9e329b2521a858d15469cade2ec->enter($__internal_4161e73c7635a668b8413d067e67752ac4d3a9e329b2521a858d15469cade2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventIUTSalonsBundle:Salons:voirSalons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4161e73c7635a668b8413d067e67752ac4d3a9e329b2521a858d15469cade2ec->leave($__internal_4161e73c7635a668b8413d067e67752ac4d3a9e329b2521a858d15469cade2ec_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5613834372f0294095948c8c07f7ec2112b05c108d6e7bd48ba0f1f9d140186b = $this->env->getExtension("native_profiler");
        $__internal_5613834372f0294095948c8c07f7ec2112b05c108d6e7bd48ba0f1f9d140186b->enter($__internal_5613834372f0294095948c8c07f7ec2112b05c108d6e7bd48ba0f1f9d140186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " 
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t        <h4 class=\"panel-title\"><center><h2>Studyrama <button type=\"submit\" class=\"glyphicon glyphicon-plus\"></button></h2></center></h4>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>
";
        
        $__internal_5613834372f0294095948c8c07f7ec2112b05c108d6e7bd48ba0f1f9d140186b->leave($__internal_5613834372f0294095948c8c07f7ec2112b05c108d6e7bd48ba0f1f9d140186b_prof);

    }

    // line 9
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_c72bb35b186c1c5af29179e2991d088989009466aa3a1c3c08b3e879ded08fa9 = $this->env->getExtension("native_profiler");
        $__internal_c72bb35b186c1c5af29179e2991d088989009466aa3a1c3c08b3e879ded08fa9->enter($__internal_c72bb35b186c1c5af29179e2991d088989009466aa3a1c3c08b3e879ded08fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

        echo " 
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  <div class=\"panel-heading\"><center>Informations Participants</center></div>
\t\t\t\t\t\t\t\t\t  <div class=\"panel-body\"><center>
\t\t\t\t\t\t\t\t\t  <u>Nombre d'inscrits :</u> 5 <br>
\t\t\t\t\t\t\t\t\t  <u>Liste des participants :</u><br>
\t\t\t\t\t\t\t\t\t  Antoine ARNAUDIN, Thibault LARZABAL, Dylan SEZAT, Hugo URANGA</center>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
";
        
        $__internal_c72bb35b186c1c5af29179e2991d088989009466aa3a1c3c08b3e879ded08fa9->leave($__internal_c72bb35b186c1c5af29179e2991d088989009466aa3a1c3c08b3e879ded08fa9_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_108839390ae31964e1ad7399e0c2936bd25823190af29ea927458c48975d4d0f = $this->env->getExtension("native_profiler");
        $__internal_108839390ae31964e1ad7399e0c2936bd25823190af29ea927458c48975d4d0f->enter($__internal_108839390ae31964e1ad7399e0c2936bd25823190af29ea927458c48975d4d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " 
\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs nav-justified\" id=\"myTab\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#justifmenu1\">Informations</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#justifmenu2\">Plan d'acces</a></li>
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#justifmenu3\">Pieces jointes</a></li>\t\t\t
\t\t\t\t\t\t\t\t<li><a data-toggle=\"tab\" href=\"#justifmenu4\">Bilan</a></li>\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t  <div id=\"justifmenu1\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
";
        
        $__internal_108839390ae31964e1ad7399e0c2936bd25823190af29ea927458c48975d4d0f->leave($__internal_108839390ae31964e1ad7399e0c2936bd25823190af29ea927458c48975d4d0f_prof);

    }

    // line 39
    public function block_contenu1($context, array $blocks = array())
    {
        $__internal_a82cb89f629dabb60a05d5f16af2176ab3efcf4d1df8129f898539cf5c3f5671 = $this->env->getExtension("native_profiler");
        $__internal_a82cb89f629dabb60a05d5f16af2176ab3efcf4d1df8129f898539cf5c3f5671->enter($__internal_a82cb89f629dabb60a05d5f16af2176ab3efcf4d1df8129f898539cf5c3f5671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu1"));

        echo " 
<div class=\"panel panel-primary\">
<div class=\"panel-heading\"><center>Pratiques</center></div><center>
<h4><strong>Date debut :</strong>19 Decembre 2016</h4>
<h4><strong>Date fin :</strong>19 Decembre 2016</h4>
<br>
<h4><strong>Adresse :</strong>19 Decembre 2016</h4>
<h4><strong>Complements :</strong>11 Allee de Glain</h4>
<h4><strong>Ville :</strong>Bayonne</h4>
<h4><strong> CP: </strong> 64100</h4>
<br>
<h4><strong>Horaire :</strong>8h00-17h00</h4>
</center>
</div>
";
        
        $__internal_a82cb89f629dabb60a05d5f16af2176ab3efcf4d1df8129f898539cf5c3f5671->leave($__internal_a82cb89f629dabb60a05d5f16af2176ab3efcf4d1df8129f898539cf5c3f5671_prof);

    }

    // line 57
    public function block_contenu2($context, array $blocks = array())
    {
        $__internal_51035f9a977b0fb8a28ac0bbb799de2b708070298e4de2f7f165240531afba5e = $this->env->getExtension("native_profiler");
        $__internal_51035f9a977b0fb8a28ac0bbb799de2b708070298e4de2f7f165240531afba5e->enter($__internal_51035f9a977b0fb8a28ac0bbb799de2b708070298e4de2f7f165240531afba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu2"));

        echo " 
<div class=\"panel panel-primary\">
<div class=\"panel-heading\"><center>Description du Salon</center></div><center>
<br>
<p align=\"justify\">Le 9eme salon Studyrama des Etudes superieures de Bayonne est le rendez-vous a ne pas manquer pour trouver sa formation de Bac a Bac +5 et reussir son orientation. Que vous soyez en Terminale et a la recherche d une formation superieure, ou etudiant(e) et en quete d une reorientation ou d une specialisation, ce salon est fait pour vous. 
Le 16 janvier a la Maison des Associations, vous trouverez toutes les informations necessaires pour en savoir plus sur les cursus et formations qui existent et pour bien preparer vos etudes superieures, et decouvrirez les secteurs et les metiers qui ont la cote.
</p>
</center>
<br>
</div>
";
        
        $__internal_51035f9a977b0fb8a28ac0bbb799de2b708070298e4de2f7f165240531afba5e->leave($__internal_51035f9a977b0fb8a28ac0bbb799de2b708070298e4de2f7f165240531afba5e_prof);

    }

    public function getTemplateName()
    {
        return "EventIUTSalonsBundle:Salons:voirSalons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  105 => 39,  79 => 21,  56 => 9,  38 => 2,  11 => 1,);
    }
}
