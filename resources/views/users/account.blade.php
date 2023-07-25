@extends('frontEnd.layouts.master')
@section('title','Mon compte')
@section('slider')
@endsection
@section('content')
<link href="css/home.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/carousel_boostrap.css">
<link rel="shortcut icon" href="images/snv_logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
          <a href="/"><img src="images/snv_logo.png" align=left style="width: 80px;"><h1 id="logo_name">S N V</h1></a>
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
  <div id="conM" class="hoc clear"> 
    <article class="center">
      <div class="container" >
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <form action="{{url('/update-profile',$user_login->id)}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <h1>VOTRE COMPTE</h1>
                        
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user_login->name}}" placeholder="Name">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('email')?'has-error':''}}">
                            <input type="text" class="form-control" name="email" id="email" value="{{$user_login->email}}" placeholder="Email">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="address" id="address" placeholder="Address">
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('city')?'has-error':''}}">
                            <input type="text" class="form-control" name="city" value="{{$user_login->city}}" id="city" placeholder="City">
                            <span class="text-danger">{{$errors->first('city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('state')?'has-error':''}}">
                            <input type="text" class="form-control" name="state" value="{{$user_login->state}}" id="state" placeholder="State">
                            <span class="text-danger">{{$errors->first('state')}}</span>
                        </div>
                        <div class="form-group">
                            <select name="country" id="country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="pincode" value="{{$user_login->pincode}}" id="pincode" placeholder="Pincode">
                            <span class="text-danger">{{$errors->first('pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="mobile" value="{{$user_login->mobile}}" id="mobile" placeholder="Mobile">
                            <span class="text-danger">{{$errors->first('mobile')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Metter a jour votre profile</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OU</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <form action="{{url('/update-password',$user_login->id)}}" method="post" class="form-horizontal">
                        <h1>Mettre a jour le MDP</h1>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{method_field('PUT')}}
                        <div class="form-group {{$errors->has('password')?'has-error':''}}">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Old Password">
                            @if(Session::has('oldpassword'))
                                <span class="text-danger">{{Session::get('oldpassword')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('newPassword')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
                            <span class="text-danger">{{$errors->first('newPassword')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('newPassword_confirmation')?'has-error':''}}">
                            <input type="password" class="form-control" name="newPassword_confirmation" id="newPassword_confirmation" placeholder="Confirm Password">
                            <span class="text-danger">{{$errors->first('newPassword_confirmation')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">Mettre a jour le MDP</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->

@endsection