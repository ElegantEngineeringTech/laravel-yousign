<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Consumption\GetConsumptions;
use Elegantly\Yousign\Integration\Requests\Consumption\GetConsumptionsExport;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Consumption extends Resource
{
    /**
     * @param  string  $from  The "from" date must not be more than 1 year in the past
     * @param  string  $to  The "to" date must be more recent than the "from" date
     */
    public function getConsumptions(string $from, string $to, ?string $authenticationKey): Response
    {
        return $this->connector->send(new GetConsumptions($from, $to, $authenticationKey));
    }

    /**
     * @param  string  $from  The "from" date must not be more than 1 year in the past
     * @param  string  $to  The "to" date must be more recent than the "from" date
     */
    public function getConsumptionsExport(string $from, string $to, ?string $authenticationKey): Response
    {
        return $this->connector->send(new GetConsumptionsExport($from, $to, $authenticationKey));
    }
}
