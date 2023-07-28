<?php

namespace App\Http\Controllers;

use App\Services\IndexService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $service;
    public function __construct(IndexService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request) {
        if ($request->has('ip')) {
            $result = $this->service->findIp($request->ip);
            return view('index', compact('result'));
        }
        return view('index');
    }
}
