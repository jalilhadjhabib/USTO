<!DOCTYPE html>
<html lang="en">
<head>
<title>FACULTÉ DES SCIENCES DE LA NATURE ET DE LA VIE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/home.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/carousel_boostrap.css">
<link rel="shortcut icon" href="images/snv_logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="top">
  <a id="button"></a>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/snv_banner.jpg');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left"> 
        <ul class="nospace">
          <li><i class="fas fa-phone"></i>041 55 70 97</li>
          <li><i class="far fa-envelope"></i>webusto-mb@univ-usto.dz</li>
        </ul>
      </div>
      <div class="fl_right"> 
        <ul class="nospace">
          @if (Auth::guest())
          <li><a href="/"><i class="fas fa-home"></i></a></li>
          <li><a href="{{ url('/login_page') }}" title="Login">S'identifier</a></li>
          @else
                  <ul class="nospace">
                            <li><a href="/"><i class="fas fa-home"></i></a></li>
                            <li><a href="{{ url('/myaccount') }}"  role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a></li>

                           <li> <a href="{{ url('/logout') }}">Se déconnecter</a></li>
                            
                    @endif
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
          <a href="/"><img src="images/snv_logo.png" align=left style="width: 80px;"><h1 id="logo_name"></h1></a>
      </div>
      <br>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="/">Accueil</a></li>
          <li><a class="drop" href="#">Faculté</a>
            <ul>
              <li><a href="/motdudoyen">Mot du Doyen</a></li>
              <li><a class="drop" href="#">Présentation de la faculté</a>
                <ul>
                  <li><a href="#">Organigramme</a></li>
                  <li><a href="/infrastructures">Infrastructures</a></li>
                  
                </ul>
              </li>
              <li><a class="drop" href="#">Départements</a>
              <ul>
                  <li><a href="/enseignements-de-base-en-biologie">Enseignement de base en Biologie</a></li>
                  <li><a href="#">Biotechnologie</a></li>
                  <li><a href="#">Génétique Moleculaire Appliquée</a></li>
                  <li><a href="#">Vivant et Environnement  </a></li>
                </ul>
              </li>
              <li><a href="#">Conseil scientifique de la faculté</a></li>
              <li><a href="#">Bibliotèque</a></li>
              <li><a href="#">Appels d'offres  </a></li>
              <li><a href="#">Evénements</a></li>
            </ul>
          </li>


          <li><a class="drop" href="#">Graduation</a>
              <ul>
                  <li><a href="#">Emploi du temps</a></li>
                  <li><a href="#">Service scolarité</a></li>
                  <li><a href="#">Service de l'enseignement et de l'évaluation</a></li>
                  <li><a href="#">Service statistique</a></li>
                  <li><a href="#">Informations et Orientation</a></li>
                  <li><a class="drop" href="#">Laboratoire de préparation</a>
                <ul>
                  <li><a href="#">Présentation</a></li>
                  <li><a href="#">Lames préparées</a></li>
                  

                </ul>
              </li>
            </ul>
          </li>
          <li><a class="drop" href="#">Post-Graduation</a>
            <ul>
              <li><a href="#">Inscription en Doctorat</a></li>
              <li><a href="#">Soutenance Doctorat</a></li>
              <li><a href="#">Effectif post graduation</a></li>
              <li><a href="#">[Avis] post graduation</a></li>
                <li><a class="drop" href="#">Canevas PG</a> <ul> <li><a href="#">Soumission P.R.F.U</a>
                </li>  </ul>
                </li> 
              
              <li><a href="#">Catégorisation Des Revues DGRSDT</a></li>
              <li><a href="#">étudiants inscrits en Post-Graduation</a></li>
              <li><a href="#">PV du CSF</a></li>
              <li><a href="#">LES FORMATIONS DOCTORALES HABILITEES AU NIVEAU DE LA FACULTE </a></li>
           
            </ul>
          </li>
          <li><a class="drop" href="#">Recherche Scientifique</a>
            <ul>
              <li><a href="#">Laboratoires</a></li>
              <li><a href="#">Projet CNEPRU</a></li>
              <li><a href="#">Projet PRFU</a></li>
              <li><a class="drop" href="#">Conférences </a>
                <ul>
                  <li><a href="#">Conférence du 22/03/2018  Pr. ZEMANI.Faouzia</a></li>
                  <li><a href="#">Conférence du 15/03/2018  Pr. Boudjema Abdallah</a></li>
                  <li><a href="#">Conférence du 05/03/2018  Pr. TOUMI </a></li>
                  <li><a href="#">Conférence du 23/02/2017  Dr. A. BEKADA </a></li>
                  <li><a href="#">Conférence du 27/04/2017  Dr. Z.BOUCIF</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="drop" href="#">Habilitaion</a>
            <ul>
              <li><a href="#">Dossier candidature à l’Habilitation Canevas</a></li>
              <li><a href="#">Dossier d’inscription à l’Habilitation</a></li>
              <li><a href="#">Textes réglementaires Habilitation</a></li>
              <li><a href="#">Fiche de recevabilité de publication</a></li>
            </ul>
          </li>
        </ul>
        <br>
      </nav>
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 
    <article class="center">
      <h2 class="heading underline">FACULTÉ DES SCIENCES DE LA NATURE ET DE LA VIE</h3>
      <p>Université des Sciences et de la Technologie d'Oran</p>
      <p>Mohamed BOUDIAF</p>
      <footer><a class="btn" href="#">Présentation</a></footer>
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear"> 

    <!-- main body -->
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Actualités de la Faculté</h6>
    </div>
    <ul class="nospace group overview btmspace-80">
      <li class="one_quarterbis">
        <article><a href="#"><i class="fas fa-eraser"></i></a>
          <h6 class="heading"><a href="/formation">Formations</a></h6>
          <p>A REMPLIR&hellip;</p>
          <footer><a href="#">Plus de détails &raquo;</a></footer>
        </article>
      </li>
      <li class="one_quarterbis">
        <article><a href="#"><i class="fas fa-book"></i></a>
          <h6 class="heading"><a href="/note">Affichage des notes</a></h6>
          <p>A REMPLIR&hellip;</p>
          <footer><a href="#">Plus de détails &raquo;</a></footer>
        </article>
      </li>
      <li class="one_quarterbis">
        <article><a href="#"><i class="fas fa-calendar"></i></a>
          <h6 class="heading"><a href="/tasks">Planning des cours</a></h6>
          <p>A REMPLIR&hellip;</p>
          <footer><a href="#">Plus de détails &raquo;</a></footer>
        </article>
      </li>
      <li class="one_quarterbis">
        <article><a href="#"><i class="fas fa-laptop"></i></a>
          <h6 class="heading"><a href="/files">Cours en Ligne</a></h6>
          <p>A REMPLIR&hellip;</p>
          <footer><a href="#">Plus de détails &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">TROUVER UN TRUC</a></footer>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>




