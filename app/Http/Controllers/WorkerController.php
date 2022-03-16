<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class WorkerController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('index',['employees'=>$employees]);
    }
    public function store(Request $request) {

        $employee = Employee::create([
            "name" => $request->name,
            "city" => $request->city,
            "birth" => $request->birth,
            "salary" => $request->salary
        ]);
        return redirect( 'employees');
    }
    public function show($id) {
        $employee = Employee::find($id);
        return view('show',['employee'=>$employee]);
    }
    public function edit(Employee $employee) {
        return view('edit' , ['employee' => $employee]);
    }
    public function update(Request $request, Employee $employee) {
        $employee->update([
            "name" => $request->name,
            "city" => $request->city,
            "birth" => $request->birth,
            "salary" => $request->salary
        ]);
        return redirect( 'employees');
    }
    public function destroy($id) {
        Employee::destroy($id);
        return redirect( 'employees' );
    }
}
