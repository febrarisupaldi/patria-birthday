<?php

namespace App\Console\Commands;

use App\Http\Controllers\PatriaFriendController;
use App\Services\PatriaFriendService;
use Illuminate\Console\Command;
use Log;

class CheckPatriaBirthdayTodayCommand extends Command
{
    private PatriaFriendService $patriaFriendService;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:check-patria-birthday-today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Patria Friend Birthday';

    /**
     * Execute the console command.
     */

    public function __construct(PatriaFriendService $patriaFriendService){
        $this->patriaFriendService = $patriaFriendService;
        parent::__construct();
    }
    public function handle(): void
    {
        $patriaFriend = new PatriaFriendController($this->patriaFriendService);
        $patriaFriend->sendEmailNotif();
        Log::info("Success check your patria friend birthday today");
    }
}
