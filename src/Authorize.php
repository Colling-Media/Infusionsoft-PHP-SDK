<?php

namespace CollingMedia\Infusionsoft;


class Authorize extends Infusionsoft {

	/**
	 * Authorize constructor.
	 *
	 * @param array $options
	 *
	 * @throws \Exception
	 */
	public function __construct( array $options = [] ) {
		$options['authorize'] = true;
		parent::__construct( $options );
	}

	/**
	 *
	 * Get the URL required to authorize a new connection
	 *
	 * @param string $scopes
	 *
	 * @return string
	 */
	public function getAuthorizationUrl($scopes = 'full') {
		return 'https://signin.infusionsoft.com/app/oauth/authorize?client_id=' . $this->options['client_id'] . '&response_type=code&scope=' . $scopes . '&redirect_uri=' . $this->options['redirect_uri'];
	}

	/**
	 *
	 * Exchange the code for an access token from Infusionsoft
	 *
	 * @param $code
	 *
	 * @return mixed
	 */
	public function getToken($code) {
		$request = $this->send("POST", "https://api.infusionsoft.com/token", [
			'form_params' => [
				'client_id' => $this->options['client_id'],
				'client_secret' => $this->options['client_secret'],
				'code' => $code,
				'grant_type' => 'authorization_code',
				'redirect_uri' => $this->options['redirect_uri']
			]
		]);
		return $request;
	}

	/**
	 *
	 * Refresh the Access Token
	 *
	 * @param $token
	 *
	 * @return mixed
	 */
	public function refreshToken($token) {
		$request = $this->send("POST", "https://api.infusionsoft.com/token", [
			'form_params' => [
				'refresh_token' => $token,
				'grant_type' => 'refresh_token',
			],
			'headers' => [
				'Authorization' => 'Basic' . base64_encode($this->options['client_id'] . ':' . $this->options['client_secret'])
			]
		]);
		return $request;
	}

}