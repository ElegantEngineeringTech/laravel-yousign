<?php

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-custom_experiences
 */
class GetCustomExperiences extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/custom_experiences";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
