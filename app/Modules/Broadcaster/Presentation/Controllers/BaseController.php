<?php

namespace App\Modules\Broadcaster\Presentation\Controllers;

use App\Modules\Broadcaster\Core\Application\Service\AccessRoute\AccessRouteService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request, AccessRouteService $service)
    {
        $service->execute($request->path());
    }
}