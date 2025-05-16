@extends('layouts.app')

@section('content')

<div class="uyesolKatman">
    <div class="sUyelik">
    <h1><div class="icon-user-plus"></div>Üyelik Formu</h1>
    <form action="uye-ol.html" method="post" class="kayitForm">
    <div class="sSekme">
    <div class="sSekmesol">Kullanıcı adı</div>
    <div class="sSekmesag">
    <input type="text" name="username" maxlength="16" placeholder="Kullanıcı adınızı belirleyin" value=""/> </div></div>
    <div class="temizle"></div>
    <div class="sSekme">
    <div class="sSekmesol">Şifre</div>
    <div class="sSekmesag">
    <input type="password" name="password" maxlength="16" placeholder="Şifre oluşturun" value=""/> </div></div>
    <div class="temizle"></div>
    <div class="sSekme">
    <div class="sSekmesol">Şifre</div>
    <div class="sSekmesag">
    <input type="password" name="password2" maxlength="16" placeholder="Şifrenizi onaylayın" value=""/> </div></div>
    <div class="temizle"></div>
    <div class="sSekme">
    <div class="sSekmesol">E-posta</div>
    <div class="sSekmesag">
    <input type="email" name="email" placeholder="E-posta adresinizi girin" value=""/> </div></div>
    <div class="temizle"></div>
    <div class="sSekme">
    <div class="sSekmesol"><img src="/guvenlik.php" alt="Güvenlik kodu" height="20px" width="50px"/></div>
    <div class="sSekmesag"><input type="text" name="securitycode" maxlength="16" placeholder="Robot olmadığınızı kanıtlayın" value=""/></div></div>
    <input type="submit" value="Üye Ol" name="Submit"/>
    </form>
    <div class="temizle">
    </div>
    </div>

    <div class="sUyelik">
    <div class="baslik"><div class="icon-yasal-uyari"></div>Yasal Uyarı</div>
    <div class="sKurallar">Sitemiz (https://www.epvpserverler.com) <a href="/" title="Metin2 Server Tanıtımları">metin2 server tanıtımları</a>nı barındırmakta olup oyunculara ve sunucu sahiplerine aracı ve yardımcı olmaktadır.</div>
    <div class="sKurallar">5651 sayılı kanunun ilgili maddesine göre sitemiz 'yer sağlayıcı' olarak görev yapmaktadır ve sitemizde üyeler yaptıkları paylaşımlardan sorumludur. Oluşan veya oluşabilecek durumlardan sitemiz sorumlu tutulamaz ancak <a title="İletişim" href="/iletisim.html">iletişim</a>e geçildiği takdirde ilgili içerik sitemizden 3 (üç) iş günü içerisinde kaldırılır.</div>
    </div>
    </div>

    <div class="uyeortaKatman">
        <div class="sUyelik">
        <div class="baslik"><div class="icon-list"></div>ePvpServerler Site Koşulları</div>
        <div class="sKurallar">ePvpServerler sitesi ve bu alandaki tüm sayfalar aşağıdaki maddelerde site veya sitemiz adı altında isimlendirilmiştir.</div>
        <div class="sKurallar">Siteye üye olurken kolay hatırlayabileceğiniz kullanıcı adı ve şifre seçiniz. Kullandığınız kullanıcı adı ve e-posta adresini tekrar kullanamayacağınızı unutmayınız.</div>
        <div class="sKurallar">Siteye girilen tanıtımlardan ve yazılan yorumlardan (Disqus da dahil) tamamen yazan kullanıcı sorumludur. Sitemiz hiçbir şekilde sorumluluk kabul etmez.</div>
        <div class="sKurallar">Siteye üye olan kullanıcılar doldurdukları bilgilerin doğruluğunu kabul ve taahhüt eder. Kaydetmiş olduğu bilgilerden doğabilecek her türlü zarar ve ziyandan kullanıcı sorumlu tutulacaktır.</div>
        <div class="sKurallar">Serverinizi siteye bir kere ekleyebilirsiniz ve bir kere sıralamaya dahil olabilir. </div>
        <div class="sKurallar">Sıralama sistemimize hile karıştırdığı tespit edilen her serverin popülarite puanı sıfırlanır veya server yayından kaldırılır.</div>
        <div class="sKurallar">Sitemiz gerekli gördüğü durumlarda haber vermeksizin tanıtımları düzenleme veya kaldırma yetkisini kendinde saklı tutar.</div>
        <div class="sKurallar">Siteye üye olan herkes <a href="./kullanim-sartlari.html" title="Kullanım Şartları" target="_blank">kuralları</a> okumuş ve kabul etmiş sayılır.</div>
        </div>
        </div>

@endsection