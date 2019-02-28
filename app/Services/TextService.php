<?php

namespace App\Services;

use App\Services\BaseService;

class TextService extends BaseService
{
	/**
     * Handle get current text
     *
     * @return string
    **/
	public function handle()
	{
		$result = $this->text->getFirst();

		if (!$result) {
			throw new \Exception(trans('messages.server_error'));
		}
		return $this->getCurrentText($result);
		
	}

	/**
     * Get current text
     *
     * @param $data Array
     * @return string
    **/
	private function getCurrentText($data)
	{
		$colorCup = $data->color_cup ?? [];
		$temperature = $data->temperature ?? [];
		$typeDrink = $data->type_drink ?? [];
		$tableMaterial = $data->table_material ?? [];
		return "There is a {$colorCup} cup of {$temperature} {$typeDrink} on the {$tableMaterial} desk";
	}
}