<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return response()->json([
            'teacher' => $teacher
        ]);
    }

    public function store(StoreTeacherRequest $request){
        $employeeID = $request->input('employeeID');
        $department = $request->input('department');
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $middleName = $request->input('middle_name');
        $contact_number = $request->input('contact_number');
        $email = $request->input('email');
        $password = $request->input('password');

        $teacher = new Teacher();

        $teacher->employeeID = $employeeID;
        $teacher->department = $department;
        $teacher->first_name = $firstName;
        $teacher->last_name = $lastName;
        $teacher->middle_name = $middleName;
        $teacher->contact_number = $contact_number;
        $teacher->email = $email;
        $teacher->password = $password;

        $teacher->save();

        return response()->json([
            'teacher' => $teacher
        ]);
    }
}
