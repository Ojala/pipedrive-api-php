<?php

/**
 * Pipedrive Stages Methods
 *
 */
class Stages
{
	/**
	 * Hold the pipedrive cURL session
	 * @var Curl Object
	 */
	protected $curl;

	/**
	 * Initialise the object load master class
	 */
	public function __construct(Pipedrive $master)
	{
		//associate curl class
		$this->curl = $master->curl();
	}

	/**
	 * Get all stages
	 *
	 * @return array returns with all stages
	 */
	public function getStages()
	{
		return $this->curl->get('stages');
	}

	/**
	 * Returns a stage
	 *
	 * @param  int   $id pipedrive stage id
	 * @return array returns detials of a stage
	 */
	public function getById($id)
	{
		return $this->curl->get('stages/' . $id);
	}
}
