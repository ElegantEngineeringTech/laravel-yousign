<?php

namespace Elegantly\Yousign\Integration\Requests\Contact;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-contacts-contactId
 */
class DeleteContactsContactId extends Request
{
    protected Method $method = Method::DELETE;

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
