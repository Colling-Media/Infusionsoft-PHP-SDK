<?php
/**
 * Created by PhpStorm.
 * User: BrianLogan
 * Date: 8/22/2017
 * Time: 7:44 PM
 */

namespace CollingMedia\Infusionsoft;

use Carbon\Carbon;

/**
 * Class Products
 *
 * All functions that interact with products
 * in Infusionsoft.
 *
 * @package CollingMedia\Infusionsoft
 *
 */

class Products extends Infusionsoft {

	/**
	 * Appointments constructor.
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
     * List products
     *
     * @return mixed
     */
	public function listProducts() {

	    // TODO: Implement listProducts() method.

//		$query = [];
//		if($limit)
//			$query['limit'] = $limit;
//        if($offset)
//            $query['offset'] = $offset;
//
//		$request = $this->send("GET", "appointments", [
//			'headers' => [
//				'Accept' => 'application/json, */*',
//			],
//			'query' => $query
//		]);
//		return $request;
	}

    /**
     *
     * Get Product
     *
     * @return mixed
     */
    public function getProduct() {

        // TODO: Implement getProduct() method.

//        $request = $this->send("GET", "appointments/" . $appointmentId, [
//            'headers' => [
//                'Accept' => 'application/json, */*',
//            ],
//        ]);
//        return $request;
    }

    /**
     *
     * Retrieve Synced Products
     *
     * @return mixed
     *
     */
    public function syncProducts() {

        // TODO: Implement syncProducts() method.

//        $request = $this->send("POST", "appointments/" . $appointmentId, [
//            'headers' => [
//                'Accept' => 'application/json, */*',
//            ],
//        ]);
//        return $request;
    }

}