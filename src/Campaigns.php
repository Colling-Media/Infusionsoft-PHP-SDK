<?php

namespace CollingMedia\Infusionsoft;

/**
 * Class Campaigns
 * @package CollingMedia\Infusionsoft
 *
 * All functions that interact with campaigns
 * in Infusionsoft.
 *
 */

class Campaigns extends Infusionsoft {

	/**
	 * Campaigns constructor.
	 *
	 * @param array $options
	 *
	 * @throws \Exception
	 *
	 */
	public function __construct( array $options = [] ) {
		parent::__construct( $options );
		if(!isset($this->options['access_token'])) {
			throw new \Exception('Access token must be set.');
		}
	}

	/**
	 *
	 * List Campaigns
	 *
	 * Get a list of all of the campaigns
	 * in Infusionsoft, paginated. The max
	 * is 1000 records per page. Offset is
	 * the number of records you want to skip
	 * at the beginning, for instance, if your
	 * limit is 100, and you have 200 campaigns,
	 * the offset for page 2 should be 100.
	 *
	 * @param int $limit The limit you want to get per page. Max is 1000
	 * @param int $offset The offset from the start. (for pagination)
	 *
	 * @return mixed
	 */
	public function listCampaigns(int $limit = 1000, int $offset = null) {
		$query = [];
		if($limit)
			$query['limit'] = $limit;
		if($offset)
			$query['offset'] = $offset;

		$request = $this->send("GET", "campaigns", [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Get Campaign
	 *
	 * Get a specific campaign
	 * from Infusionsoft, seeing more
	 * details than you would through
	 * the List Campaigns function.
	 *
	 * @param $campaignId The ID of the campaign ou want to retrieve.
	 *
	 * @return mixed
	 */
	public function getCampaign($campaignId) {
		$query = [];
		$query['optional_properties'] = 'goals,sequences';
		$request = $this->send("GET", "campaigns/" . $campaignId, [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Add Contacts to Campaign Sequence
	 *
	 * Add contacts to a campaign sequence
	 * based on the Contact ID, Campaign ID,
	 * and Sequence ID.
	 *
	 * @param string $campaignId The ID of the campaign.
	 * @param string $sequenceId The ID of the sequence.
	 * @param array $contactIds An array of IDs of contacts you want to add.
	 *
	 * @return mixed
	 */
	public function addContactsToCampaignSequence(string $campaignId, string $sequenceId, array $contactIds) {
		$query = [];
		$query['ids'] = $contactIds;
		$request = $this->send("POST", "campaigns/" . $campaignId . '/sequences/' . $sequenceId . '/contacts', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Add a Contact to Campaign Sequence
	 *
	 * Add a contact to a campaign sequence
	 * based on the Contact ID, Campaign ID,
	 * and Sequence ID.
	 *
	 * @param string $campaignId The ID of the campaign.
	 * @param string $sequenceId The ID of the sequence.
	 * @param string $contactId The ID of the contact you want to add.
	 *
	 * @return mixed
	 */
	public function addContactToCampaignSequence(string $campaignId, string $sequenceId, string $contactId) {
		$query = [];
		$query['contactId'] = $contactId;
		$request = $this->send("POST", "campaigns/" . $campaignId . '/sequences/' . $sequenceId . '/contacts', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Remove Contacts from a Campaign Sequence
	 *
	 * Remove contacts from a campaign
	 * sequence, based on Contact IDs,
	 * Campaign ID, and Sequence ID.
	 *
	 * @param string $campaignId The ID of the campaign.
	 * @param string $sequenceId The ID of the sequence.
	 * @param array $contactIds An array of IDs you want to remove.
	 *
	 * @return mixed
	 */
	public function removeContactsFromCampaignSequence(string $campaignId, string $sequenceId, array $contactIds) {
		$query = [];
		$query['ids'] = $contactIds;
		$request = $this->send("DELETE", "campaigns/" . $campaignId . '/sequences/' . $sequenceId . '/contacts', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Remove Contact from a Campaign Sequence
	 *
	 * Remove a contact from a campaign
	 * sequence, based on Contact ID,
	 * Campaign ID, and Sequence ID.
	 *
	 * @param string $campaignId The ID of the campaign.
	 * @param string $sequenceId The ID of the sequence.
	 * @param string $contactId The ID of the contact you want to remove.
	 *
	 * @return mixed
	 */
	public function removeContactFromCampaignSequence(string $campaignId, string $sequenceId, string $contactId) {
		$query = [];
		$query['contactId'] = $contactId;
		$request = $this->send("DELETE", "campaigns/" . $campaignId . '/sequences/' . $sequenceId . '/contacts', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}
}