<div class="bgded overlay startlt light" style="background-image:url('images/snv_biblio.jpg');">
  <section id="segment" class="hoc clear"> 
    <div class="two_third">
      <h6 class="heading underline font-x2">Bibliothèque de la Faculté</h6>
      <p class="btmspace-50">La bibliothèque de la faculté des sciences de la nature et de la vie est située au niveau du bloc des sciences. Son public est constitué d'enseignants et étudiants : licence, master1, master2, doctorants.</p>
      <article><a href="#"></a>
        <footer class="center"><a class="btn" href="#">La Bibliothèque</a></footer>
      </article>
    </div>
  </section>
</div>
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">Actualité Des Départements</h6>
    </div>
    <ul class="nospace group figures latest btmspace-80">
      <li class="one_third first">
        <figure><img src="images/snv_biblio.jpg" alt="">
          <figcaption><a href="#">NEWS 1</a>
            <time><br><br></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/snv_biblio.jpg" alt="">
          <figcaption><a href="#">NEWS 2</a>
            <time><br><br></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/snv_biblio.jpg" alt="">
          <figcaption><a href="#">NEWS 3</a>
            <time><br><br></time>
          </figcaption>
        </figure>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">Plus d'Actualité</a></footer>
  </section>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="testimonials" class="hoc container clear"> 
    <div class="btmspace-80">
      <h6 class="heading underline font-x2">Infos Générales</h6>
      <h6 class="heading underline font-x2" style="position: relative;left: 180px;">Infos Étudiants</h6>
      <h6 class="heading underline font-x2" style="position: relative;left: 360px;">Archivage des événements</h6>
    </div>

    <ul class="nospace group btmspace-80">
      <li class="one_third first">
        <blockquote><h1><center>DOCTORAT  INSCRIPTION EN LIGNE   (OBLIGATOIRE ).</center></h1><br>

