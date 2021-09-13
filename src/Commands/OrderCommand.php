<?php

namespace KatalinKS\Order\Commands;

use Illuminate\Console\Command;

class OrderCommand extends Command
{
    public $signature = 'laravel-eshop-orders';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
