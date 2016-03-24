<?php

require_once "back/lang.php";

//
// ------------------------------------ DICTIONNAIRE FRANCAIS ------------------------------------
//
$DICT_FR = new Dictionary('fr');
$DICT_FR->translate(StringIdentifier::SID_TITLE, "ETIC INSA Technologies");
$DICT_FR->translate(StringIdentifier::SID_HOME, "Accueil");
$DICT_FR->translate(StringIdentifier::SID_PRESTA, "Nos prestations");
$DICT_FR->translate(StringIdentifier::SID_ETUDE, "Déroulement d'une étude");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES, "Nos domaines de compétences");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENTS, "Nos engagements");
$DICT_FR->translate(StringIdentifier::SID_NOUS, "Nous découvrir");
$DICT_FR->translate(StringIdentifier::SID_EQUIPE, "Notre équipe");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES, "Nos partenaires");
$DICT_FR->translate(StringIdentifier::SID_EVENEMENTS, "Nos évènements");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE, "Références");
$DICT_FR->translate(StringIdentifier::SID_BLOG, "Blog");
$DICT_FR->translate(StringIdentifier::SID_PLAQUETTE, "Plaquette");
$DICT_FR->translate(StringIdentifier::SID_DEVIS, "Demander un devis");
$DICT_FR->translate(StringIdentifier::SID_LANG, "<i class=\"fr flag\"></i> Français");
$DICT_FR->translate(StringIdentifier::SID_MOUVEMENT, "Découvrir le mouvement");

/*FR_HOME*/
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_EXPERIENCE, "Années d'expérience");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_TOP, "Des meilleures Junior Entreprises");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_DOMAINES, "Domaines de compétences");
$DICT_FR->translate(StringIdentifier::SID_HOME_STAT_SATISFACTION, "De satisfaction client");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_1, "Semi finaliste prix d’excellence 2014 <br>
Lauréat du Challenge Junior Pérenne de 2013 <br>
Lauréat du Challenge Junior Engagée de 2013 <br>
Lauréat du Label Entrepreneur en 2013 <br>
Finaliste du Prix d’Excellence en 2012 et en 2013<br>
Semi Finaliste du prix d’excellence en 2007 ");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_2, "Finaliste du Label ingénieur en 2007 <br> 
Top 30 des JE de France depuis 2001 (sur 162) <br>
Finaliste du Label Communication 2004<br>
Top 12 des meilleures JE en 2004<br>
Finaliste du Label Ingénieur en 2001 et 2003<br>
Finaliste du Label Informatique en 1999");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_3, "Classement dans les 12 meilleures Junior Entreprises de France en 2004 (sur 120 Junior Entreprises)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Finaliste du Label Ingénieur en 2001 et 2003
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Finaliste du Label Informatique en 1999
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
Lauréat du Label Technique 1998");

$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS, "Nos offres et services");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_SUB, "De nombreux domaines d'ingénierie");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_P, "Grâce à une formation technique diversifiée et de qualité à l'INSA de Lyon, ETIC INSA Technologies est en mesure de vous offrir tout un panel de services. De l'informatique à la mécanique, en passant les télécommunications, l'électroniques, le génie civil et bien d'autres, découvrez nos 11 domaines de compétences.");
$DICT_FR->translate(StringIdentifier::SID_HOME_SKILLS_DET, "PLUS DE DETAILS");

$DICT_FR->translate(StringIdentifier::SID_HOME_TRUST, "ILS NOUS ONT FAIT CONFIANCE");
$DICT_FR->translate(StringIdentifier::SID_HOME_TEMOIGNAGE, "Témoignages");
$DICT_FR->translate(StringIdentifier::SID_HOME_TEMOIGNAGE_SUB, "Les retours de nos clients et partenaires nous intéressent");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_H1, "Palmarès");
$DICT_FR->translate(StringIdentifier::SID_HOME_PALMARES_SUB, "Une Junior-Entrepreprise performante sur la durée");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_1, "Votre demande");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_2, "Proposition commerciale");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_3, "Facture d'acompte");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_4, "Réalisation de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_5, "Avenant en cas de modification de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_6, "Remise du livrable");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_7, "Garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H2_8, "Questionnaire de satisfaction");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_1, "Un Projet ⇆ Un chargé d’affaire");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_2, "Cahier des Charges, budget et Échéancier");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_3, "60 % du prix de l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_4, "Des retours réguliers");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_5, "Adaptabilité");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_6, "Phase de recette + 3 mois de garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_7, "3 mois de garantie");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_H3_8, "Vos retours sont importants");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_1, "Avant l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_2, "Pendant l'étude");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_STEP_3, "Après l'étude");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_BULLSHIT_1, "Prise de contact afin d’analyser au mieux votre besoin et vous proposer la solution la plus adaptée.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_BULLSHIT_2, "L’ensemble de nos études fait l’objet d’un suivi régulier par le pôle qualité afin de s’assurer de la conformité et de la rigueur du travail effectué.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_BULLSHIT_3, "Le suivi post-réalisation de nos projets nous permet de nous assurer de la bonne prise en main des produits par nos clients.");

