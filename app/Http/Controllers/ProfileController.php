<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($request->id == Auth::id()) {
            $user = Auth::user();
            $educations = $user->educations;
            return view('profile.private', compact('educations'));
        } else {
            return view('profile.public');
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function education(Request $request)
    {
        $res = false;
        if ($request->ajax()) {
            $res = Auth::user()->educations()->create($request->all());
            $code = 200;
        } else {
            $code = 400;
        }
        return response()->json($res, $code);
    }
}
