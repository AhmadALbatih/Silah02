<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function Admin()
    {
        $this->middleware('admin');
        
    }   
    

    public function index()
    {
       
        $Users = User::all();
        return view ('User.index')->with('User', $Users);
 
    }

   
    public function create()
    {
        return view('User.create');
    }


    public function store(Request $request)
    {
       $input = $request->all();
       User::create($input);
       return redirect('User')->with('flash_message', 'User Addedd!');  
       
    }
   
    public function show($id)
    {
        $User = User::find($id);
        return view('User.show')->with('User', $User);
    }

    
    public function edit($id)
    {
        $User = User::find($id);
        return view('User.edit')->with('User', $User);
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $input = $request->all();
        $User->update($input);
        return redirect('User')->with('flash_message', 'User Updated!');  
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect('User')->with('flash_message', 'User deleted!');  
     
    }
}
