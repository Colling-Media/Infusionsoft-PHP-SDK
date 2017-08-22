<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Contact
 */
final class ContactTest extends TestCase {

	protected $infusionsoft;
	protected $contact;

	public function setup() {
		$this->infusionsoft = new \CollingMedia\Infusionsoft\Infusionsoft([
			"client_id" => getenv("INFUSIONSOFT_CLIENT_ID"),
			"client_secret" => getenv("INFUSIONSOFT_CLIENT_SECRET"),
			"redirect_uri" => getenv("INFUSIONSOFT_REDIRECT_URI"),
			"access_token" => json_decode(getenv("INFUSIONSOFT_ACCESS_TOKEN_JSON"), true)
		]);
	}

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
		$this->contact = $response;
		var_dump($this->contact);
		$this->assertTrue(($this->contact['id'] > 0));
	}

	public function testUpdateContact() {
		$this->assertNotTrue(false);
	}

	public function testDeleteContact() {
		var_dump($this->contact);
		$response = $this->infusionsoft->contacts()->deleteContact($this->contact['id']);
		$this->assertTrue(($response->getStatusCode() == 201));
	}

}