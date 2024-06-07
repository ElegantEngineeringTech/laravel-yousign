<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\User\GetUsers;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class User extends Resource
{
	/**
	 * @param int $limit The limit of items count to retrieve.
	 */
	public function getUsers(?int $limit): Response
	{
		return $this->connector->send(new GetUsers($limit));
	}
}
