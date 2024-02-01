<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        return Inertia::render('Software/Home');
    }
    public function ramen(){
        return Inertia::render('Software/Index');
    }

    public function create(){
        return Inertia::render('Software/Create');
    }
    public function analysis(){
        return Inertia::render('Software/Analysis');
    }

    public function store(Request $request){
        Member::create([
            'name' => $request->name,
            'handlename' => $request->handlename,
            'email' => $request->email,
            'password' => $request->password,
            'age' => $request->age,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);
        
        return to_route('software.index');
    }
    public function chat(){
        return Inertia::render("Software/Chat");
    }
    public function attend(){
        return Inertia::render("Software/Attend");
    }
}
