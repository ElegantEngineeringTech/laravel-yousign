<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-contacts
 */
class GetContacts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/contacts';
    }

    /**
     * @param  null|int  $limit  The limit of items count to retrieve.
     */
    public function __construct(
        protected ?int $limit = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit]);
    }
}
