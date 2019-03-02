<?php

namespace App\Services;
use App\Repositories\TextRepositoryInterface;

class BaseService
{
	/**
	* @var $test TextRepositoryInterface
	**/
	protected $text;

	/**
	 * Constructor
	 *
	 * @param $text TextRepositoryInterface
	 *
	 * @return void
	**/
	public function __construct(TextRepositoryInterface $text)
	{
		$this->text = $text;

	}
}