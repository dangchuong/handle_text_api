<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    /**
     * Model
     *
     * @var Model
     */
    protected $model;

    /**
     * Contructor
     *
     * @param Application $app
     *
     * @return void
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract public function model();

    /**
     * Get Model instace
     *
     * @return Model
     */
    public function makeModel()
    {
        $model = app()->make($this->model());
        return $this->model = $model;
    }

}
