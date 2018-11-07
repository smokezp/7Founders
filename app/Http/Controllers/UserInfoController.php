<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
//            dd($request->all());
            Auth::user()->userInfo()->create($request->all());
           $code = 200;
        } else {
            $code = 400;
        }
        return response()->json(true, $code);
    }
}
