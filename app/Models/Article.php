<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tag',
        'category',
        'price',
        'solde_price',
        'desc',
        'nbre_exemplaire',
        'picture_1',
        'picture_2',
        'picture_3'
    ];
}