$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_1, "Demandez nous un devis via notre site, nous vous répondrons sous 24h. Une fois le premier contact effectué nous vous affecterons un chargé d’affaires, membre d’ETIC qui sera votre interlocuteur privilégié. Celui-ci sera également chargé de sélectionner, parmi les étudiants de l’INSA Lyon,  les intervenants les plus compétents qui seront amenés à réaliser la partie technique de votre projet. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_2, "Une fois les intervenants sélectionnés, une réunion sera organisée par le chargé d’affaires pour définir clairement votre besoin et vos spécifications. A la suite de cette réunion, le chargé d’affaire vous fera parvenir une proposition commerciale, document réunissant un cahier de charges détaillé, une méthodologie de réalisation, un budget approfondi ainsi qu’un échéancier. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_3, "Avant de commencer à réaliser le projet que vous nous confiez, nous vous demanderons de nous faire parvenir un paiement, par virement bancaire ou par chèque. Ceci nous permet de nous assurer de votre sérieux et d'avancer certains frais liés à la réalisation du projet. Si pour une raison quelconque vous souhaitiez arrêter la réalisation de l'étude avant son terme, une partie du paiement reçu pourra vous être restitué si nous n'avons pas commencé une des phases qu'il permettait de financer.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_4, "Dès le commencement de l’étude jusqu’à son terme, le chargé d’affaire vous fera des comptes-rendus hebdomadaires sur l’avancée du projet. Il veillera également au bon déroulement de l’étude en assurant un contact permanent avec les intervenants. ");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_5, "S'il est nécessaire de modifier les termes de la mission, que ce soit en terme de délais, tarification ou de prestation à réaliser, nous conviendrons ensemble des modifications à apporter à la proposition commerciale.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_6, "Dès le moment où l’étude est terminée, nous vous fournissons le livrable commandé ainsi que la documentation associée. Vous disposerez alors d’une période de tests du livrable. Si les tests ne s’avéraient pas concluant et que le livrable ne coïncidait pas parfaitement à vos attentes, ETIC s’engage à y apporter les corrections nécessaires afin que le livrable corresponde au mieux à vos attentes.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_7, "Lorsque l’étude est terminée, nous vous assurons jusqu’à 3 mois de garantie pour chaque livrable. Cette durée vous permet de nous faire tous les retours que vous souhaitez, dans l'éventuel cas où celui-ci ne coïnciderait pas parfaitement avec le cahier de charges concordé.");
$DICT_FR->translate(StringIdentifier::SID_ETUDE_P_8, "Une fois la mission réalisée, nous vous demandons de répondre à un Questionnaire de satisfaction. Celui-ci a pour but d'améliorer en permanence la qualité de nos services.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_IF, "Informatique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GM, "Mécanique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GCU, "Génie civil et urbanisme");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GEN, "Energie et environnement");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GE, "Génie électrique");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_SGM, "Matériaux");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_TC, "Télécommunications");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_GI, "Production");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_BS, "Biosciences");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_TR, "Traduction");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_H2_SC, "Sciences de l'entreprise");


$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_IF, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une des meilleures formations dans ce domaine
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une très grande expérience dans la Junior : 40% de notre chiffre d'affaire
    </div>
  </div>
</div><div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département recouvrant une multitude de technologies informatiques
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GM, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Trois départements spécialisés en mécanique
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans les procédés de plasturgie
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GEN, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Accès aux laboratoires de l'INSA pour faire des expériences
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Grande expérience dans les tests d'émission
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_TC, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisés dans les télécommunications
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GCU, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans le Génie Civile et l'urbanisme
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une des meilleures formations dans ce domaine
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants suivant un double cursus Architecture en plus de la formation INSA
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_SGM, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans les matériaux
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Recherche très importante dans ce domaine à l'INSA Lyon
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GE, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Plus grosse étude réalisé en 2012
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Un département spécialisé dans ce domaine
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_GI, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans le Lean Management
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_BS, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants spécialisés dans la modélisation des phénomènes biologiques
    </div>
  </div>
</div>");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_TR, "<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Une école ouverte sur l'international
    </div>
  </div>
</div>
<div class=\"ui visible green icon message\">
  <i class=\"plus icon\"></i>
  <div class=\"content\">
    <div class=\"header\">
      Des intervenants de nationalités variées
    </div>
  </div>
</div>");


$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_PLUS_SC, "");




