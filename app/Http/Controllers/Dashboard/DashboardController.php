<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Services\CourseService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TCandidat;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $courseService ;


    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService ;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iduser = Auth::user()->id;
        $candidat = TCandidat::where('user_id', $iduser)->first();
        return view('profiledashboard.base.base', [
            'visiteur'=> $candidat->visiteur ?? '0'
        ]);
    }

}
