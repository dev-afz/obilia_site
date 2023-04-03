<?php

namespace App\Console\Commands\Cron;

use App\Models\User;
use Illuminate\Console\Command;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\DB;

class CheckExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:checkExpiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command checks for expired users and updates their status accordingly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $expired_users = UserSubscription::whereDate('end_date', '<', now())
            ->where('status', 'running')
            ->get();

        if ($expired_users->count() == 0) {
            $this->info('No expired users found');
            return Command::SUCCESS;
        }

        $expired_user_ids = $expired_users->pluck('user_id')->toArray();

        $expired_ids = $expired_users->pluck('id')->toArray();

        DB::beginTransaction();

        UserSubscription::whereIn('id', $expired_ids)
            ->update(['status' => 'expired']);

        User::whereIn('id', $expired_user_ids)
            ->update(['subscription_status' => 'free']);

        DB::commit();

        $this->info('Expired users updated');
        return Command::SUCCESS;
    }
}
