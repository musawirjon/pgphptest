<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\HomeController;

class UpdateUserComment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:update_comment {id} {comment}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update user comments with artisan command line interface';

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
        $homeController = new HomeController();
        $request = new \Illuminate\Http\Request();
        $request->setMethod('POST');
        $request->request->add([
 		'id'=> $this->argument('id'),
        	'comment'=> $this->argument('comment')
	]);
        $homeController->appendUserComments($request);
    }
}
