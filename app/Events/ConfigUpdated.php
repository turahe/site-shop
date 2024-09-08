<?php

namespace Modules\Shop\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Auth\Models\User;
use Modules\User\Models\Organization;

class ConfigUpdated
{
    use Dispatchable, SerializesModels;

    public $shop;

    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Organization $shop, User $user)
    {
        $this->shop = $shop;
        $this->user = $user;
    }
}
