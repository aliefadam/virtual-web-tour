<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        return view("welcome", []);
    }

    public function virtual_tour()
    {
        return view("virtual-tour", [
            "data_master" => Master::all(),
            "data_user" => User::where("role", "stand")->get(),
        ]);
    }

    public function dashboard()
    {
        $conditions = [
            ["id", "!=", 4],
            ["id", "!=", 13],
        ];

        return view("dashboard", [
            "title" => "Dashboard",
            "stand_count" => User::where("role", "stand")->where($conditions)->count(),
        ]);
    }

    public function users()
    {
        return view("users", [
            "title" => "Data User",
            "users" => User::all(),
        ]);
    }

    public function master()
    {
        return view("master-data", [
            "title" => "Master Data",
            "master_data" => Master::firstWhere("user_id", Auth::user()->id),
        ]);
    }
}
