<?php

/* EventIUTSalonsBundle:Salons:voirSalons.html.twig */
class __TwigTemplate_d984bbf15709a3edbbb65ff848cc5a6a2994fd493d6e5a526ac5478c32c58031 extends Twig_Template
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
        $__internal_8dc9eb0271962a37fe3df1fd019506942d3c395511ca4b9fa7445cf975b9eee3 = $this->env->getExtension("native_profiler");
        $__internal_8dc9eb0271962a37fe3df1fd019506942d3c395511ca4b9fa7445cf975b9eee3->enter($__internal_8dc9eb0271962a37fe3df1fd019506942d3c395511ca4b9fa7445cf975b9eee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventIUTSalonsBundle:Salons:voirSalons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc9eb0271962a37fe3df1fd019506942d3c395511ca4b9fa7445cf975b9eee3->leave($__internal_8dc9eb0271962a37fe3df1fd019506942d3c395511ca4b9fa7445cf975b9eee3_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_2e9c995aefab341b8bd99baef8a5690877c56fe4ecc80b8926349576bd4036a4 = $this->env->getExtension("native_profiler");
        $__internal_2e9c995aefab341b8bd99baef8a5690877c56fe4ecc80b8926349576bd4036a4->enter($__internal_2e9c995aefab341b8bd99baef8a5690877c56fe4ecc80b8926349576bd4036a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " 
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t    <div class=\"panel-heading\">
\t\t\t\t\t\t\t        <h4 class=\"panel-title\"><center><h2>Studyrama <button type=\"submit\" class=\"glyphicon glyphicon-plus\"></button></h2></center></h4>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t</div>
";
        
        $__internal_2e9c995aefab341b8bd99baef8a5690877c56fe4ecc80b8926349576bd4036a4->leave($__internal_2e9c995aefab341b8bd99baef8a5690877c56fe4ecc80b8926349576bd4036a4_prof);

    }

    // line 9
    public function block_contenuCentral($context, array $blocks = array())
    {
        $__internal_9d3ee1a352f0f24c14e1a280bf6720958e2a824a96b7fb60b2254f1f587dc42c = $this->env->getExtension("native_profiler");
        $__internal_9d3ee1a352f0f24c14e1a280bf6720958e2a824a96b7fb60b2254f1f587dc42c->enter($__internal_9d3ee1a352f0f24c14e1a280bf6720958e2a824a96b7fb60b2254f1f587dc42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuCentral"));

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
        
        $__internal_9d3ee1a352f0f24c14e1a280bf6720958e2a824a96b7fb60b2254f1f587dc42c->leave($__internal_9d3ee1a352f0f24c14e1a280bf6720958e2a824a96b7fb60b2254f1f587dc42c_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_456ac059d72487e3d4d113649d8cbc86ffda449becda4ad7954cc53c82897eb0 = $this->env->getExtension("native_profiler");
        $__internal_456ac059d72487e3d4d113649d8cbc86ffda449becda4ad7954cc53c82897eb0->enter($__internal_456ac059d72487e3d4d113649d8cbc86ffda449becda4ad7954cc53c82897eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_456ac059d72487e3d4d113649d8cbc86ffda449becda4ad7954cc53c82897eb0->leave($__internal_456ac059d72487e3d4d113649d8cbc86ffda449becda4ad7954cc53c82897eb0_prof);

    }

    // line 39
    public function block_contenu1($context, array $blocks = array())
    {
        $__internal_afba6e01a494a442dbb454c2d6b524443b1c564c7305ca49530bb02bf470161f = $this->env->getExtension("native_profiler");
        $__internal_afba6e01a494a442dbb454c2d6b524443b1c564c7305ca49530bb02bf470161f->enter($__internal_afba6e01a494a442dbb454c2d6b524443b1c564c7305ca49530bb02bf470161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu1"));

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
        
        $__internal_afba6e01a494a442dbb454c2d6b524443b1c564c7305ca49530bb02bf470161f->leave($__internal_afba6e01a494a442dbb454c2d6b524443b1c564c7305ca49530bb02bf470161f_prof);

    }

    // line 57
    public function block_contenu2($context, array $blocks = array())
    {
        $__internal_a2f5e2ba7f006b3b94a5fbc4293bddf100d2a4d1f51cef8ca3a9ebf0779c6e92 = $this->env->getExtension("native_profiler");
        $__internal_a2f5e2ba7f006b3b94a5fbc4293bddf100d2a4d1f51cef8ca3a9ebf0779c6e92->enter($__internal_a2f5e2ba7f006b3b94a5fbc4293bddf100d2a4d1f51cef8ca3a9ebf0779c6e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu2"));

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
        
        $__internal_a2f5e2ba7f006b3b94a5fbc4293bddf100d2a4d1f51cef8ca3a9ebf0779c6e92->leave($__internal_a2f5e2ba7f006b3b94a5fbc4293bddf100d2a4d1f51cef8ca3a9ebf0779c6e92_prof);

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
