<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'country',
    ];

    protected static function boot()
	{
		parent::boot();
        static::created(function ($town) {
            $town->country()->associate(request()->country->id);
            $town->save();
        });

		self::updating(function($town){
        $town->country()->associate(request()->country->id);
        });
	}

    public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
