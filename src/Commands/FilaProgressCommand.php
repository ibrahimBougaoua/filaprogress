<?php

namespace IbrahimBougaoua\FilaProgress\Commands;

use Illuminate\Console\Command;

class FilaProgressCommand extends Command
{
    public $signature = 'filaprogress';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
