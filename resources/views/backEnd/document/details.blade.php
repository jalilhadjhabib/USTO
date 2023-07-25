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
    <link rel="stylesheet" href="{{asset('css/home.css')}}" />

</head>
<body id="top">
  <a id="button"></a>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('{{asset('images/snv_banner.jpg')}}');"> 
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
          <a href="/"><img src="{{asset('images/snv_logo.png')}}" align=left style="width: 80px;"><h1 id="logo_name"></h1></a>
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
  <div id="conL" class="hoc clear"> 
    <div class="table-responsive">
    	<center><h1 style="font-size:50px;">{{$data->title}}</h1></center>
                <h3>Descrption : {{$data->description}} </h3>

<p>
	<center><iframe src=" {{url('storage/'.$data->file)}}" style="width: 800px;height: 600px;"></iframe></center>
</p>
   </div>
  </div>
</div>
<!-- End Top Background Image Wrapper -->

  

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
</html>






