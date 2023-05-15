<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function indexAction(Request $request)
    {
        $users = [
            ["id" => "1","nom" => "yassine"],
            ["id" => "2","nom" => "ahmed"],
            ["id" => "3","nom" => "mouad"]
        ];
        return view("index",compact("users"));
    }
}
