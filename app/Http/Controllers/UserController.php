<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'superadmin') {
            $users = User::where('role', 'admin')->get();
            return view('superadmin.user-management', compact('users'));
        } else if (Auth::user()->role == 'admin') {
            $users = User::whereNotIn('role', ['superadmin', 'admin'])->get();
            return view('admin.user', compact('users'));
        }

    }

    public function add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            ]);

            if($validator->fails()) {
                return redirect()->back()->with('error', 'Invalid input');
            }

            $validatorAlreadyExist = Validator::make($request->all(), [
                'email' => 'unique:users,email',
            ]);

            if ($validatorAlreadyExist->fails()) {
                return redirect()->back()->with('error', 'Email already exists.');
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make("password");
            $user->role = "admin";
            $user->coins = 0;
            $user->save();

            return redirect()->back()->with('success', 'User added successfully');
        } catch (Exception $e) {
            //return $e;
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }

    public function edit(Request $request, $id)
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return redirect()->back()->with('error', 'User not found!');
            }

            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('email')) {
                    return redirect()->back()->with('error', 'Email already in use.');
                }
                return redirect()->back()->with('error', 'Invalid input.');
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return redirect()->back()->with('success', 'User updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Server Error (500)');
        }
    }


    public function delete($id)
    {
        try {
            $user = User::where('id', $id)->first();

            if(!$user) {
                return redirect()->back()->with('error', 'User not found!');
            }

            $user->delete();

            return redirect()->back()->with('success', 'User Deleted successfully!');
        } catch (Exception $e) {
            //return $e;
            return redirect()->back()->with('error', 'Server Error(500)');
        }
    }
}
