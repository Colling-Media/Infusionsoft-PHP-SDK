<?php

namespace CollingMedia\Infusionsoft;

use GuzzleHttp\Client;

class Infusionsoft {

    protected $url = 'https://api.infusionsoft.com/crm/rest/v1/';
    protected $client = null;
    protected $access_token = null;
    protected $client_id = null;
    protected $client_secret = null;
	protected $redirect_uri = null;
	protected $options;


	/**
	 * Infusionsoft constructor.
	 *
	 * @param array $options
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
        $this->client = new Client([
            'base_uri' => $this->url,
	        'headers' => [
	        	'Authorization' => 'Bearer ' . (isset($this->options['access_token'])?$this->options['access_token']['access_token']:null)
	        ]
        ]);
    }

	/**
	 * @return Authorize
	 */
	public function authorize() {
    	return new Authorize();
    }

	/**
	 * @return Contacts
	 */
	public function contacts() {
		return new Contacts($this->options);
	}

	/**
	 * @return Campaigns
	 */
	public function campaigns() {
		return new Campaigns($this->options);
	}

	/**
	 * @param string $method
	 * @param string $url
	 * @param array $options
	 *
	 * @return mixed
	 */
	protected function send(string $method, string $url, array $options) {
    	$request = $this->client->request($method, $url, $options);
    	return json_decode($request->getBody()->getContents());
    }
}