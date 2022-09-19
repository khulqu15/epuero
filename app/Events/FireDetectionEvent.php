<?php

namespace App\Events;

use App\Models\Fire;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FireDetectionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public mixed $fire;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(mixed $fire)
    {
        $this->fire = $fire;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn(): Channel
    {
        return new Channel('fire-detection');
    }

    public function broadcastWith(): array
    {
        return [
            'id' => $this->fire->id,
            'latitude' => $this->fire->latitude,
            'longitude' => $this->fire->longitude,
            'altitude' => $this->fire->altitude,
            'location' => $this->fire->location,
            'created_at' => $this->fire->created_at,
            'updated_at' => $this->fire->updated_at,
        ];
    }
}
