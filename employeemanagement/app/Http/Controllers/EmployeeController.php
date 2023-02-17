<?php

namespace App\Http\Controllers;

use App\Models\designation;
use App\Models\employee;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class EmployeeController extends Controller
{
    public function addData(Request $request ){
        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required',
            'number'=> 'required|numeric',
            'designation'=> 'required',

        ]);

        $employee = new employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->number=$request->number;
        $employee->did=$request->designation;
        $employee->save();
        return redirect('/');
    }
    public function showData(){
        $data = employee::all();
       
        return view('employee_management',compact('data'));
    }
    public function edit($id){
        $employee = new employee();
        $employeerow = employee::find($id);
        $designation =  designation::all();
        // @dd($employeerow->toArray(),$designation->toArray());
        return view('edit',get_defined_vars());
       
    }
    public function editData(Request $request ,$id){
        $request->validate([
            'name'=> 'required|min:3',
            'email'=> 'required',
            'number'=> 'required|numeric',
            'designation'=> 'required',
        ]);
        $employee = new employee();
        $employeerow = employee::find($id);
        $employeerow->name= $request->name;
        $employeerow->email= $request->email;
        $employeerow->number= $request->number;
        $employeerow->did= $request->designation;
        $employeerow->save();
        return redirect('/');
    }
    public function deleteData(Request $request ,$id){
        $employee = new employee();
        $employeerow = employee::find($id);
       $employeerow->delete();
        return redirect('/');
    }
    public function getdes(){
        $data = employee::with('des')->get();
        
        return view('employee_management',get_defined_vars());
    }
   public function addemp(){
    $data = designation::all();
    return view('add_employee',get_defined_vars());
    
   }
}
