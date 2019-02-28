<?php

namespace App\Services;

use App\Services\BaseService;
use Validator;
use App\Exceptions\UnprocessableException;

class TemperatureService extends BaseService
{
	/**
     * Change temperature
     *
     * @param Request $request
     * @return void
    **/
	public function handle($request)
	{
		$this->validate($request);
		
		return $this->text->changeTemperature($request);
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
		$validator = Validator::make($request->only('temperature'), [
            'temperature' => 'required|in:' . config('const.temperature')
        ]);

        if ($validator->fails()) {
        	throw new UnprocessableException($validator->errors()->first('temperature'));
        }
	}

}