- Remplissez soigneusement vos fiches de renseignement: <br><br>

<p ><a style="color: yellow" href="#"> - Doctorat ( LMD ) </a>  <br><br>
<a style="color: yellow" href="#">- Doctorat ( Sciences) </a> <br><br></p>

- Soutenance Doctorat > <a href="#"> Documents à Télécharger</a> <br><br>

- Dossier à fournir pour l'attestation provisoire en Master M2 (1ère partie) ><a href="#"> Consulter le Dossier </a> <br><br>

- Quitus de la Bibliothèque <a href="#">(A Télécharger)</a> <br><br>

- Avis aux étudiants ayant des modules en dettes (Graduation):<br><br>

- Les étudiants sont informés que pour les modules non acquis:<br><br>
. L’examen est obligatoire.<br><br>

. La partie TD/TP :<br><br>

<ul> 
   <li>- La note >= 10 /20 (L’étudiant n’a pas le droit de refaire cette partie.</li><br>
   <li>- La note < 10 /20   (L’étudiant doit refaire cette partie).</li><br>
</ul>
Remarque : La note TD acquise est valable pour une année seulement.</blockquote>
      </li>






      <li class="one_third">
        <blockquote>
  <h1> <center>        COURS :</center><br>

 Cours Biologie Cellulaire  "Dr.Chaa" : Nouveau</h1>

Biologie Cellulaire ->Cytosquelette et motilité  <a href="#"> ICI</a>  <br>
Biologie Cellulaire ->Noyau interphasique  <a href="#"> ICI </a> <br>
Biologie Cellulaire ->Plastes  <a href="#"> ICI</a>  <br>
Biologie Cellulaire ->Peroxysomes-Mitochondries  <a href="#"> ICI </a> <br><br>

Biologie Cellulaire >Membrane plasmique <a href="#">  ICI </a> <br><br>

Biologie Cellulaire >R.E– Appareil de Golgi- Lysosmes <a href="#">  ICI </a> <br><br>

TDs de Mme TALHI M :<br><br>

Génétique des Procaryotes : Fiche TD N°01 à 04   <a href="#"> ICI </a> <br><br>

Dr CHAA.  L  (Cours en Ligne ) <br><br>

Biologie Cellulaire 01 -> Généralités (01)  <a href="#">  ICI </a> <br><br>

Biologie Cellulaire 02-> Généralités (02)    <a href="#"> ICI </a>  <br><br>

Cours de "Mme TALHI .M"   pour les étudiants en (L2) E.B.B<br><br>

Nutrition bactérienne > chapitre 4   en ligne<a href="#"> ICI</a> <br><br>  

Croissance bactérienne > chapitre 5  <a href="#">ICI </a>  <br><br>

Biologie végétale:  Dr CHAA. L<br><br>
 
Biologie végétale --> Biochimie Appliquée<br>
Biologie Végétale 02 -->  Méristème caulinaire<br>
Sont  en Ligne  ICI   <br><br>

Génétique  Cours 5,6,7,8 et 9  (L2) <br><br>

[ Pr Saidi-Ouahrani Nadjia ] Sont  en Ligne <a href="#">ICI</a><br><br>

Cours de Biochimie Appliquée pour L3 ANP<br><br>

[Dr. BOUHAFSOUN .A ]    est en  LigneICI<br><br>

ETUDIANTS ETRANGERS <a href="#">( INSCRIPTION En Ligne )</a> <br>
        </blockquote>          
      </li>





      <li class="one_third">
        <blockquote>
          <h1><center> Archivage des événements</h1></center><br>
<p style="font-style: italic;" >Année Universitaire 2019 - 2020 </p><br>

- Le 16 Février 2019   <a href="#">PRIMA InfoDay Algeria 2020  </a><br><br>  

- Le 25 Février 2019 <a href="#"> ISTA  - Séminaire destiné aux étudiants de l'institut des Sciences Techniques et Appliquées (I.S.T.A)</a><br>

<p style="font-style: italic;">Année Universitaire 2018 - 2019 </p> <br>

- Le 25 Novembre 2019 <a href="#"> Rencontre sur le Classement Times Higher Education World University </a><br>

- 12 et 13 juin 2019 <a href="#"> Le 2ème WORKSHOP DE BIOLOGIE MOLECULAIRE </a><br>

<p style="font-style: italic;">Année Universitaire 2017 - 2018</p> <br>

- Le 15  Mars 2018 <a href="#">Conférence du Pr.Boudjema Abdallah</a><br>

- Le 22  Mars 2018 <a href="#"> Conférence du Pr.Zemani Faouzia</a><br>

- Le 16  Avril 2018 <a href="#"> Convention USTO & le musée Ahmed Zabana </a><br>  

- Du 08 Au 12 Avril 2018  <a href="#">Conférence comptable et financier (CF) Oran</a><br>

- Du 22 Au 24 Avril 2018 <a href="#"> Les Portes Ouvertes (SNV)  </a><br>

- Le 02  Juillet 2018 <a href="#">Le conseil d'administration (SNV)</a><br>

- Juillet 2018         <a href="#">  Cérémonie de fin d'études 2017-2018</a><br>

<p style="font-style: italic;">Année Universitaire 2016 - 2017</p> <br>

- Le 04 Juillet 2017 : <a href="#">Bilan de l'année universitaire 2016/2017... </a><br>
- Le 27 Avril 2017  :  <a href="#">  Conférence  présentée par Dr Z.BOUCIF     </a> <br>    
- Le 23 Février 2017 : <a href="#">Conférence présentée par  Dr A. BEKADA ..</a><br><br>

<a href="#">Lire la Suite  >></a>
        </blockquote>
      </li>
    </ul>
  </section>
</div>







<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="center btmspace-50">
      <h6 class="heading">SCIENCES DE LA NATURE ET DE LA VIE</h6>
      <nav>
        <ul class="nospace inline pushright uppercase">
          <li><a href="/"><i class="fas fa-lg fa-home"></i></a></li>
          <li><a href="#">À Propos</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
    </div>
    <hr class="btmspace-50">
    <div class="group">
      <div class="one_quarter first">
        <h6 class="heading">Contactez-nous</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <address>
            El Mnaouar، BP 1505, Bir El Djir 31000
            </address>
          </li>
          <li><i class="fas fa-phone"></i>041 56 03 33</li>
          <li><i class="fas fa-phone"></i>041 56 03 22</li>
          <li><i class="far fa-envelope"></i>webusto-mb@univ-usto.dz</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" target="_blank" href="http://www.facebook.com/usto.mb.page.officiel/"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-youtube" target="_blank" href="https://www.youtube.com/channel/UC4nLoqwngFDLdBzim4InGng"><i class="fab fa-youtube"></i></a></li>
          <li><a class="faicon-linkedin" target="_blank" href="http://dz.linkedin.com/in/universit%C3%A9-ustomb-297b22116"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-twitter" target="_blank" href="https://twitter.com/USTOMBOfficiel"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-wiki" target="_blank" href="https://fr.wikipedia.org/wiki/Universit%C3%A9_des_sciences_et_de_la_technologie_d%27Oran"><i class="fab fa-wikipedia-w"></i></a></li>
        </ul>
      </div>
      
      <div class="one_quarter">
        <h6 class="heading" style="font-size: 1.4rem;text-transform: capitalize;font-family: Georgia;">Liens externes</h6>
        <ul class="nospace linklist">
          <li><a href="http://cruo.univ-oran1.dz/">CRUO</a></li>
          <li><a href="http://www.mesrs.dz/">MESRS</a></li>
          <li><a href="http://www.joradp.dz/HAR/Index.htm">Journal officiel</a></li>
          <li><a href="http://www.optioncarriere.dz/">Recherche d'emploi</a></li>
          <li><a href="https://www.univ-usto.dz/faculte/fac-snv/index.php/universites-algeriennes">Universités Algériennes</a></li>
        </ul>
      </div>
      <div class="one_quarter" >
        <h6 class="heading">Trouvez-Nous</h6>
        <ul class="nospace clear latestimg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12958.915351521504!2d-0.5833189!3d35.7082899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x511766a6dbbb0fb9!2sFacult%C3%A9%20de%20SNV%20(Sciences%20de%20la%20Nature%20et%20de%20la%20Vie)!5e0!3m2!1sfr!2sdz!4v1611650686194!5m2!1sfr!2sdz" width="600" height="450" frameborder="0" style="border:0;width: 250px;height: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </ul>
      </div>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left"><center>Copyright &copy; 2021 - Tous droits réservés</center></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
 var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

</script>
</script>
</body>
</html>