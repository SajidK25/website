<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Faculty;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\FacultyRequest;
use App\Helpers\HtmlEditor\HtmlEditor;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FacultyController extends Controller
{
  protected $htmlEditor;

  public function __construct()
    {
        //$this->htmlEditor = $htmlEditor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $faculties = Faculty::all();
      //dd($faculties);
      //dump($faculties);
      return view('admin.faculty.list',compact('faculties'));
      //return view('admin.faculty.list', compact('facultyList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faculty.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacultyRequest $request)
    {
      $user = User::create([
          'name'     => $request->name,
          'email'    => $request->email,
          'type'     => 'faculty',
          'password' => bcrypt($request->password)
      ]);

      $faculty = Faculty::create([
          'name'            => $request->name,
          'designation'     => $request->designation,
          'email'           => $request->email,
          'phone'           => $request->phone,
          'website'         => $request->website,
          'address'         => $request->address,
          'education_leave' => $request->has('education_leave')?1:0,
          'bio'             => $request->bio,
          'user_id'         => $user->id
      ]);

      //Profile Picture
      if($request->hasFile('avatar')){
          $this->saveProfileImage($request->file('avatar'), $faculty->id);
      }

      //Flash::success('Faculty created successfully.');
      return redirect('/admin/faculty');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function saveProfileImage(UploadedFile $file,$faculty_id){
      $image=Image::make($file);
      $image->resize(240,300);
      $Image->save(public_path('/uploads/faculty/faculty_$faculty_id.jpg'));
    }
}
