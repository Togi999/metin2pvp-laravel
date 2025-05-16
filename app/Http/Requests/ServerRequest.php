<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $serverId = $this->route('server') ? $this->route('server')->id : null;

        return [
            'server_name' => 'required|min:3|max:255|unique:servers,server_name,' . $serverId,
            'server_site' => 'required|min:3|max:255|unique:servers,server_site' . $serverId,
            'zorluk' => 'required|in:wslik,orta,zor,emek',
            'acilis_ratihi' => 'required|date',
            'baslangic_leveli' =>'required|integer',
            'bitis_leveli' => 'required|integer',
            'tur' => 'required|in:Bilinmiyor,Trintolu,Betalı,Kyantili',
            'Lycan' => 'required|in:Bilinmiyor,Yok,Var',
            'Simya' => 'required|in:Bilinmiyor,Yok,Var',
            'Kuşak' => 'required|in:Bilinmiyor,Yok,Var',
            'Kemer' => 'required|in:Bilinmiyor,Yok,Var',
            'Tılsım' => 'required|in:Bilinmiyor,Yok,Var',
            'Levelli Pet' => 'required|in:Bilinmiyor,Yok,Var',
            'Binek' => 'required|in:Bilinmiyor,Yok,Var',
            'Kostüm' => 'required|in:Bilinmiyor,Yok,Var',
            'Misilleme' => 'required|in:Bilinmiyor,Yok,Var',
            'Efsun' => 'required|in:Bilinmiyor,Yok,Var',
            'Çevrimdışı pazar' => 'required|in:Bilinmiyor,Yok,Var',
            'Yardımcı şaman' => 'required|in:Bilinmiyor,Yok,Var',
            'Yükseltme envanteri' => 'required|in:Bilinmiyor,Yok,Var',
            'Ticaret camı' => 'required|in:Bilinmiyor,Yok,Var',
            'Boss sistem' => 'required|in:Bilinmiyor,Yok,Var',
            'Lonca sistem' => 'required|in:Bilinmiyor,Yok,Var',
            'Güvenli pc' => 'required|in:Bilinmiyor,Yok,Var',
            'İtem kilit' => 'required|in:Bilinmiyor,Yok,Var',
        ];
    }
    public function attributes(): array
    {
        return [
            'server_name' => 'Sunucu Adı',
            'server_site' => 'Sunucu Sitesi',
            'zorluk' => 'Zorluk Seviyesi',
            'acilis_ratihi' => 'Açılış Tarihi',
            'baslangic_leveli' => 'Başlangıç Leveli',
            'bitis_leveli' => 'Bitiş Leveli',
            'tur' => 'Sunucu Türü',
            'Lycan' => 'Lycan',
            'Simya' => 'Simya',
            'Kuşak' => 'Kuşak',
            'Kemer' => 'Kemer',
            'Tılsım' => 'Tılsım',
            'Levelli Pet' => 'Levelli Pet',
            'Binek' => 'Binek',
            'Kostüm' => 'Kostüm',
            'Misilleme' => 'Misilleme',
            'Efsun' => 'Efsun',
            'Çevrimdışı pazar' => 'Çevrimdışı Pazar',
            'Yardımcı şaman' => 'Yardımcı Şaman',
            'Yükseltme envanteri' => 'Yükseltme Envanteri',
            'Ticaret camı' => 'Ticaret Camı',
            'Boss sistem' => 'Boss Sistemi',
            'Lonca sistem' => 'Lonca Sistemi',
            'Güvenli pc' => 'Güvenli PC',
            'İtem kilit' => 'İtem Kilidi',
        ];
    }


}
