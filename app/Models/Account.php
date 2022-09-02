<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'kimga',
        'hisob_raqam',
        'kimdan',
        'pul_miqdori',
        'pul_birligi',
        'd_qiymati',
        'sana',
    ];
}
