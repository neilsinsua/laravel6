<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductPurchased
{
    use Dispatchable, SerializesModels;

    //event props should be public
    public $name;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
    }


}
