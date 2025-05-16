<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
        'server_name',
        'server_site',
        'zorluk',
        'acilis_tarihi',
        'baslangic_leveli',
        'bitis_leveli',
        'tur',
        'Lycan',
        'Simya',
        'Kuşak',
        'Kemer',
        'Tılsım',
        'Levelli Pet',
        'Binek',
        'Misilleme',
        'Efsun',
        'Çevrimdışı pazar',
        'Yardımcı şaman',
        'Yükseltme Envanteri',
        'Ticaret Camı',
        'Boss sistem',
        'Lonca sistem',
        'Güvenli pc',
        'İtem kilit'
    ];

    protected $casts = [  // otomatik olarak belirli türlere dönüştürmek için kullanılır.
        'acilis_tarihi' => 'date',
        'baslangic_leveli' => 'integer',
        'bitis_leveli' => 'integer'
    ];
}
