<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentFee;


class StudentFeeController extends Controller
{
    public function viewfeeList()
    {
        $data['alldata'] = Studentfee::all()->sortByDesc("created_at");
        return view('admin.backend.setup.student_fee.view_fee', $data);
        
    }

    public function addfee()
    {
        return view ('admin.backend.setup.student_fee.add_fee');

    }

    public function storefee(Request $request)
    {
        $data = new Studentfee(); 

        $request-> validate([

            'name' => 'required|unique:student_fees,name',
            
        ]);

        $data ->name = $request->name;
        
        $data->save();

        return redirect()->route('student.fee.view');
    }

    public function deletefee($id)
    {
        $deleteClass = Studentfee::find($id);

        $deleteClass->delete();

        return redirect()->route('student.fee.view');

    }

    public function editfee($id)
    {


        $editData = Studentfee::find($id);
        $editData = compact('editData'); 
        return view ('admin.backend.setup.student_fee.edit_fee')->with($editData);
    }

    public function updatefee(Request $request, $id)
    {
        $request-> validate([

            'name' => 'required|unique:student_fees,name',
            
        ]);


        $updatefee = Studentfee::find($id);


        $updatefee->name = $request['name'];
    

        $updatefee->save();
         
        return redirect()->route('student.fee.view');
        
    }
}
