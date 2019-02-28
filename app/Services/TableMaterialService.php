<?php

namespace App\Services;

use App\Services\BaseService;
use Validator;
use App\Exceptions\UnprocessableException;

class TableMaterialService extends BaseService
{
	/**
     * Change table material
     *
     * @param Request $request
     * @return void
    **/
	public function handle($request)
	{
		$this->validate($request);
		
		return $this->text->changeTableMaterial($request);
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
		$validator = Validator::make($request->only('table_material'), [
            'table_material' => 'required|in:' . config('const.table_material')
        ]);

        if ($validator->fails()) {
        	throw new UnprocessableException($validator->errors()->first('table_material'));
        }
	}

}