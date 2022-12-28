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
//        $user = User::select("uuid", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
//            ->where("first_name", "like", "%a%b%c%")
//            ->where("last_name", "like", "%a%b%c%")
//            ->where("email", "like", "%a%b%c%")->get();

        if ($user1 = User::select("uuid", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where("first_name", "like", "%a%b%c%")->get())
        {
            return response()->json($user1);
        }
        elseif ($user2 = User::select("uuid", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where("last_name", "like", "%a%b%c%")->get())
        {
            return response()->json($user2);
        }
        elseif ($user3 = User::select("uuid", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where("email", "like", "%a%b%c%")->get())
        {
            return response()->json($user3);
        }
//        $user = User::select("uuid", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
//            ->where("first_name", "like", "%a%b%c%", "or", "last_name", "like", "%a%b%c%","or", "email", "like", "%a%b%c%")
//            ->get();
//        if ($user1 || $user2 || $user3)
//        {
//            return response()->json($user1, $user2, $user3);
//        }
//        elseif ($user2)
//        {
//            return response()->json($user2 );
//        }
//        elseif ($user3)
//        {
//            return response()->json($user3);
//        }


//        $user = User::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
//            ->where("first_name", "like", "%a%b%c%")->where("last_name", "like", "%a%b%c%")->where("email", "like", "%a%b%c%")->get();
//
////        $user = User::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as name"))
////            ->where("first_name", "like", "%a%b%c%", "or", "last_name", "like", "%abc%","or", "email", "like", "%abc%")
////            ->get();
//        return response()->json($user);
    }
}
