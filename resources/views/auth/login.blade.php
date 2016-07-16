@extends('layouts.principal')
@section('content')
<style type="text/css">
.btn-primary{
background-color:#0098da;
font-size: 20px;
}
html{

    background-image :url({{URL::asset('assets/imgs/textura.png')}});
}
</style>
<div style="background-image: url({{URL::asset('assets/imgs/textura.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 125px;">
                <div class="panel panel-default animated fadeInDown" id="painel" style="border-radius: 25px;">
                    <div class="panel-heading" align="center" style="border-top-left-radius:25px;border-top-right-radius: 25px;background-color: #0098da;">
                        <div id="marcador"></div>
                        <h4 style="font-weight: bold;color: #FFFFFF;">Bem Vindo</h4>
                    </div>
                    <div class="panel-body" style="margin-top: 15px;">
                        @if(Session::has('error'))
                        <div class="alert alert-danger" align="center">{{Session::get('error')}}</div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ action('HomeController@postLogin') }}">
                            {{ csrf_field() }}
                            <div align="center" class="form-group">
                                <label for="user" class="col-md-12">Nome</label>
                                <div class="col-md-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" style="color: #ec268f;"></i></span>
                                    <input id="user" type="text" name="user" width="50" class="form-control input-lg"  required value="{{ old('user') }}">
                                </div>
                            </div>
                            <div align="center" class="form-group">
                                <label for="pass" class="col-md-12">Senha</label>
                                <div class="col-md-8 input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock" style="color: #ec268f;"></i></span>
                                    <input id="pass" type="password" class="form-control input-lg" required name="pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" style="margin-top: 35px;">
                                    <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                    <br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
                <div class="animated fadeInLeft" style="margin-top: 50px;position: fixed;bottom: 0;left: 10px;">
                    <hr>
                    <h5 style="font-weight: bold;">GERCOM - Criado por:</h5>
                    <h5 style="font-weight: bold;">Fábrica de Softwares - IESB</h5>
                    <hr>
                    <h5 style="font-weight: bold;"><a href="http://jundiaiutilidades.com.br/">Jundiaí Embalagens</a></h5>
                </div>
                
                <div class="animated pulse infinite" style="position: fixed;margin-right: 50px;margin-bottom: 10px;bottom: 0;right: 0;" id="img">
                    <img src="{{URL::asset('assets/imgs/Logo_Folha.png')}}" width="40">
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection