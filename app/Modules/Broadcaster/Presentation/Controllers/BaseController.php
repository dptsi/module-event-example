<?php

namespace App\Modules\Broadcaster\Presentation\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $message = __('Broadcaster::general.belajar');
        return view('Broadcaster::welcome', compact('message'));
    }
}