<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silk extends Model
{
    use HasFactory;

    protected $fillable = [
        'olindi',
        'm_narxi',
        'berilgan_summa',
        'birligi',
        'd_qiymati',
        'qancha_miqdor',
        'miqdor_birlig',
        'o_sana',
    ];
}
