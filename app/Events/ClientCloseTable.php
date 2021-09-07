<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class ClientCloseTable implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $restaurant;
    public $table;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($restaurant, $table = null)
    {
        $this->restaurant = $restaurant;
        $this->table = $table;

    }
    
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('restaurant.'.$this->restaurant->id.'.client_table.'.$this->table['id']);
    }
    public function broadcastAs()
    {
        return 'client_close_table';
    }
}
