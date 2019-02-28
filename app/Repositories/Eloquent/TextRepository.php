<?php

namespace App\Repositories\Eloquent;

use App\Text;
use App\Repositories\TextRepositoryInterface;

class TextRepository extends AbstractRepository implements TextRepositoryInterface
{

    /**
     * $firstRecord App\Text
    **/
    protected $firstRecord;

    /**
     * Constructor
     *
     * @return void
    **/
    public function __construct()
    {
        parent::__construct();
        $this->firstRecord = $this->getFirst();
    }
    /**
     * Specify Model class name
     *
     * @return Text
     */
    public function model()
    {
        return Text::class;
    }

    /**
     * Get current text
     *
     * @return \App\Text
     */
    public function getFirst()
    {
        return $this->model->first();
    }

    /**
     * Change color of cup
     *
     * @return \App\Text
     */
    public function changeColorCup($request)
    {
        $this->firstRecord->color_cup = $request->color;
        return $this->firstRecord->save();
    }

    /**
     * Change type of drink
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTypeDrink($request)
    {
        $this->firstRecord->type_drink = $request->type_drink;
        return $this->firstRecord->save();
    }

    /**
     * Change table material
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTableMaterial($request)
    {
        $this->firstRecord->table_material = $request->table_material;
        return $this->firstRecord->save();
    }

    /**
     * Change temperature
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTemperature($request)
    {
        $this->firstRecord->temperature = $request->temperature;
        return $this->firstRecord->save();
    }
}
