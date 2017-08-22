<?php

namespace CollingMedia\Infusionsoft;

class Contact extends Infusionsoft {
	/**
	 * @var string
	 */
	private $contactId;

	/**
	 * Contacts constructor.
	 *
	 * @param array $accessToken
	 *
	 * @param string $contactId
	 *
	 * @throws \Exception
	 */
	public function __construct( array $accessToken = [], string $contactId) {
		parent::__construct( $accessToken );
		if(!isset($this->options['access_token'])) {
			throw new \Exception('Access token must be set.');
		}
		$this->contactId = $contactId;
	}

	/**
	 *
	 * Get Contact
	 *
	 * Get the contact from
	 * Infusionsoft with any
	 * information you can get.
	 *
	 * @return mixed
	 */
	public function get() {
		$request = $this->send("GET", "contacts/" . $this->contactId, [
			'headers' => [
				'Accept' => 'application/json, */*',
			]
		]);
		return $request;
	}

	/**
	 *
	 * List Tags
	 *
	 * Lists applied tags from
	 * the contact.
	 *
	 * @return mixed
	 */
	public function listTags() {
		$request = $this->send("GET", "contacts/" . $this->contactId . '/tags', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
		]);
		return $request;
	}

	/**
	 *
	 * Apply Tags
	 *
	 * Apply tags to the contact.
	 *
	 * @param array $tagIds
	 *
	 * @return mixed
	 */
	public function applyTags(array $tagIds) {
		$query = [];
		$query['tagIds'] = $tagIds;
		$request = $this->send("POST", "contacts/" . $this->contactId . '/tags', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'json' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Remove Applied Tag
	 *
	 * Removes a tag from
	 * the contact specified.
	 *
	 * @param string $tagId
	 *
	 * @return mixed
	 */
	public function deleteTag(string $tagId) {
		$query = [];
		$query['tagId'] = $tagId;
		$request = $this->send("DELETE", "contacts/" . $this->contactId . '/tags', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'json' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Remove Applied Tags
	 *
	 * Removes a list of tags from
	 * the contact specified.
	 *
	 * @param array $tagIds
	 *
	 * @return mixed
	 */
	public function deleteTags(array $tagIds) {
		$query = [];
		$query['ids'] = $tagIds;
		$request = $this->send("DELETE", "contacts/" . $this->contactId . '/tags', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'json' => $query
		]);
		return $request;
	}
}