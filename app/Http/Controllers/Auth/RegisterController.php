<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Jobs\NewsUserNotificationAdminJob;


class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }



    
    public function registerForm()
    {
        return view('auth.registersouscrive');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request, UserService $userService)
    {

        $data = $userService->createUsser($request->all());
        // NewsUserNotificationAdminJob::dispatch($data);
        return redirect()->route('register.sucess', $data['name']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
