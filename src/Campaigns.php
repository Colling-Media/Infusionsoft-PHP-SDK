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
	 * List all campaigns in Infusionsoft
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
	 * Get a campaign from Infusionsoft
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