<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class CrudApplication extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function view_employee()
    {
        $employee=Employee::with('company')->get();
        return view('view-employee',compact('employee'));
    }

    public function view_company()
    {
        $company=Company::all();
        return view('view-company',compact('company'));
    }

    public function add_employee(Request $request )
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'number'=>'required',
                'address'=>'required',
            ]
            );
        $employee=new Employee;
        $employee->company_id=$request['company_id'];
        $employee->employee_name=$request['name'];
        $employee->employee_email=$request['email'];
        $employee->employee_contact=$request['number'];
        $employee->employee_gender=$request['gender'];
        $employee->employee_address=$request['address'];
        $employee->save();

        return redirect('/view-employee');
    }

    public function add_employee_form()
    {
        $company=Company::all();
        return view('add-employee_form',compact('company'));
    }


    public function edit_employee($id)
    {
        $employee=Employee::find($id);
        // $employee=Employee::with('company')->where('employee_id', $id)->get();

        return view('edit-employee',compact('employee'));
    }

    public function update_employee($id, Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'number'=>'required',
                'address'=>'required',
            ]
            );
        $employee=Employee::find($id);
        
        $employee->employee_name=$request['name'];
        $employee->employee_email=$request['email'];
        $employee->employee_contact=$request['number'];
        $employee->employee_gender=$request['gender'];
        $employee->employee_address=$request['address'];
        $employee->save();
        return redirect('/view-employee');
    }

    public function delete_employee($id)
    {

        $employee=Employee::find($id)->delete();
        return redirect('/view-employee');
        
    }



    public function add_company_form()
    {
        return view('/add-company-form');
        
    }

    public function add_company(Request $request )
    {
        $company=new Company;
        $company->company_name=$request['name'];
        $company->company_address=$request['address'];
        $company->save();

        return redirect('/view-company');
    }

    public function edit_company($id)
    {
        $company=Company::find($id);
        // $employee=Employee::with('company')->where('employee_id', $id)->get();

        return view('edit-company',compact('company'));
    }

    public function update_company($id, Request $request)
    {
        $company=Company::find($id);
        $company->company_name=$request['name'];
        $company->company_address=$request['address'];
        $company->save();
        return redirect('/view-company');
    }

    public function delete_company($id)
    {

        $employee=Company::find($id)->delete();
        return redirect('/view-company');
        
    }

}
