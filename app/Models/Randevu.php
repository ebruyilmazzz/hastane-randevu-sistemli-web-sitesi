<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;

    protected $table = 'randevular';

    public $timestamps = true;

    protected $fillable = [
        'adsoyad',
        'telno',
        'email',
        'randevutarih',
        'bolum',
        'mesaj',
        'kayittarihi',
        'ipadresi',
        'durum'
    ];

    protected $casts = [
        'randevutarih' => 'datetime',
        'kayittarihi' => 'datetime'
    ];

    protected $dates = [
        'randevutarih',
        'kayittarihi',
        'created_at',
        'updated_at'
    ];
}
