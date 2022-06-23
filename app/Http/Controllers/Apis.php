<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class Apis extends Controller
{
    public function dummyData($id=null)
    {
        if(!is_null($id))
        {
            $company=Company::find($id);
            if($company)
            {
                return $company;
            }
                return ['Message'=>'Record Not Found'];
        }
        else
        {
            $company=Company::get();
            return $company;
        }
    }

    public function addData(Request $request)
    {
        $company  = new Company;

        $company->company_name=$request['name'];
        $company->company_address=$request['address'];
        $company->save();
        return ['Message'=>'Data Inserted Successfully'];
    }

    public function Delete($id)
    {
        
        if(!is_null($id))
        {
          $company=Company::find($id);
          if($company)
          {
            $company->delete($id);
            return ['Message'=>'Data Deleted Successfully'];
          }
          else
          {
            return ['Message'=>'Record Not Found'];
          }
        }
        else
        {
            return ['Message'=>'Record Not Deleted'];
        }
    }


    public function update($id, Request $request)
    {
        
        if(!is_null($id))
        {
          $company=Company::find($id);
          if($company)
          {
              $company->company_name=$request['name'];
              $company->company_address=$request['address'];
              $company->save();
              return ['Message'=>'Record Updated'];
  
          }
          else
          {
            return ['Message'=>'Record Not Found'];
          }
        }
        else
        {
            return ['Message'=>'Record Not Updated'];
        }
    }

    public function upload(Request $request)
    {
       
        $name= $request->file('file')->store('Images');
       
       return $name;
    }
}
