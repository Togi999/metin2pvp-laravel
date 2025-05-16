@extends('layouts.app')

@section('content')

<div class="solKatman">
    <div class="sListe">
    <h1><div class="icon-giris"></div>Giriş Formu</h1>
    <div class="uyeGirisana">
    <div class="uyeGirisanasol">
    <form action="uye-giris.html" method="post" class="uyeGiris">
    <div class="sSekmegiris">
    <div class="sSekmegirisol">Kullanıcı adı</div>
    <div class="sSekmegirisag">
    <input type="text" name="username" maxlength="16" placeholder="Kullanıcı adınızı girin"/>
    </div> <div class="temizle"></div>
    </div>
    <div class="sSekmegiris">
    <div class="sSekmegirisol">Şifre</div>
    <div class="sSekmegirisag">
    <input type="password" name="password" maxlength="16" placeholder="Şifrenizi girin"/>
    </div> <div class="temizle"></div>
    </div>
    <div class="">
    <div class="sSekmegirisol"></div>
    <div class="sSekmegirisag">
    <input type="submit" name="submit" value="Giriş Yap"/>
    </div>
    <div class="temizle"></div>
    </div>
    </form>
    </div>
    <div class="uyeGirisanasag">
    <div class="uyeGirisanasagkay"><a href="/uye-ol.html" title="Üye Ol">Üye Ol</a></div>
    <div class="uyeGirisanasagsif"><a href="/sifremi-unuttum.html" title="Şifremi Unuttum">Şifremi Unuttum</a></div>
    </div>
    </div>
    <div class="temizle"></div>
    </div>
    </div>

    @endsection