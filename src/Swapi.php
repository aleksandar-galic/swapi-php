<?php

namespace Gale\Swapi;

use Illuminate\Support\Facades\Http;

class Swapi
{
	/**
	 * @return mixed
	 */
	public static function planets()
	{
		return Http::get('https://swapi.dev/api/planets/')->json()['results'];
	}
}