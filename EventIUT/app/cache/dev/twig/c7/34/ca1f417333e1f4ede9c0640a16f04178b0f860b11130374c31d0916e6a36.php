<?php

/* EventIUTSalonsBundle:Salons:voirSalons.html.twig */
class __TwigTemplate_c734ca1f417333e1f4ede9c0640a16f04178b0f860b11130374c31d0916e6a36 extends Twig_Template
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
        $__internal_0ee235b98e395b091da115822620f5ecd67ad2cfeef305ad642fdab4173cfdbc = $this->env->getExtension("native_profiler");
        $__internal_0ee235b98e395b091da115822620f5ecd67ad2cfeef305ad642fdab4173cfdbc->enter($__internal_0ee235b98e395b091da115822620f5ecd67ad2cfeef305ad642fdab4173cfdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventIUTSalonsBundle:Salons:voirSalons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee235b98e395b091da115822620f5ecd67ad2cfeef305ad642fdab4173cfdbc->leave($__internal_0ee235b98e395b091da115822620f5ecd67ad2cfeef305ad642fdab4173cfdbc_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5d9d7ba26398235392d0407bcf434543bca52934161152efeb5be5f634c937ff = $this->env->getExtension("native_profiler");
        $__internal_5d9d7ba26398235392d0407bcf434543bca52934161152efeb5be5f634c937ff->enter($__internal_5d9d7ba26398235392d0407bcf434543bca52934161152efeb5be5f634c937ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " 
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t        <h4 class=\"panel-title\"><center><h2>Studyrama <button type=\"submit\" class=\"glyphicon glyphicon-plus\"></button></h2></center></h4>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>
";
        
        $__internal_5d9d7ba26398235392d0407bcf434543bca52934161152efeb5be5f634c937ff->leave($__internal_5d9d7ba26398235392d0407bcf434543bca52934161152efeb5be5f634c937ff_prof);

    }

    // line 9
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_3e4727266dcbd6addad4772789a420176a6b1d61117516f04163c4c77ab9d83d = $this->env->getExtension("native_profiler");
        $__internal_3e4727266dcbd6addad4772789a420176a6b1d61117516f04163c4c77ab9d83d->enter($__internal_3e4727266dcbd6addad4772789a420176a6b1d61117516f04163c4c77ab9d83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
        
        $__internal_3e4727266dcbd6addad4772789a420176a6b1d61117516f04163c4c77ab9d83d->leave($__internal_3e4727266dcbd6addad4772789a420176a6b1d61117516f04163c4c77ab9d83d_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_410cf428ad9f1c65ce85c3a584ba24aa5e6f5449d0e8b2e997736ff8480e1a0c = $this->env->getExtension("native_profiler");
        $__internal_410cf428ad9f1c65ce85c3a584ba24aa5e6f5449d0e8b2e997736ff8480e1a0c->enter($__internal_410cf428ad9f1c65ce85c3a584ba24aa5e6f5449d0e8b2e997736ff8480e1a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_410cf428ad9f1c65ce85c3a584ba24aa5e6f5449d0e8b2e997736ff8480e1a0c->leave($__internal_410cf428ad9f1c65ce85c3a584ba24aa5e6f5449d0e8b2e997736ff8480e1a0c_prof);

    }

    // line 39
    public function block_contenu1($context, array $blocks = array())
    {
        $__internal_1de00da18b82d28bb0c3905c7d4a1d92d0c13d328e065f90b0908720e26c1811 = $this->env->getExtension("native_profiler");
        $__internal_1de00da18b82d28bb0c3905c7d4a1d92d0c13d328e065f90b0908720e26c1811->enter($__internal_1de00da18b82d28bb0c3905c7d4a1d92d0c13d328e065f90b0908720e26c1811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu1"));

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
        
        $__internal_1de00da18b82d28bb0c3905c7d4a1d92d0c13d328e065f90b0908720e26c1811->leave($__internal_1de00da18b82d28bb0c3905c7d4a1d92d0c13d328e065f90b0908720e26c1811_prof);

    }

    // line 57
    public function block_contenu2($context, array $blocks = array())
    {
        $__internal_cc508c11eb2556ad6a3eed9f1dad78a42d73c24dbfa93327b1ee6fdfd6d97557 = $this->env->getExtension("native_profiler");
        $__internal_cc508c11eb2556ad6a3eed9f1dad78a42d73c24dbfa93327b1ee6fdfd6d97557->enter($__internal_cc508c11eb2556ad6a3eed9f1dad78a42d73c24dbfa93327b1ee6fdfd6d97557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu2"));

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
        
        $__internal_cc508c11eb2556ad6a3eed9f1dad78a42d73c24dbfa93327b1ee6fdfd6d97557->leave($__internal_cc508c11eb2556ad6a3eed9f1dad78a42d73c24dbfa93327b1ee6fdfd6d97557_prof);

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
