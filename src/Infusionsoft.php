<?php

namespace CollingMedia\Infusionsoft;

use Countable;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class Infusionsoft implements Countable {

	/**
	 * URL
	 *
	 * The endpoint for all interactions on Infusionsoft.
	 *
	 * @var string
	 */
	protected $url = 'https://api.infusionsoft.com/crm/rest/v1/';

	/**
	 * Client
	 *
	 * The client used by Guzzle and all functions in the package.
	 *
	 * @var object
	 */
	protected $client = null;

	/**
	 * Access Token
	 *
	 * The access token used for all requests.
	 *
	 * @var array
	 */
	protected $access_token = null;

	/**
	 * Options
	 *
	 * The options config that includes the `client_id`,
	 * `client_secret`, `redirect_uri`, and `access_token`.
	 *
	 * @var array
	 */
	protected $options;

	/**
	 * Count
	 *
	 * A counter.
	 *
	 * @var int
	 */
	private $count = 0;


	/**
	 * Infusionsoft constructor.
	 *
	 * @param array $options The options config array. See $options variable.
	 *
	 * @throws \Exception
	 */
	public function __construct(array $options = [])
	{
		$required = ['client_id', 'client_secret', 'redirect_uri'];
		foreach($required AS $item) {
			if(!isset($options[$item])) {
				throw new \Exception($item . ' must be set in the options.');
			}
		}
		$this->options = $options;
		if(isset($this->options['authorize'])) {
			$headers = [];
		} else {
			$headers = [
				'Authorization' => 'Bearer ' . (isset($this->options['access_token'])?$this->options['access_token']['access_token']:null)
			];
		}
		$this->client = new Client([
			'base_uri' => $this->url,
			'headers' => $headers
		]);
	}

	/**
	 * Authorization Class
	 *
	 * Returns the Authorize Class
	 *
	 * @return Authorize
	 */
	protected function authorize() {
		return new Authorize($this->options);
	}

	/**
	 * Contacts Class
	 *
	 * Returns the Contacts Class
	 *
	 * @return Contacts
	 */
	protected function contacts() {
		return new Contacts($this->options);
	}

	/**
	 * Contact Class
	 *
	 * Returns the Contact Class
	 *
	 * @param string $contactId The ID of the contact you want to interact with.
	 *
	 * @return Contact
	 */
	protected function contact(string $contactId) {
		return new Contact($this->options, $contactId);
	}

	/**
	 * Campaigns Class
	 *
	 * Returns the Campaigns Class
	 *
	 * @return Campaigns
	 */
	protected function campaigns() {
		return new Campaigns($this->options);
	}

	/**
	 * Ecommerce Class
	 *
	 * Returns the Ecommerce Class
	 *
	 * @return Ecommerce
	 */
	protected function ecommerce() {
		return new Ecommerce($this->options);
	}

	/**
	 * Send
	 *
	 * Sends the request on through Guzzle and returns
	 * either the request object or array.
	 *
	 * @param string $method The method used in the request (GET, POST, DELETE, PATCH, PUT...)
	 * @param string $url The URL the request should be made to.
	 * @param array $options The options you need for the GuzzleHTTP request.
	 * @param bool $array Return array, or the request object? (true for array, false for request object)
	 *
	 * @return Response|array
	 */
	protected function send(string $method, string $url, array $options, $array = true) {
		$request = $this->client->request($method, $url, $options);
		if(!$array) {
			return $request;
		} else {
			return json_decode( $request->getBody()->getContents() , true);
		}
	}
}