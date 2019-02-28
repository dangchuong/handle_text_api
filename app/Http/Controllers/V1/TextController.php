<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Services\TextService;
use App\Services\ColorCupService;
use App\Services\TypeDrinkService;
use App\Services\TableMaterialService;
use App\Services\TemperatureService;
use App\Http\Controllers\V1\BaseController;
use Exception;
use App\Exceptions\UnprocessableException;
use Symfony\Component\HttpFoundation\Response;

class TextController extends BaseController
{
	/**
	 * TextService
	 *
	 * @var TextService
	**/
	protected $textService;

	/**
	 * ColorCupService
	 *
	 * @var ColorCupService
	**/
	protected $colorCupService;

	/**
	 * TypeDrinkService
	 *
	 * @var TypeDrinkService
	**/
	protected $ypeDrinkService;

	/**
	 * TableMaterialService
	 *
	 * @var TableMaterialService
	**/
	protected $tableMaterialService;

	/**
	 * TemperatureService
	 *
	 * @var TemperatureService
	**/
	protected $temperatureService;

	/**
	 * Constructor
	 * @param TextService
     * @param ColorCupService
     * @param TypeDrinkService
     * @param TableMaterialService
	 * @param TemperatureService
     *
     * @return void
	**/
	public function __construct(
		TextService $textService,
		ColorCupService $colorCupService,
		TypeDrinkService $typeDrinkService,
		TableMaterialService $tableMaterialService,
		TemperatureService $temperatureService
	)
	{
		$this->textService = $textService;
		$this->colorCupService = $colorCupService;
		$this->typeDrinkService = $typeDrinkService;
		$this->tableMaterialService = $tableMaterialService;
		$this->temperatureService = $temperatureService;
	}

    /**
     * Show current text 
     *
     * @return \Illuminate\Http\Response
    **/
    public function showCurrentText()
    {
    	try {
    		$data = $this->textService->handle();
    		return $this->responseSuccess(trans('messages.successed'), $data);
    	} catch (Exception $e) {
    		return $this->responseError($e->getMessage());
    	}
    }

    /**
     * Change color of cup
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
    **/
    public function changeColorCup(Request $request)
    {
    	try {
    		$this->colorCupService->handle($request);
    		return $this->responseSuccess(trans('messages.successed'));
    	} catch (UnprocessableException $e) {
    		return $this->responseError(
    			trans('messages.data_invalid.color_cup'),
    			[$e->getErrors()],
    			Response::HTTP_UNPROCESSABLE_ENTITY
    		);
    	} catch (Exception $e) {
    		return $this->responseError($e->getMessage());
    	}
    }

    /**
     * Change type of drink
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
    **/
    public function changeTypeDrink(Request $request)
    {
    	try {
    		$this->typeDrinkService->handle($request);
    		return $this->responseSuccess(trans('messages.successed'));
    	} catch (UnprocessableException $e) {
    		return $this->responseError(
    			trans('messages.data_invalid.type_drink'),
    			[$e->getErrors()],
    			Response::HTTP_UNPROCESSABLE_ENTITY
    		);
    	} catch (Exception $e) {
    		return $this->responseError($e->getMessage());
    	}
    }

    /**
     * Change table material
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
    **/
    public function changeTableMaterial(Request $request)
    {
    	try {
    		$this->tableMaterialService->handle($request);
    		return $this->responseSuccess(trans('messages.successed'));
    	} catch (UnprocessableException $e) {
    		return $this->responseError(
    			trans('messages.data_invalid.table_material'),
    			[$e->getErrors()],
    			Response::HTTP_UNPROCESSABLE_ENTITY
    		);
    	} catch (Exception $e) {
    		return $this->responseError($e->getMessage());
    	}
    }

    /**
     * Change temperature
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
    **/
    public function changeTemperature(Request $request)
    {
    	try {
    		$this->temperatureService->handle($request);
    		return $this->responseSuccess(trans('messages.successed'));
    	} catch (UnprocessableException $e) {
    		return $this->responseError(
    			trans('messages.data_invalid.temperature'),
    			[$e->getErrors()],
    			Response::HTTP_UNPROCESSABLE_ENTITY
    		);
    	} catch (Exception $e) {
    		return $this->responseError($e->getMessage());
    	}
    }
}
