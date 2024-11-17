<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::with('groups_id')->orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', ['users' => $users]);
    }
    public function info($id){
        $user = User::findOrFail($id);
        return view('users.info', ['user' => $user]);
    }
    public function create(){
        
    }
    public function store(Request $request){
        return redirect()->route('users.index');
    }
}
