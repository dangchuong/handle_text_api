<?php

namespace App\Exceptions;

class UnprocessableException extends \Exception
{
	/**
	 * MessageBag
	 *
	 * @var $errors
	**/
	protected $errors;

	/**
	 * @param $errors
	 *
	 * @return void
	**/
	public function __construct($errors)
	{
		$this->errors = $errors;
	}

	/**
	 * Get errors message
	 *
	 * @return MessageBag
	**/
	public function getErrors()
	{
		return $this->errors;
	}
}