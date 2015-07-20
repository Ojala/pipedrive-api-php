<?php namespace Benhawker\Pipedrive\Library;

/**
 * Pipedrive Users Methods
 *
 */
class Users
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
	 * Get all users
	 *
	 * @return array returns with all users
	 */
	public function getUsers()
	{
		return $this->curl->get('users');
	}

	/**
	 * Returns a user
	 *
	 * @param  int   $id pipedrive user id
	 * @return array returns detials of a user
	 */
	public function getById($id)
	{
		return $this->curl->get('users/' . $id);
	}

	/**
	* Return a user by name
	*
	* @param string $name user pipedrive
	* @return array returns details of user
	*/
	public function getByName($name)
	{
		return $this->curl->get('users/find', array('term' => $name));
		
	}
}
