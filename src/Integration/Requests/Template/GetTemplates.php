<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Template;

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
        return '/templates';
    }

    public function __construct() {}

    public function defaultQuery(): array
    {
        return [];
    }
}
