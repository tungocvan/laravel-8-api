<?php

namespace App\Listeners;

use App\Events\SearchProduct;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OnchangeTextProduct
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SearchProduct  $event
     * @return void
     */
    public function handle(SearchProduct $event)
    {
        //
        return false;
    }
}
