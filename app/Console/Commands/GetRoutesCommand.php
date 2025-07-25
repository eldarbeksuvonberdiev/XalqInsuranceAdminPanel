<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class GetRoutesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collect:routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hamma yo\'llar ro\'yxatga olindi!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $routes = Route::getRoutes();
        $this->info($routes);
    }
}
