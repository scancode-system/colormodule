<?php

namespace Modules\Color\Repositories;

use Modules\Color\Entities\Color;

class ColorRepository
{

	// SAVE
	public static function store($data)
	{
		return Color::create($data);
	}
 
	// LOAD
	public static function load(){
		return Color::all();
	}

	public static function loadToSelect($value, $description){
		return Color::pluck($description, $value);
	}

	public static function loadByName($name)
	{
		return Color::where('name', $name)->first();
	}

}
