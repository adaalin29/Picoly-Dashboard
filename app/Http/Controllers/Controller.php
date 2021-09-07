<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Integration of Api Documentation for Picoly",
     *      description="Integration of Api Documentation for Picoly using php",
     *      @OA\Contact(
     *          email="tehnic@touch-media.ro"
     *      ),
     *      @OA\License(
     *          name="Backpack 3.6",
     *          url="https://backpackforlaravel.com/"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Demo API Server"
     * )

     *
     *
     */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
