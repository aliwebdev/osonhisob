<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Daily;

class Staff extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'hodim_ismi',
        'hodim_yoshi',
        'ish_turi',
        'oyligi',
        'avans',
        'qilgan_ish_turi',
        'qilgan_ish_dona',
        'qilgan_ish_summa',
        'ish_vaqti',
    ];

    public function dailys()
    {
        return $this->hasMany(Daily::class);
    }
}