$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_IF, "<i class=\"small checkmark icon\"></i>
Réalisation de site de e-commerce, un forum ou des applications Android ou iOS (iPhone / iPad) .</br>
<i class=\"small checkmark icon\"></i>
Création de logiciels et obtention de macros.</br>
<i class=\"small checkmark icon\"></i>
Uniformisation de documents informatiques.</br>
<i class=\"small checkmark icon\"></i>
Aide pour une meilleure gestion de vos bases de données.</br>
<i class=\"small checkmark icon\"></i>
Mise en place d’un système de référencement sur votre site.</br>
<i class=\"small checkmark icon\"></i>
Réalisation d’audit de vos systèmes d’information.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GM, "<i class=\"small checkmark icon\"></i>
Conception de nouveaux produits ou développement d’un nouveau moteur.</br>
<i class=\"small checkmark icon\"></i>
Modélisation de transmissions ou réalisation d’une modélisation CAO de votre produit.</br>
<i class=\"small checkmark icon\"></i>
Réalisation du dessin de votre piste d’essai.</br>
<i class=\"small checkmark icon\"></i>
Etude des contraintes mécaniques de votre système.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GCU, "<i class=\"small checkmark icon\"></i>
Conseils et avis pour la rehausse d’un pont.</br>
<i class=\"small checkmark icon\"></i>
Conception d’aménagements pour votre entreprise.</br>
<i class=\"small checkmark icon\"></i>
Examination de la faisabilité de votre future construction.</br>
<i class=\"small checkmark icon\"></i>
Effectuation de test sur des matériaux de construction.</br>
<i class=\"small checkmark icon\"></i>
Aide pour remettre aux normes.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GEN, "<i class=\"small checkmark icon\"></i>
Réalisation d’appareils de mesures ou prototype de votre dernière invention.</br>
<i class=\"small checkmark icon\"></i>
Réalisation de bilan carbone.</br>
<i class=\"small checkmark icon\"></i>
Estimation de votre émission de gaz à effets de serre.</br>
<i class=\"small checkmark icon\"></i>
Amélioration de l’efficacité énergétique de vos bâtiments.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GE, "<i class=\"small checkmark icon\"></i>
Réalisation d’un réseau intelligent.</br>
<i class=\"small checkmark icon\"></i>
Réalisation de tests sur des composants électroniques.</br>
<i class=\"small checkmark icon\"></i>
Réalisation d’une simulation électronique ou multiphysique.</br>
<i class=\"small checkmark icon\"></i>
Réalisation d’un poste de commande centralisé.</br>
<i class=\"small checkmark icon\"></i>
Conception et programmation d’un système embarqué.</br>
<i class=\"small checkmark icon\"></i>
Test d’un composant électronique en environnement contraignant.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_SGM, "<i class=\"small checkmark icon\"></i>
Test d’un matériau dans des conditions spécifiques.</br>
<i class=\"small checkmark icon\"></i>
Etude du recyclage de vos matériaux ou optimisation des matériaux que vous utilisez.</br>
<i class=\"small checkmark icon\"></i>
Aide pour le choix de votre nouvelle machine.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_TC, "<i class=\"small checkmark icon\"></i>
Besoin d’une expertise technique concernant les protocoles de communication.</br>
<i class=\"small checkmark icon\"></i>
Réalisation d’un audit de votre réseau informatique.</br>
<i class=\"small checkmark icon\"></i>
Réalisation de traitement du signal ou de l’image.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_GI, "<i class=\"small checkmark icon\"></i>
Automatisation de votre production.</br>
<i class=\"small checkmark icon\"></i>
Création de nouveaux programmes sur vos machines.</br>
<i class=\"small checkmark icon\"></i>
Optimisation de votre entreprise et notamment de parties peu performantes.</br>
<i class=\"small checkmark icon\"></i>
Etude pour comprendre la source de vos pertes ou pour améliorer la qualité de vos produits en examinant vos processus.</br>
<i class=\"small checkmark icon\"></i>
Mise en place d’un ERP (Enterprise Resource Planning) ou d’un MES (Manufacturing Execution System) dans votre entreprise.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_BS, "<i class=\"small checkmark icon\"></i>
Modélisation du développement d’une nouvelle bactérie.</br>
<i class=\"small checkmark icon\"></i>
Réalisation de tests chimiques sur vos propres molécules.</br>
<i class=\"small checkmark icon\"></i>
Etude de l’impact de vos produits dans un environnement particulier.</br>
<i class=\"small checkmark icon\"></i>
Réalisation d’une modélisation statistique du développement de cellules.</br>");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_TR, "<i class=\"small checkmark icon\"></i>
Traduction de documents techniques.</br>
<i class=\"small checkmark icon\"></i>
Traduction d’un site web.</br>
<i class=\"small checkmark icon\"></i>
Traduction d’une application.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P_SC, "<i class=\"small checkmark icon\"></i>
Analyse financière de votre entreprise.</br>
<i class=\"small checkmark icon\"></i>
Etude et amélioration de votre stratégie d’entreprise.</br>
<i class=\"small checkmark icon\"></i>
Aide à l’organisation de votre entreprise.</br>
<i class=\"small checkmark icon\"></i>
Aide à la création ou à la reprise de votre entreprise.</br>
<i class=\"small checkmark icon\"></i>
Etude de la qualité de vos services/produits.</br>
<i class=\"small checkmark icon\"></i>
Etude de marché.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_IF, "+ L’INSA Lyon, une des meilleures formations dans ce domaine.</br>
+ Une très grande expérience au niveau de la Junior: plus de 40% de notre chiffre d’affaire.</br>
+ Un département recouvrant une multitude de technologies informatiques.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GM, "+ 2 départements spécialisés en mécanique.</br>
+ Des intervenants spécialisés dans les procédés de plasturgie.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GCU, "+ Intervenants suivant un cursus Architecture en parallèle du cursus Génie Civil et Urbanisme en vue d’obtenir un double diplôme.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GEN, "+ Accès aux laboratoires de l’INSA Lyon.</br>
+ Grande expérience dans les tests d’émission.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GE, "+ Un département spécialisé dans l’électronique, l’électrotechnique, l’automatisation, l’informatique industrielle et les télécommunications.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_SGM, "+ Un département spécialisé dans le domaine des matériaux.</br>
+ Accès aux laboratoires de l’INSA Lyon.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_TC, "+ Un département spécialisé en télécommunications.
+ Un département à la pointe de la nouvelle technologie.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_GI, "+ Des intervenants spécialisés dans le Lean Management.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_BS, "+ Des intervenants spécialisés dans la modélisation des phénomènes biologiques.</br>
+ Accès aux laboratoires de l’INSA Lyon.");
$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_P2_TR, "+Une école ouverte sur l’international.</br>
+ Un panel de plus de 10 langues.");

