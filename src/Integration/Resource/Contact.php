<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Contact\DeleteContactsContactId;
use Elegantly\Yousign\Integration\Requests\Contact\GetContacts;
use Elegantly\Yousign\Integration\Requests\Contact\GetContactsContactId;
use Elegantly\Yousign\Integration\Requests\Contact\PatchContactsContactId;
use Elegantly\Yousign\Integration\Requests\Contact\PostContact;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Contact extends Resource
{
    /**
     * @param  int  $limit  The limit of items count to retrieve.
     */
    public function getContacts(?int $limit): Response
    {
        return $this->connector->send(new GetContacts($limit));
    }

    public function postContact(): Response
    {
        return $this->connector->send(new PostContact);
    }

    /**
     * @param  string  $contactId  Contact Id
     */
    public function getContactsContactId(string $contactId): Response
    {
        return $this->connector->send(new GetContactsContactId($contactId));
    }

    /**
     * @param  string  $contactId  Contact Id
     */
    public function deleteContactsContactId(string $contactId): Response
    {
        return $this->connector->send(new DeleteContactsContactId($contactId));
    }

    /**
     * @param  string  $contactId  Contact Id
     */
    public function patchContactsContactId(string $contactId): Response
    {
        return $this->connector->send(new PatchContactsContactId($contactId));
    }
}
