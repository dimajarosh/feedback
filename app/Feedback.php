<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
	public $fillable = ['name', 'email', 'description', 'rating', 'photo'];

	public static function sum_rating() {
		return static::avg('rating');
	}

	public static function counts() {
		return static::count();
	}

	public static function arr_statist() {
		$arr_stat = [];
		for($i=1; $i<=5; $i++) {
			array_push($arr_stat, static::where('rating', $i)->count() / static::count() * 100);
		}
		// dd($arr_stat);
		return $arr_stat;
	}
}
