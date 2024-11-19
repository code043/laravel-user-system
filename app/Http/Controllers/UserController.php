<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::with('group')->orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', ['users' => $users]);
    }
    public function info($id){
        $user = User::with('group')->findOrFail($id);
        return view('users.info', ['user' => $user]);
    }
    public function create(){
        $groups = Group::all();
        return view('users.create', ['groups' => $groups]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:10',
            'role' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'birth_date' => 'required|string',
            'groups_id' => 'required|exists:groups,id'
        ]);
        User::create($validated);
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
