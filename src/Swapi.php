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

	/**
	 * @param $entity
	 * @param $id
	 * @return array|mixed
	 */
	public static function find($entity, $id)
	{
		return Http::get("https://swapi.dev/api/{$entity}/{$id}/")->json();
	}
}