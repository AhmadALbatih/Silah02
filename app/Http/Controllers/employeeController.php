<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    } 
    
    public function index()
    {
       
        $employees = employee::all();
        return view ('employee.index')->with('employee', $employees);
 
    }

   
    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
       $input = $request->all();
       employee::create($input);
       return redirect('employee')->with('flash_message', 'employee Addedd!');  
       
    }
   
    public function show($id)
    {
        $employee = employee::find($id);
        return view('employee.show')->with('employee', $employee);
    }

    
    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employee.edit')->with('employee', $employee);
    }

    public function update(Request $request, $id)
    {
        $employee = employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('employee')->with('flash_message', 'employee Updated!');  
    }

    public function destroy($id)
    {
        employee::destroy($id);

        return redirect('employee')->with('flash_message', 'employee deleted!');  
     
    }
}
