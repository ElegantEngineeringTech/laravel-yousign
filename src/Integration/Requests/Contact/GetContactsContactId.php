<?php

namespace Elegantly\Yousign\Integration\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-contacts-contactId
 */
class GetContactsContactId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/contacts/{$this->contactId}";
    }

    /**
     * @param  string  $contactId  Contact Id
     */
    public function __construct(
        protected string $contactId,
    ) {}
}
