<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;

class PusherController extends Controller
{
    public $pusher;
    
    public function __construct()
    {
        $pusherConfig = config('broadcasting.connections.pusher', []);
        $this->pusher = new Pusher($pusherConfig['key'], $pusherConfig['secret'], $pusherConfig['app_id'], $pusherConfig['options']);
    }
    
    public function pusherAuth(Request $request)
    {
        $broadcaster = new PusherBroadcaster($this->pusher);
        return $broadcaster->validAuthenticationResponse($request, []);
    }
    
}


