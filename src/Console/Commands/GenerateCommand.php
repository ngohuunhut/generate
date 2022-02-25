<?php

namespace Nhn\Generate\Console\Commands;

use Illuminate\Console\Command;

class GenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nhn:generate {--type=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description 2';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $from = $this->getControllerPath() . "/TestController.php";
        $to = base_path("app/Http/Controllers/test.php");

        $type = $this->option("type");
        dd($type);

        copy($from, $to);
    }

    public function getViewPath()
    {
        return __DIR__ . "/../../stubs/Views";
    }

    public function getControllerPath()
    {
        return __DIR__ . "/../../stubs/Controllers";
    }

    public function getRepoPath()
    {
        return __DIR__ . "/../../stubs/Repositories";
    }
}
