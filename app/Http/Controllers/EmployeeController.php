<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
    	$employees = [
    		["name"=>"Chandan","email"=>"chandan@gmail.com","phone"=>"01797348221",              
    		  "salary"=>"2000","department"=>"Accounting"],

    		["name"=>"Tamim","email"=>"tamim@gmail.com","phone"=>"01797348271",              
    		 "salary"=>"2100","department"=>"Marketing"],

    		["name"=>"Rayhan","email"=>"rayhan@gmail.com","phone"=>"01897348221",              
    		 "salary"=>"2000","department"=>"Quality"],

    		["name"=>"Bitto","email"=>"bitto@gmail.com","phone"=>"01997348221",           
    		  "salary"=>"2500","department"=>"Accounting"],

    		["name"=>"Jannat","email"=>"jannat@gmail.com","phone"=>"01797348223",           
    		  "salary"=>"2500","department"=>"Accounting"]

    	];
    	Employee::insert($employees);
    	return "Records are inserted";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport,'employeelist.csv');
    }

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new EmployeeImport,$request->file);
        return "Record are imported successfully!";

    }
}