$DICT_FR->translate(StringIdentifier::SID_COMPETENCES_MORE, "En savoir plus...");


$DICT_FR->translate(StringIdentifier::SID_MOUVEMENT_P, "Une Junior-Entreprise est une association loi 1901, gérée par des étudiants d’Ecole ou d’Université française.
A vocation pédagogique, elle réalise des prestations de service dans ses domaines de compétences auprès de ses clients. Plus de 170 structures sont regroupées au sein de la Confédération Nationale des Juniors-Entreprises (CNJE).
<br><br>
ETIC INSA Technologies est la Junior-Entreprise de l’INSA Lyon.
Créée en 1981, elle se positionne comme l’une des meilleures Junior-Entreprises de France. La mission d’ETIC INSA Technologies consiste à réaliser des études répondant aux attentes du client (caractéristiques techniques), délais, coûts à travers une méthodologie contrôlée et un dialogue continu avec le client. ");

$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_1, "Ils nous ont fait confiance");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_2, "Des institutions");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_3, "Des petites structures");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_4, "Témoignages");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_1, "« Notre travail avec ETIC INSA Technologies a été très fructueux. Les compétences techniques et humaines des intervenants nous ont permis d’avancer rapidement sur le projet électronique que nous leur avions soumis. J’ai particulièrement apprécié leur réactivité et leur motivation.Les résultats obtenus nous permettent d’affirmer que nous ferons de nouveau appel à ETIC INSA si le besoin apparaît sur un futur projet. » <b>Faustine Vanhulle – Innovation Group – ElcoBrandt</b>");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_2, "« ETIC apporte une véritable valeur ajoutée au projet. Les équipes d’étudiants sont surprenantes de professionnalisme, de créativité et de rigueur. Nous avons avancé ensemble, dans un contexte complexe et des délais limités. Le courage et la solidarité ont été des valeurs communicatives et déterminantes pour la réussite de ce programme ambitieux. En effet, en plus des compétences techniques et de gestion de projet qui caractérisent l’INSA, ETIC dispose d’excellents commerciaux ! Depuis cette expérience, je les recommande régulièrement. » <b>Barbara Coudène</b>");
$DICT_FR->translate(StringIdentifier::SID_CONFIANCE_QUOTE_3, "« Non seulement porteur du progrès technique, l’ingénieur doit de plus en plus être créateur de valeur. Il doit pouvoir imaginer la société de demain. Pour accompagner cette évolution, il devient important de le sensibiliser très tôt à une culture d’innovation et un esprit d’entreprendre. ETIC INSA Technologies, la junior entreprise de l’INSA de Lyon, est une des vitrines de cette volonté. Nous sommes fiers de soutenir chaque année ces jeunes talents qui délivrent toutes leurs compétences aux professionnels qui parient sur l’innovation et le dynamisme. Depuis sa création en 1981, ETIC INSA Technologies ne cesse de se développer et de se distinguer. C’est aujourd’hui l’une des 4 meilleures Junior-Entreprises de France. Donner le goût et les outils pour entreprendre, telle est l’ambition de l’INSA de Lyon, qui accompagne ses élèves vers une nouvelle génération d’ingénieur, capable de construire notre société future. » <b>Eric Maurincomme, Directeur de l’INSA de Lyon</b>");

