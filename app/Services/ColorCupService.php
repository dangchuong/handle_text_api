<?php

namespace App\Services;

use App\Services\BaseService;
use Validator;
use App\Exceptions\UnprocessableException;

class ColorCupService extends BaseService
{
	/**
     * Change color of cup
     *
     * @param Request $request
     * @return void
    **/
	public function handle($request)
	{
		$this->validate($request);
		
		return $this->text->changeColorCup($request);
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
		$validator = Validator::make($request->only('color'), [
            'color' => 'required|in:' . config('const.color_cup')
        ]);

        if ($validator->fails()) {
        	throw new UnprocessableException($validator->errors()->first('color'));
        }
	}

}