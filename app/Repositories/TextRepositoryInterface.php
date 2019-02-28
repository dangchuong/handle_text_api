<?php

namespace App\Repositories;

interface TextRepositoryInterface
{

    /**
     * Get current text
     *
     * @return \App\Text
     */
    public function getFirst();

    /**
     * Change color of cup
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeColorCup($request);

    /**
     * Change type of drink
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTypeDrink($request);

    /**
     * Change table material
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTableMaterial($request);

    /**
     * Change temperature
     *
     * @param $request Request
     *
     * @return \App\Text
     */
    public function changeTemperature($request);

}
