@extends('backEnd.layouts.master')
@section('title','Ajouter un planning')
@section('content')
<style type="text/css">input[type=text] {
  width: 50%;
  height: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;

}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
input[type=text]:focus {
  border: 3px solid #555;
}</style>
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Acceuil</a> <a href="{{route('coupon.index')}}">Planning</a> <a href="{{route('coupon.create')}}" class="current">Ajouter un nouveau planning</a> </div>
    <div class="container-fluid">
        <center><form action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  <h1>Nom du planning:</h1>
  <br />
  <input type="text" name="name"  required />
  <br /><br />
  <h1>Description du planning:</h1>
  <br />
  <textarea name="description" required></textarea>
  <br /><br />
  <h1>Début:</h1>
  <br />
  <input type="text" name="task_date"  class="date" required/>
  <br /><br />
  <input type="submit" value="Save" />
</form></center>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection