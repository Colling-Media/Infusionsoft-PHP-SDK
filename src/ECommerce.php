<?php

namespace CollingMedia\Infusionsoft;

class ECommerce extends Infusionsoft {

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
	 * List Orders
	 *
	 * Get a list of all of the orders
	 * in Infusionsoft, paginated. The max
	 * is 1000 records per page. Offset is
	 * the number of records you want to skip
	 * at the beginning, for instance, if your
	 * limit is 100, and you have 200 orders,
	 * the offset for page 2 should be 100.
	 *
	 * @param null|string $since
	 * @param null|string $until
	 * @param int $limit - 1000 is the max able to be returned at once
	 * @param null|string $offset
	 * @param null|bool $paid
	 * @param null|string $order
	 * @param null|string $contactId
	 * @param null|string $productId
	 *
	 * @return mixed
	 */
	public function listOrders(string $since = null, string $until = null, $limit = 1000, string $offset = null, bool $paid = null, string $order = null, string $contactId = null, string $productId = null) {
		$query = [];
		if($since)
			$query['since'] = $since;
		if($until)
			$query['until'] = $until;
		if($limit)
			$query['limit'] = $limit;
		if($offset)
			$query['offset'] = $offset;
		if($paid)
			$query['paid'] = $paid;
		if($order)
			$query['order'] = $order;
		if($contactId)
			$query['contact_id'] = $contactId;
		if($productId)
			$query['product_id'] = $productId;

		$request = $this->send("GET", "orders", [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Get Order
	 *
	 * Get a specific order
	 * from Infusionsoft, seeing more
	 * details than you would through
	 * the List Orders function.
	 *
	 * @param $orderId
	 *
	 * @return mixed
	 */
	public function getOrder($orderId) {
		$request = $this->send("GET", "orders/" . $orderId, [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
		]);
		return $request;
	}

	/**
	 *
	 * List Transactions
	 *
	 * Get a list of all of the transactions
	 * in Infusionsoft, paginated. The max
	 * is 1000 records per page. Offset is
	 * the number of records you want to skip
	 * at the beginning, for instance, if your
	 * limit is 100, and you have 200 transactions,
	 * the offset for page 2 should be 100.
	 *
	 * @param null|string $since
	 * @param null|string $until
	 * @param int $limit - 1000 is the max able to be returned at once
	 * @param null|string $offset
	 * @param null|string $contactId
	 *
	 * @return mixed
	 */
	public function listTransactions(string $since = null, string $until = null, $limit = 1000, string $offset = null, string $contactId = null) {
		$query = [];
		if($since)
			$query['since'] = $since;
		if($until)
			$query['until'] = $until;
		if($limit)
			$query['limit'] = $limit;
		if($offset)
			$query['offset'] = $offset;
		if($contactId)
			$query['contact_id'] = $contactId;

		$request = $this->send("GET", "transactions", [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}

	/**
	 *
	 * Get Transaction
	 *
	 * Get a specific transaction
	 * from Infusionsoft, seeing more
	 * details than you would through
	 * the List Transactions function.
	 *
	 * @param string $transactionId
	 *
	 * @return mixed
	 */
	public function getTransaction(string $transactionId) {
		$request = $this->send("GET", "transactions/" . $transactionId, [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
		]);
		return $request;
	}

	/**
	 *
	 * List Order Transactions
	 *
	 * Get a list of all of the transactions
	 * for a specific order from Infusionsoft,
	 * paginated. The max is 1000 records
	 * per page. Offset is the number of records
	 * you want to skip at the beginning,
	 * for instance, if your limit is 100, and
	 * you have 200 transactions, the offset
	 * for page 2 should be 100.
	 *
	 * @param string $orderId
	 * @param null|string $since
	 * @param null|string $until
	 * @param int $limit - 1000 is the max able to be returned at once
	 * @param null|string $offset
	 * @param null|string $contactId
	 *
	 * @return mixed
	 */
	public function listOrderTransactions(string $orderId, string $since = null, string $until = null, $limit = 1000, string $offset = null, string $contactId = null) {
		$query = [];
		if($since)
			$query['since'] = $since;
		if($until)
			$query['until'] = $until;
		if($limit)
			$query['limit'] = $limit;
		if($offset)
			$query['offset'] = $offset;
		if($contactId)
			$query['contact_id'] = $contactId;

		$request = $this->send("GET", "orders/" . $orderId . '/transactions', [
			'headers' => [
				'Accept' => 'application/json, */*',
			],
			'query' => $query
		]);
		return $request;
	}
}