$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_1, "Nos partenaires premium");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_2, "Les partenaires premium CNJE");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_3, "Nos partenariats Junior-Entreprises en France");
$DICT_FR->translate(StringIdentifier::SID_PARTENAIRES_4, "Nos partenariats Junior-Entreprises à l'étranger");

$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H1, "Notre politique qualité");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_1, "ETIC INSA Technologies tient à fournir des services de qualité à ses clients afin de leur assurer la réalisation des missions confiées dans les délais impartis et le respect du cahier des charges. Et ce, en offrant à ses membres, élèves ingénieurs INSA, une structure performante qui leur permette d’apprendre et de se confronter aux réelles exigences du monde professionnel, le tout dans un climat de confiance mutuelle.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_2, "Pour cela, et depuis maintenant plus de 30 ans, ETIC INSA Technologies est soutenue et contrôlée par la CNJE (Confédération Nationale des Juniors Entreprises). Une fois par an, la Junior Entreprise est auditée sur ses processus, le suivi des études et la gestion de la trésorerie. La réussite de cet audit est la condition sine qua non au maintien de la marque Junior Entreprise. De plus, ETIC s’engage aujourd’hui dans une démarche de certification ISO 9001 : 2008 ce qui lui permet une accentuation de l’écoute client.");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_1,"Cette démarche s'articule autour de trois grands axes :");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_H2_2,"Pour cela, elle s'appuie sur une organisation :");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_3,"Ecoute continue et personnalisée du client");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_4,"Garantie des compétences de nos intervenants");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_5,"Maîtrise du livrable au coeur de nos préoccupations");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_6,"Traitement de la sollicitation sous 24h");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_7,"Une phase d’analyse validée par le client");
$DICT_FR->translate(StringIdentifier::SID_ENGAGEMENT_P_8,"Un binôme chargé d’affaire/correspondant qualité sur chaque étude");

$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_H1,"Le mot du président");
$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_P,"Fort de 35 ans d’expérience, nous accompagnons les entreprises dans leurs projets en proposant une vision jeune, dynamique et innovante. Toujours à la pointe des dernières technologies grâce à une formation technique de qualité à l’INSA de Lyon, nos intervenants apportent à vos projets une forte valeur ajoutée.");
$DICT_FR->translate(StringIdentifier::SID_PRESIDENT_SIGN,"Martin Delbecque, président 2016-2017");
$DICT_FR->translate(StringIdentifier::SID_BUREAU,"Le bureau");
$DICT_FR->translate(StringIdentifier::SID_CA,"Le conseil d'administration");
$DICT_FR->translate(StringIdentifier::SID_EQUIPES,"Nos équipes");

