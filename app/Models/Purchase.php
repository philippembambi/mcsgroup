<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'quantity',
        'total_price',
        'delivery_mode',
        'payment_mode',
        'user_id',
        'article_id',
        'code_purchase'
    ];

    protected static function boot()
	{
		parent::boot();
        static::created(function ($purchase) {
          	$purchase->user()->associate(auth()->user()->id);
           // $purchase->article()->associate(request()->article->id);
            $purchase->save();
        });

		self::updating(function($purchase){
		$purchase->user()->associate(auth()->user()->id);
       // $purchase->article()->associate(request()->article->id);
        });
	}

    public function article()
	{
		return $this->belongsTo(Article::class);
	}

    public function user()
	{
		return $this->belongsTo(User::class);
	}

}
