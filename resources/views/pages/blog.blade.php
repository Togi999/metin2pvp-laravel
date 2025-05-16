@extends('layouts.app')

@section('content')
<div class="solKatman">
 <h1 class="baslikh">Metin2 ve <strong>Pvp Serverler</strong> Blog</h1>
<div class="sBlogsay"><h3 class="baslik"><a href="/metin2-pvp-serverler-cesitleri-209-blog.html" title="Metin2 Pvp Serverler Çeşitleri">Metin2 Pvp Serverler Çeşitleri</a></h3>
<div class="sBlogsayici">2004 yılında T&uuml;rkiye&#39;de yayınlanmaya başlayan Metin2 oyunu şuan tam 20. yılında. Ancak g&uuml;n&uuml;m&uuml;zde artık oyuncuların daha fazla tercih ettiği metin2 pvp serverler, TR sunucularını derinden sarsmış durumdadır. Metin2 pvp serverler TR y&ouml;netiminden daha kaliteli bir hizmet anlayışı ile oyuncularına hizmet vermektedir. Her cuma g&uuml;n&uuml; yeni a&ccedil;ılan metin2 pvp serverler y&uuml;ksek oyuncu kit...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 10.07.2024 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 361</div>
<div class="temizle"></div>
</div>
</div>

@foreach ($posts as $post)
<div class="sBlogsay">
  <h3 class="baslik">
    <a href="{{ $post->id }}" title="{{ $post->title }}">
      {{ $post->title }}
    </a>
  </h3>
  <div class="sBlogsayici">
    {{!! $post->content !!}}
  </div>

  <div class="sBlogsaycubuk">
    <div class="sBlogsaycubukl">
      <span>Ekleyen:</span> {{ $post->author ?? 'Bilinmiyor' }} &nbsp;&nbsp;&nbsp;&nbsp;
      <span>Tarih:</span> {{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y') }} &nbsp;&nbsp;&nbsp;&nbsp;
      <span>Okunma:</span> {{ $post->views ?? 0 }}
    </div>
    <div class="temizle"></div>
  </div>
</div>
@endforeach


    <div class="sBlogsay"><h3 class="baslik"><a href="/yari-insanlara-karsi-guclu-efsunu-ne-ise-yarar-206-blog.html" title="Yarı İnsanlara Karşı Güçlü Efsunu Ne İşe Yarar">Yarı İnsanlara Karşı Güçlü Efsunu Ne İşe Yarar</a></h3>
    <div class="sBlogsayici">Yarı insan denilince ne anlıyoruz &ouml;nce ona bir bakalım. Yarı insan; birtakım insan &ouml;zelliklerini (g&ouml;r&uuml;n&uuml;ş gibi) barındıran canavar ırkına deniyor. Daha iyi anlamak i&ccedil;in bir &ouml;rnek verelim: Beyaz Yeminli Asker oyun &ouml;zelliği gereğince canavar olarak ge&ccedil;mekte ancak g&ouml;r&uuml;n&uuml;ş &ouml;zelliği itibariyle insana benzemektedir. İşte bu &ouml;zellikleri barındıran canavarlara kar...</div>
    <div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 30.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 15310</div>
    <div class="temizle"></div>
    </div>
    </div>

    <div class="sBlogsay"><h3 class="baslik"><a href="/metin2-at-gorevleri-205-blog.html" title="Metin2 At Görevleri">Metin2 At Görevleri</a></h3>
    <div class="sBlogsayici">Son yenilikler ve bineklerin oyuna dahil olmasıyla birlikte atın cezbediciliği azalmış olsa da hala vazge&ccedil;ilmiş değil. Oyunun en &ccedil;ok ihtiya&ccedil; duyduğumuz &ouml;gesi Ata sahip olmanız ve level atlatabilmeniz i&ccedil;in At Madalyonuna sahip olmanız gerekmektedir. At Madalyonuna sahipseniz artık başlayalım:




                Seviye
                G&ouml;rev İ&ccedil;eriği




                Seviye 1
                Zaman sınırı olan 3 sev...</div>
    <div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 29.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 2050</div>
    <div class="temizle"></div>
    </div>
    </div>

<div class="sBlogsay"><h3 class="baslik"><a href="/meleyin-ini-rehberi-ejderha-kralicesi-nasil-kesilir-204-blog.html" title="Meleyin İni Rehberi / Ejderha Kraliçesi Nasıl Kesilir">Meleyin İni Rehberi / Ejderha Kraliçesi Nasıl Kesilir</a></h3>
<div class="sBlogsayici">Ejderha Bek&ccedil;isi Dolnarr&#39;ın Yeri

&nbsp;

Meley&#39;in İni loncalara y&ouml;nelik getirilen bir &ouml;zel haritadır. Loncaların aktif olmasını sağlamasıyla bereber g&uuml;zel &ouml;d&uuml;lleri barındıran bu sistem, gerek loncadaki aktivitelerinize renk katarak &ouml;d&uuml;ller kazanacaksınız, gerekse bu etkinliğe katılmak i&ccedil;in loncada &ouml;n plana &ccedil;ıkmak i&ccedil;in elinizden geleni yapacaksınız. An...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> lakes &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 27.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 14064</div>
<div class="temizle"></div>
</div>
</div>

<div class="sBlogsay"><h3 class="baslik"><a href="/metin2-80-kasklari-nereden-duser-ve-ne-verir-203-blog.html" title="Metin2 80 Kaskları Nereden Düşer ve Ne Verir">Metin2 80 Kaskları Nereden Düşer ve Ne Verir</a></h3>
<div class="sBlogsayici">Oyuna ilk girdiğinde kesinlikle merak uyandıran itemlerden biriydi 80 level kaskları ger&ccedil;i artık s&uuml;rekli yeni itemler geldiği i&ccedil;in bu kaskların heyecanı bile kaplamıyor oyuncuları. &Ouml;zellikle tam olarak hangi canavardan ve hangi b&ouml;lgeden d&uuml;ş&uuml;r&uuml;leceği kolay kolay bulunamamıştı.

&Ouml;ncelikle bilmelisiniz ki bu kaskların farklı adları bulunabilmekte. Bazı pvp serverlar da bununla kar�...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 27.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 2031</div>
<div class="temizle"></div>
</div>
</div>

<div class="sBlogsay"><h3 class="baslik"><a href="/metin2-ninja-statuleri-nasil-verilmeli-202-blog.html" title="Metin2 Ninja Statüleri Nasıl Verilmeli">Metin2 Ninja Statüleri Nasıl Verilmeli</a></h3>
<div class="sBlogsayici">Bu konuyu Metin2 TR ve pvp serverler olarak 2 başlıkta ele almak daha doğru olacaktır. Ancak ister Metin2 TR ister pvp serverler olsun ninja i&ccedil;in &ouml;nem sırasına g&ouml;re stat&uuml;ler VIT, DEX, STR ve en geri planda kalan INT&#39;dir.

Metin2 TR&#39;de kasılmak olduk&ccedil;a zor olduğundan ilk seviyelerde tek bir stat&uuml;de yoğunlaşmak sizi orta levellerde zora sokabilir. Bu durumda 35 levele kadar 2 VIT 1 DEX şeklinde...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 27.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 13050</div>
<div class="temizle"></div>
</div>
</div>

<div class="sBlogsay"><h3 class="baslik"><a href="/metin2-level-sandiklari-ve-icerisinden-cikanlar-201-blog.html" title="Metin2 Level Sandıkları ve İçerisinden Çıkanlar">Metin2 Level Sandıkları ve İçerisinden Çıkanlar</a></h3>
<div class="sBlogsayici">Ge&ccedil;tiğimiz yıllarda oyuna eklenen &ouml;zelliklerden birisi olmakla beraber olduk&ccedil;a stratejik bir &ouml;neme sahip. Oyun i&ccedil;inde ki bir takım şeyleri tanımanızı ve karakterimizin geleceğini planlamamızı daha sağlıklı bir hale getirmekte. Level sandıkları oyun başlangıcında ve her 10 seviye katında verilmekte. Yani 10, 20, 30, &hellip; şeklinde. Her sandıktan &ccedil;ıkan eşyalar da farklı.

Seviye 1 &...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> dentrimal &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 27.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 2171</div>
<div class="temizle"></div>
</div>
</div>

<div class="sBlogsay"><h3 class="baslik"><a href="/seytan-katakombu-rehberi-azrail-nasil-kesilir-200-blog.html" title="Şeytan Katakombu Rehberi / Azrail Nasıl Kesilir">Şeytan Katakombu Rehberi / Azrail Nasıl Kesilir</a></h3>
<div class="sBlogsayici">Şeytan Katakombu toplam 7 aşamadan oluşmaktadır. Bu aşamalara ulaşmadan &ouml;nce gereken şartları ve yapılması gerekenleri unutmamak gerekir:


	75. Seviye veya &uuml;zeri olmanız gerekir.
	Şeytan Kulesi&#39;ni tamamlamalısınız. (Lusifer&#39;i - eski deyimle Azrail- &ouml;ld&uuml;rmeniz gerekir)
	Şeytan Katakombu&#39;na girmeden &ouml;nce bir grup kurmanız gerekir.
	K&uuml;&ccedil;&uuml;len Kafa&nbsp;&nbsp;bulunması gerek...</div>
<div class="sBlogsaycubuk"><div class="sBlogsaycubukl"><span>Ekleyen:</span> lakes &nbsp;&nbsp;&nbsp;&nbsp; <span>Tarih:</span> 27.03.2019 &nbsp;&nbsp;&nbsp;&nbsp; <span>Okunma:</span> 45824</div>
<div class="temizle"></div>
</div>
</div>
  <br/><span class="sayfalamablog">
    <div class="dugme-aktif">1</div>
    <div class="dugme">
        <a href="?page=2" title="Sayfa 2">2</a>
    </div>
    <div class="dugme">
        <a href="?page=3" title="Sayfa 3">3</a>
    </div> <div class="dugme"> <a href="?page=4" title="Sayfa 4">4</a></div> <div class="dugme"> <a href="?sayfa=5" title="Sayfa 5">5</a></div>  <div class="dugme"> <a href="?sayfa=2" title="Sonraki sayfa">sonraki &gt;</a></div>  <div class="dugme"> <a href="?sayfa=5" title="Sayfa 5">5</a></div></span></div>

 <!-- {{ $posts->links() }} -->


  @endsection
