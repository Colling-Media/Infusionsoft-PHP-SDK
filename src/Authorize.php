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
	 * Get Authorization URL
	 *
	 * Returns the URL required to go
	 * through the oAuth process,
	 * requesting access to 'full' scopes
	 * by default.
	 *
	 * * 'full' scope is currently the only one available *
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
	 * Get Token
	 *
	 * Exchange the `code` you receive
	 * from Infusionsoft in the return from
	 * the oAuth process, for an access
	 * token to be used on future calls.
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
	 * Refresh Token
	 *
	 * Refresh the access token you have
	 * by automatically requesting the
	 * new token. This is based on the
	 * array passed in the constructor.
	 *
	 * YOU SHOULD SAVE THE NEW TOKEN
	 * ARRAY IN PLACE OF THE OLD ONE
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