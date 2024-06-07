<?php

namespace Elegantly\Yousign\Integration\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-users
 */
class GetUsers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users";
	}


	/**
	 * @param null|int $limit The limit of items count to retrieve.
	 */
	public function __construct(
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit]);
	}
}