$DICT_FR->translate(StringIdentifier::SID_DSI,"DSI");
$DICT_FR->translate(StringIdentifier::SID_QUALITE,"Qualité");
$DICT_FR->translate(StringIdentifier::SID_UA,"Unité d'Affaire");
$DICT_FR->translate(StringIdentifier::SID_GRC,"Relation Client");
$DICT_FR->translate(StringIdentifier::SID_COM,"Communication");

$DICT_FR->translate(StringIdentifier::SID_DESC_DSI,"Système d'information");
$DICT_FR->translate(StringIdentifier::SID_DESC_QUALITE,"Suivi et amélioration continus");
$DICT_FR->translate(StringIdentifier::SID_DESC_UA,"Vente et réalisation de mission");
$DICT_FR->translate(StringIdentifier::SID_DESC_GRC,"Prise de contact avec le client");
$DICT_FR->translate(StringIdentifier::SID_DESC_COM,"Evénements et cohésion d'équipe");

$DICT_FR->translate(StringIdentifier::SID_CRP,"Congrès Régional de Printemps");
$DICT_FR->translate(StringIdentifier::SID_CRA,"Congrès Régional d'Automne");
$DICT_FR->translate(StringIdentifier::SID_CNE,"Congrès National d'Été");
$DICT_FR->translate(StringIdentifier::SID_CNH,"Congrès National d'Hiver");
$DICT_FR->translate(StringIdentifier::SID_JDP,"Journée du Développement Personnel");
$DICT_FR->translate(StringIdentifier::SID_TEDX,"TEDxINSA");

$DICT_FR->translate(StringIdentifier::SID_CRP_SUB,"Organisé par la CNJE");
$DICT_FR->translate(StringIdentifier::SID_CRA_SUB,"Organisé par la CNJE");
$DICT_FR->translate(StringIdentifier::SID_CNE_SUB,"Organisé par la CNJE");
$DICT_FR->translate(StringIdentifier::SID_CNH_SUB,"Organisé par la CNJE");
$DICT_FR->translate(StringIdentifier::SID_JDP_SUB,"Organisé par Etic");
$DICT_FR->translate(StringIdentifier::SID_TEDX_SUB,"Organisé par Etic");

$DICT_FR->translate(StringIdentifier::SID_CRP_P,"Congrès Régional de Printemps");
$DICT_FR->translate(StringIdentifier::SID_CRA_P,"Congrès Régional d'Automne");
$DICT_FR->translate(StringIdentifier::SID_CNE_P,"Congrès National d'Été");
$DICT_FR->translate(StringIdentifier::SID_CNH_P,"Congrès National d'Hiver");
$DICT_FR->translate(StringIdentifier::SID_JDP_P,"Destinée aux étudiants de l'INSA de Lyon, la Journée du Développement Personnel leur permet d'assister à des formations réalisées par des intervenants invités pour l'occasion. Ces formations, complémentaires à celles de l'école, mettent l'accent sur la personnalité plutôt que sur les compétences techniques de l'ingénieur.");
$DICT_FR->translate(StringIdentifier::SID_TEDX_P,"TEDxINSA");

$DICT_FR->translate(StringIdentifier::SID_DEVIS_LASTNAME, "Nom");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_FIRSTNAME, "Prénom");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_FIRM, "Société");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_MAIL, "Email");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PHONE, "Téléphone");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_SUBJECT, "Sujet");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_MESSAGE, "Message");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PLANNED_BUDGET, "Budget (à titre indicatif)");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_PLANNED_DURATION, "Durée (à titre indicatif)");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_CAPTCHA_CODE, "Saisir le texte de l'image ci-dessus");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_RESET, "Réinitialiser");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_SUBMIT, "Envoyer");
$DICT_FR->translate(StringIdentifier::SID_DEVIS_HEADER, "Formulaire devis");

$DICT_FR->translate(StringIdentifier::SID_FOOTER_DESCRIPTION, "Junior-Entreprise de l'INSA de Lyon");
$DICT_FR->translate(StringIdentifier::SID_FOOTER_RESEAUX, "Réseaux sociaux");
$DICT_FR->translate(StringIdentifier::SID_FOOTER_CONTACT, "Nous contacter");