<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Commands;

use Illuminate\Console\Command;

class YousignCommand extends Command
{
    public $signature = 'laravel-yousign';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
