<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Services\TextService;
use App\Services\ColorCupService;
use App\Services\TypeDrinkService;
use App\Services\TableMaterialService;
use App\Services\TemperatureService;
use App\Http\Controllers\Controller;
use Exception;

class TextController extends Controller
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

    public function showCurrentText()
    {
    	try {
    		$this->textService->handle();
    	} catch (Exception $e) {
    		
    	}
    }

    public function changeColorCup()
    {
    	try {

    	} catch (Exception $e) {
    		
    	}
    }

    public function changeTypeDrink()
    {
    	try {
    		
    	} catch (Exception $e) {
    		
    	}
    }

    public function changeTableMaterial()
    {
    	try {
    		
    	} catch (Exception $e) {
    		
    	}
    }

    public function changeTemperature()
    {
    	try {
    		
    	} catch (Exception $e) {
    		
    	}
    }
}
