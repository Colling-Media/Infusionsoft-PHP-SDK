<?php

namespace CollingMedia\Infusionsoft;

class Contacts extends Infusionsoft {

	/**
	 * Contacts constructor.
	 *
	 * @param array $accessToken
	 *
	 * @throws \Exception
	 */
	public function __construct( array $accessToken = [] ) {
		parent::__construct( $accessToken );
		if(!isset($this->access_token['access_token'])) {
			throw new \Exception('Access token must be set.');
		}
	}

	/**
	 *
	 * List all contacts in Infusionsoft
	 *
	 * @param int $limit - 1000 is the max able to be returned at once
	 * @param null $offset
	 * @param null $email
	 * @param null $given_name
	 * @param null $family_name
	 * @param null $order
	 *
	 * @return mixed
	 */
	public function listContacts($limit = 1000, $offset = null, $email = null, $given_name = null, $family_name = null, $order = null) {
	    $query = [];
	    if($limit)
		    $query['limit'] = $limit;
	    if($offset)
		    $query['offset'] = $offset;
	    if($email)
		    $query['email'] = $email;
	    if($given_name)
		    $query['given_name'] = $given_name;
	    if($family_name)
		    $query['family_name'] = $family_name;
	    if($order)
		    $query['order'] = $order;

		$request = $this->send("GET", "contacts", [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
    }
}