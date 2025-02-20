<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSignatureRequests extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/signature_requests';
    }

    /**
     * @param  null|string  $status  Filter by status
     * @param  null|int  $limit  The limit of items count to retrieve.
     * @param  null|string  $externalId  Filter by external_id
     * @param  null|string[]  $source  Filter by source
     * @param  null|string  $q  Search on name
     */
    public function __construct(
        protected ?string $status = null,
        protected ?int $limit = null,
        protected ?string $externalId = null,
        protected ?array $source = null,
        protected ?string $q = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'status' => $this->status,
            'limit' => $this->limit,
            'external_id' => $this->externalId,
            'source' => $this->source,
            'q' => $this->q,
        ]);
    }
}
