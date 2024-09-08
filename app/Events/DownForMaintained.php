<?php

namespace Modules\Shop\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\User\Models\Organization;

class DownForMaintained
{
    use Dispatchable, SerializesModels;

    public $shop;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Organization $shop)
    {
        $this->shop = $shop;
    }
}
