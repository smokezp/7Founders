<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            Auth::user()->info()->create($request->all());
           $code = 200;
        } else {
            $code = 400;
        }
        return response()->json(true, $code);
    }
}
