@extends('frontEnd.layouts.master')
@section('title','Formation')
@section('content')

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

    <section>
        <div class="container" style="padding: 50px;background-color: white;">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">FORMATIONS</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4" >
                                <div class="product-image-wrapper"style="border-color: black;">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/formation-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>Numéro de la formation:  {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/formation-detail',$product->id)}}" class="btn btn-default add-to-cart" style="font-size:20px;background-color: black;">Voir la formation </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection