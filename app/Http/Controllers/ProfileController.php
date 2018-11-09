<?php

namespace App\Http\Controllers;

use App\User;
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
            $user = Auth::user()->load('educations', 'recommendations');
            return view('profile.private', compact('user'));
        } else {
            $user = User::find($request->id)->load('educations', 'recommendations');
            return view('profile.public', compact('user'));
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function education(Request $request)
    {
        return $this->storeUserData($request, 'educations');
    }

    public function recommendation(Request $request)
    {
        return $this->storeUserData($request, 'recommendations');
    }

    private function storeUserData(Request $request, $relation)
    {
        $res = false;
        if ($request->ajax()) {
            $res = Auth::user()->{$relation}()->create($request->all());
            $code = 200;
        } else {
            $code = 400;
        }
        return response()->json($res, $code);
    }
}
