<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('profiledashboard.base.base', [
            'visiteur' => 0
        ]);
    }
}
