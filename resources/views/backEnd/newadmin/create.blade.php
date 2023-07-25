@extends('backEnd.layouts.master')
@section('title','Nouvel Admin')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('newadmin.create')}}">Nouvel Admin</a>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->


<center><div class="signup-form"><!--sign up form-->
    @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
                    <h2>Créer un nouvel Admin</h2>
                    <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div><input type="text" placeholder="Name" name="name" value="{{old('name')}}" required />
                        <span class="text-danger">{{$errors->first('name')}}</span></div>
                        <br>
                        <div><input type="text" name="admin" value="1" readonly/>
                        <span class="text-danger">{{$errors->first('admin')}}</span></div>
                        <br>
                        <div><input type="email" placeholder="Email Address" name="email" value="{{old('email')}}" required/>
                        <span class="text-danger">{{$errors->first('email')}}</span></div>
                        <br>
                        <div><input type="password" placeholder="Password" name="password" value="{{old('password')}}" required/>
                        <span class="text-danger">{{$errors->first('password')}}</span></div>
                        <br>
                        <div><input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}" required/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span></div>
                        <br>
                       <div> <button type="submit" class="btn btn-default">Créer</button></div>
                    </form>
                </div></center><!--/sign up form-->

@endsection
@section('jsblock')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/matrix.js') }}"></script>
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/matrix.tables.js') }}"></script>
    <script src="{{ asset('js/matrix.popover.js') }}"></script>
@endsection