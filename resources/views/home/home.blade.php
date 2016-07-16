@extends('layouts.principal')
@extends('layouts.navbar')
@section('conteudo')
Logado : {{Auth::user()}}
<a href="{{action('HomeController@getLogout')}}">Deslogar</a>
@endsection