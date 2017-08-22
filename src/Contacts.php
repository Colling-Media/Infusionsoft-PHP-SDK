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
		if(!isset($this->options['access_token'])) {
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
	    //Building the query
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

	    //Sending the request
		$request = $this->send("GET", "contacts", [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
    }

    public function createContact(array $contact) {
		//Checking for the required fields
	    if(!isset($contact['email_addresses']) && !isset($contact['phone_numbers'])) {
		    throw new \Exception('Either an email address or phone number is required to create a contact');
	    }
	    if(isset($contact['phone_numbers'])) {
		    foreach ( $contact['phone_numbers'] AS $phone_number ) {
			    if ( ! isset( $phone_number['field'] ) ) {
				    throw new \Exception( 'The field is required for all phone numbers, ie PHONE1 to PHONE5, etc.' );
			    }
			    if ( ! isset( $phone_number['number'] ) ) {
				    throw new \Exception( 'The phone number is required for all phone numbers, it should be 10 digits long' );
			    }
		    }
	    }
	    if(isset($contact['email_addresses'])) {
		    foreach ( $contact['email_addresses'] AS $email_address ) {
			    if ( ! isset( $email_address['field'] ) ) {
				    throw new \Exception( 'The field is required for all email addresses, ie EMAIL1 to EMAIL3, etc.' );
			    }
			    if ( ! isset( $email_address['email'] ) ) {
				    throw new \Exception( 'The email address is required for all email addresses, and it should be in a valid format' );
			    }
		    }
	    }

		//Sending the request
		$request = $this->send("POST", 'contacts', [
			'headers' => [
				'Accept' => 'application/json, */*'
			],
			'json' => $contact
		]);
		return $request;
    }


    public function deleteContact($contactId) {
		$request = $this->send("DELETE", 'contacts/' . $contactId, [
			'headers' => [
				'Accept' => 'application/json, */*'
			]
		]);
		return $request;
    }
}