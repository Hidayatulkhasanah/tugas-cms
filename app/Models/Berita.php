<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
}

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'isi', 'tanggal_publikasi',
    ];
    public function scopeTerbaru($query)
    {
        return $query->orderBy('tanggal_publikasi', 'desc');
    }
    $berita = Berita::terbaru()->get();
}

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
    $komentarBerita = $berita->komentar;

    function setJudulAttribute($value)
{
    $this->attributes['judul'] = strtoupper($value);
}