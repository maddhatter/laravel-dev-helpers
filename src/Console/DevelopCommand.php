<?php namespace MaddHatter\DevHelpers\Console;

use Illuminate\Console\Command;

class DevelopCommand extends Command
{

    /**
     * List of command/arguments to run
     *
     * @var array
     */
    protected $commands = [
        'config:clear' => [],
        'clear-compiled' => [],
        'ide-helper:generate' => [],
        'ide-helper:models' => ['--nowrite' => true],
        'ide-helper:meta' => [],
        'route:clear' => [],
        'view:clear' => [],
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run commands to prepare development environment.';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $baseArgs = ['--no-interaction' => true];

        foreach ($this->commands as $command => $args) {
            $this->line("> artisan {$command}");
            $this->call($command, array_merge($baseArgs, $args));
        }
    }
}