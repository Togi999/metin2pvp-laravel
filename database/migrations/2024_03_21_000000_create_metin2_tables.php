<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 📁 Categories tablosu: Kategori bilgilerini tutar
        //Schema::create('categories', function (Blueprint $table) {
            //$table->id();                              // Otomatik artan birincil anahtar (id)
            //$table->string('name');                    // Kategori adı
            //$table->text('description')->nullable();   // Kategori açıklaması (boş geçilebilir)
            //$table->timestamps();                      // created_at ve updated_at zaman damgaları
        //});

        // 📁 Servers tablosu: Oyun sunucularını tutar
        Schema::create('servers', function (Blueprint $table) {
            $table->id();                              // Sunucu ID
            //$table->foreignId('category_id')->constrained()->onDelete('cascade');        // Silinirse, ilişkili kayıtlar da silinir
            $table->string('server_name')->unique();          // Sunucu adı (benzersiz olmalı)
            $table->string('server_site')->unique();
            $table->enum('zorluk', ['wslik', 'orta', 'zor', 'emek']);
            $table->date('acilis_tarihi');
            $table->integer('baslangic_leveli');
            $table->integer('bitis_leveli');
            $table->enum('tur',['Bilinmiyor','Tritonlu','Betalı','Kyanitli']);
            $table->enum('Lycan',['Bilinmiyor','Yok','Var']);
            $table->enum('Simya',['Bilinmiyor','Yok','Var']);
            $table->enum('Kuşak',['Bilinmiyor','Yok','Var']);
            $table->enum('Kemer',['Bilinmiyor','Yok','Var']);
            $table->enum('Tılsım',['Bilinmiyor','Yok','Var']);
            $table->enum('Levelli Pet',['Bilinmiyor','Yok','Var']);
            $table->enum('Binek',['Bilinmiyor','Yok','Var']);
            $table->enum('Misilleme',['Bilinmiyor','Yok','Var']);
            $table->enum('Efsun',['Bilinmiyor','Yok','Var']);
            $table->enum('Çevrimdışı pazar',['Bilinmiyor','Yok','Var']);
            $table->enum('Yardımcı şaman',['Bilinmiyor','Yok','Var']);
            $table->enum('Yükseltme Envanteri',['Bilinmiyor','Yok','Var']);
            $table->enum('Ticaret Camı',['Bilinmiyor','Yok','Var']);
            $table->enum('Boss sistem',['Bilinmiyor','Yok','Var']);
            $table->enum('Lonca sistem',['Bilinmiyor','Yok','Var']);
            $table->enum('Güvenli pc',['Bilinmiyor','Yok','Var']);
            $table->enum('İtem kilit',['Bilinmiyor','Yok','Var']);
            $table->timestamps();                      // created_at ve updated_at
        });


        // 📄 Posts tablosu: Yazı içeriklerini tutar (blog, haber vs.)
        //Schema::create('posts', function (Blueprint $table) {
            //$table->id();                              // Yazı ID
            //$table->foreignId('category_id')->constrained()->onDelete('cascade');
            //$table->string('title')->unique();         // Başlık (benzersiz)
            //$table->string('slug')->unique();
            //$table->text('content');                   // Yazı içeriği
            //$table->string('image')->nullable();       // Görsel (boş geçilebilir)
            //$table->boolean('status')->default(true);
            //$table->timestamps();                      // created_at ve updated_at
        //});
    }

    public function down(): void
    {
        // Tabloları silme sırası: pivotlar önce silinmeli (yabancı anahtar nedeniyle)
        Schema::dropIfExists('category_post');     // category_post pivot tablosu silinir
        Schema::dropIfExists('posts');             // posts tablosu silinir
        Schema::dropIfExists('category_server');   // category_server pivot tablosu silinir
        Schema::dropIfExists('servers');           // servers tablosu silinir
        //Schema::dropIfExists('categories');        // categories tablosu silinir
    }
};
