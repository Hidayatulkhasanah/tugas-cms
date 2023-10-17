<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul', 'deskripsi',
    ];
    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
    function setJudulAttribute($value)
    {
        $this->attributes['judul'] = strtoupper($value);
    }
}