<?php

namespace App\Console\Commands;

use App\Http\Controllers\FriendController;
use App\Services\FriendService;
use Illuminate\Console\Command;
use Log;

class CheckBirthdayTodayCommand extends Command
{
    private FriendService $friendService;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:check-birthday-today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Today Birthday';

    public function __construct(FriendService $friendService){
        $this->friendService = $friendService;
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $friend = new FriendController($this->friendService);
        $friend->sendEmailNotif();
        Log::info("Success check your friend birthday today");
    }
}
