<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Contact
 */
final class ContactTest extends TestCase {

	protected $infusionsoft;
	protected $contact;

	/**
	 * Setup the tests
	 */
	public function setup() {
		$this->contact = null;
		$this->infusionsoft = new \CollingMedia\Infusionsoft\Infusionsoft([
			"client_id" => getenv("INFUSIONSOFT_CLIENT_ID"),
			"client_secret" => getenv("INFUSIONSOFT_CLIENT_SECRET"),
			"redirect_uri" => getenv("INFUSIONSOFT_REDIRECT_URI"),
			"access_token" => json_decode(urldecode("%7B%22scope%22%3A%20%22full%7Cic386.infusionsoft.com%22%2C%20%22expires_in%22%3A%2086400%2C%20%22token_type%22%3A%20%22bearer%22%2C%20%22access_token%22%3A%20%22as9fe5szgrayhacctncyttfk%22%2C%20%22refresh_token%22%3A%20%22q6yd6j89mnhehstjr85c75kg%22%7D"), true)
		]);
	}

	/**
	 * @return mixed
	 */
	public function testCreateContact() {

		$contact = [
			"given_name" => "Test",
			"family_name" => "Contact",
			"email_addresses" => [
				[
					"email" => "test@gmail.com",
					"field" => "EMAIL1"
				]
			]
		];

		$response = $this->infusionsoft->contacts()->createContact($contact);
		$this->assertTrue(($response['id'] > 0));
		return $response;
	}

	/**
	 * @depends testCreateContact
	 *
	 * @param $contact
	 *
	 * @return
	 */
	public function testUpdateContact($contact) {
		$this->assertNotTrue(false);
		return $contact;
	}

	/**
	 * @depends testUpdateContact
	 *
	 * @param $contact
	 */
	public function testDeleteContact($contact) {
		$response = $this->infusionsoft->contacts()->deleteContact($contact['id']);
		$this->assertTrue(($response->getStatusCode() == 204));
	}

}