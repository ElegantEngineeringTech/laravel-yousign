<?php

namespace Elegantly\Yousign\Integration\Requests\Template;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-templates
 */
class GetTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/templates";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return array_filter([]);
	}
}
