<?php

namespace CollingMedia\Infusionsoft;

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
	 * @param int $limit - 1000 is the max able to be returned at once
	 * @param null $offset
	 *
	 * @return mixed
	 */
	public function listCampaigns($limit = 1000, $offset = null) {
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
	 * @param $campaignId
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
}