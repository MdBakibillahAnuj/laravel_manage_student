<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('admin.student.add');
    }
    public function newStudent(Request $request)
    {
        Student::SaveData($request);
        return redirect()->back()->with('message', 'Student added successfully');
    }
    public function manageStudent()
    {
        return view('admin.student.manage', [
            'students'  => Student::all(),
        ]);
    }
    public function deleteStudent($id)
    {
        $student = Student::findOrfail($id);
        if (file_exists($student->image))
            unlink($student->image);
        $student->delete();
        return redirect()->back()->with('message', 'Student delete successfully');
    }
    public function editStudent($id)
    {
        return view('admin.student.edit',[
            'student'  => Student::findOrfail($id),
        ]);
    }
    public function updateStudent(Request $request)
    {
        Student::updateData($request);
        return redirect('/manage-student')->with('message', 'Student data update successfully');
    }
}
