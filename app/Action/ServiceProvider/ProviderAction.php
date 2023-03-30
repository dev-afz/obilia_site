<?php

namespace App\Action\ServiceProvider;

use App\Models\Package;
use App\Models\User;

class ProviderAction
{
    public User $provider;

    public function __construct(
        User $provider,
    ) {
        $this->provider = $provider;
    }



    public function rechargeBalance(?Package $package = null)
    {
        $package = ($package) ? $package : Package::where('price', 0)->with(['perks'])->active()->first();

        $provider = $this->provider;
        $perks = $package->perks;
        $perks = $perks->pluck('value', 'name')->toArray();

        $provider->balance()->updateOrCreate(
            ['user_id' => $provider->id],
            [
                'commission' => $perks['commission'],
                'application_limit' => $perks['job_applications'],
                'connection_limit' => $perks['connection'],
                'active_workspace_limit' => $perks['active_workspace'],
                'workspace_space_limit' => $perks['storage'],
                'service_limit' => $perks['service'],
                'last_reset' => now(),
            ]
        );
    }
}
