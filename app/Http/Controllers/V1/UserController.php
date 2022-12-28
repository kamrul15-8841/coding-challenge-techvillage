<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users()
    {
        $user = User::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where("first_name", "like", "%a%b%c%")->where("last_name", "like", "%a%b%c%")->where("email", "like", "%a%b%c%")->get();

//        $user = User::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
//            ->where("first_name", "like", "%a%b%c%", "or", "last_name", "like", "%abc%","or", "email", "like", "%abc%")
//            ->get();
        return response()->json($user);
    }
}
