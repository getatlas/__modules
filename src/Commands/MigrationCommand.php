<?php namespace AlexBowers\Modules\Commands;

use Illuminate\Console\Command;

class MigrationCommand extends Command
{
    protected $name = 'modules:migrate';

    protected $description = 'Setup and run modules migrations';
}