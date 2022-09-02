<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    use HasFactory; 

    protected $table = 'daily';

    protected $guarded = [];


    private $month = [
        "01" => "Yanvar",
        "02" => "Fevral",
        "03" => "Mart",
        "04" => "Aprel",
        "05" => "May",
        "06" => "Iyun",
        "07" => "Iyul",
        "08" => "Avgust",
        "09" => "Sentabr",
        "10" => "Oktabr",
        "11" => "Noyabr",
        "12" => "Dekabr",
    ];

    public function getCreatedAtAttribute($query)
    {
        return   date('Y', strtotime($query)) ."y - ".date('d', strtotime($query)). $this->month[date('m', strtotime($query))];
    }
}

