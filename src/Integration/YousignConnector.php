<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration;

use Elegantly\Yousign\Integration\Resource\Approver;
use Elegantly\Yousign\Integration\Resource\AuditTrail;
use Elegantly\Yousign\Integration\Resource\Consumption;
use Elegantly\Yousign\Integration\Resource\Contact;
use Elegantly\Yousign\Integration\Resource\CustomExperience;
use Elegantly\Yousign\Integration\Resource\Document;
use Elegantly\Yousign\Integration\Resource\ElectronicSeal;
use Elegantly\Yousign\Integration\Resource\Field;
use Elegantly\Yousign\Integration\Resource\Follower;
use Elegantly\Yousign\Integration\Resource\Metadata;
use Elegantly\Yousign\Integration\Resource\SignatureRequest;
use Elegantly\Yousign\Integration\Resource\Signer;
use Elegantly\Yousign\Integration\Resource\SignerDocumentRequest;
use Elegantly\Yousign\Integration\Resource\Template;
use Elegantly\Yousign\Integration\Resource\User;
use Elegantly\Yousign\Integration\Resource\Webhook;
use Elegantly\Yousign\Integration\Resource\Workspace;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

/**
 * Public Api v3
 */
class YousignConnector extends Connector
{
    use AcceptsJson;
    use AlwaysThrowOnErrors;

    public function __construct(
        public string $api_key,
        public bool $sandbox,
    ) {
        //
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->api_key);
    }

    public function resolveBaseUrl(): string
    {
        if ($this->sandbox) {
            return 'https://api-sandbox.yousign.app/v3';
        }

        return 'https://api.yousign.app/v3';
    }

    public function approver(): Approver
    {
        return new Approver($this);
    }

    public function auditTrail(): AuditTrail
    {
        return new AuditTrail($this);
    }

    public function consumption(): Consumption
    {
        return new Consumption($this);
    }

    public function contact(): Contact
    {
        return new Contact($this);
    }

    public function customExperience(): CustomExperience
    {
        return new CustomExperience($this);
    }

    public function document(): Document
    {
        return new Document($this);
    }

    public function electronicSeal(): ElectronicSeal
    {
        return new ElectronicSeal($this);
    }

    public function field(): Field
    {
        return new Field($this);
    }

    public function follower(): Follower
    {
        return new Follower($this);
    }

    public function metadata(): Metadata
    {
        return new Metadata($this);
    }

    public function signatureRequest(): SignatureRequest
    {
        return new SignatureRequest($this);
    }

    public function signer(): Signer
    {
        return new Signer($this);
    }

    public function signerDocumentRequest(): SignerDocumentRequest
    {
        return new SignerDocumentRequest($this);
    }

    public function template(): Template
    {
        return new Template($this);
    }

    public function user(): User
    {
        return new User($this);
    }

    public function webhook(): Webhook
    {
        return new Webhook($this);
    }

    public function workspace(): Workspace
    {
        return new Workspace($this);
    }
}
