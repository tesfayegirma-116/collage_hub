<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignStudent;
use App\Models\User;
use App\Models\DiscountStudent;

use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use DB;
use PDF;

use App\Models\Designation;
use App\Models\EmployeeSallaryLog;

use App\Models\EmployeeLeave;
use App\Models\LeavePurpose;

use App\Models\StudentAttendance;


class StudentAttendanceController extends Controller
{
    
    public function AttendanceView(){
        //$data['allData'] = StudentAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
    	$data['allData'] = StudentAttendance::orderBy('id','DESC')->get();
    	return view('backend.Student.Student_attendance.Student_attendance_view',$data);
    }


    public function AttendanceAdd(){
    	$data['Students'] = User::where('usertype','Student')->get();
    	return view('backend.Student.Student_attendance.Student_attendance_add',$data);

    }


    public function AttendanceStore(Request $request){

    	StudentAttendance::where('date', date('Y-m-d', strtotime($request->date)))->delete();
    	$countStudent = count($request->Student_id);
    	for ($i=0; $i <$countStudent ; $i++) { 
    		$attend_status = 'attend_status'.$i;
    		$attend = new StudentAttendance();
    		$attend->date = date('Y-m-d',strtotime($request->date));
    		$attend->Student_id = $request->Student_id[$i];
    		$attend->attend_status = $request->$attend_status; 
    		$attend->save();
    	} // end For Loop

 		$notification = array(
    		'message' => 'Student Attendace Data Update Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('Student.attendance.view')->with($notification);

    } // end Method



    public function AttendanceEdit($date){
    	$data['editData'] = StudentAttendance::where('date',$date)->get();
    	$data['Students'] = User::where('usertype','Student')->get();
    	return view('backend.Student.Student_attendance.Student_attendance_edit',$data);
    }


    public function AttendanceDetails($date){
    	$data['details'] = StudentAttendance::where('date',$date)->get();
    	return view('backend.Student.Student_attendance.Student_attendance_details',$data);

    }



}
 