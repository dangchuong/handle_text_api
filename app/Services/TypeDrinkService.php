<?php

namespace App\Services;

use App\Services\BaseService;
use Validator;
use App\Exceptions\UnprocessableException;

class TypeDrinkService extends BaseService
{
	/**
     * Change type drink
     *
     * @param Request $request
     * @return void
    **/
	public function handle($request)
	{
		$this->validate($request);
		
		return $this->text->changeTypeDrink($request);
	}

	/**
     * Validate requesst
     *
     * @param Request $request
     *
     * @throws UnprocessableException
     * @return void
    **/
	private function validate($request)
	{
		$validator = Validator::make($request->only('type_drink'), [
            'type_drink' => 'required|in:' . config('const.type_drink')
        ]);

        if ($validator->fails()) {
        	throw new UnprocessableException($validator->errors()->first('type_drink'));
        }
	}

}