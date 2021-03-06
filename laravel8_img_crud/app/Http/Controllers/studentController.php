<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = Student::all();
       return view('students.index', [ 'students' => $students ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->course = $request->course;

        if ($request->hasfile('profile_img_path')) {  // if isset or get image
            $file = $request->file('profile_img_path');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/students_images', $fileName);  // configuring where image upload
            $student->img_name = $fileName;
        }
        $student->save();
        return redirect()->back()->with('Status', 'Student Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('students.edit-student',[ 'students' => $students ]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->course = $request->course;

        if ($request->hasfile('profile_img_path')) {  // if isset or get image
            $destination = 'uploads/students_images/'. $student->img_name; // get destination 

            if (File::exists( $destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_img_path');   // get image 
            $extension = $file->getClientOriginalExtension();  // get image extension
            $fileName = time(). '.' . $extension;  // get file name
            $file->move('uploads/students_images', $fileName);  // configuring where image upload
            $student->img_name = $fileName;
        }
        $student->update();
        return redirect()->back()->with('Status', 'Student Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $destination = 'uploads/students_images/'. $student->img_name; // get destination 
        if (File::exists( $destination)) {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('Status', 'Student Deleted Successfully.');
    }
}
