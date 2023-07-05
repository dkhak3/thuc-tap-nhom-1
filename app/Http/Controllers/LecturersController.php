<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Lecturer;
use Illuminate\Support\Facades\DB;

class LecturersController extends Controller
{
    public function index() {
        $lecturer = DB::table('lecturers')->paginate(3);
        return view('lecturer.index', compact('lecturer'));

    }

    public function create()
    {
        return view('lecturer.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lecturer_name' => 'required',
            'lecturer_address' => 'required',
            'lecturer_phone' => 'required|numeric',
            'lecturer_birthday' => 'required',
        ]);
    
        Lecturer::create($validatedData);
    
        return redirect()->route('index');
    }

    public function edit($id, Request $request)
    {
        $validatedData = $request->validate([
            'lecturer_name' => 'required',
            'lecturer_address' => 'required',
            'lecturer_phone' => 'required|numeric',
            'lecturer_birthday' => 'required',
        ]);

        DB::table('lecturers')->where("id", $id)->update(['lecturer_name' => $validatedData['lecturer_name']]);
        DB::table('lecturers')->where("id", $id)->update(['lecturer_address' => $validatedData['lecturer_address']]);
        DB::table('lecturers')->where("id", $id)->update(['lecturer_phone' => $validatedData['lecturer_phone']]);
        DB::table('lecturers')->where("id", $id)->update(['lecturer_birthday' => $validatedData['lecturer_birthday']]);
        
        return redirect()->route('index');
    }

    public function editScreenLecturer($id)
    {
        $lecturer = DB::table('lecturers')->where('id', $id)->get();
        return view("lecturer.edit")->with('lecturer', $lecturer);
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $lecturer->update($request->all());
        return redirect()-view('lecturer.index');
    }

    public function destroy($id)
    {
        DB::table("lecturers")->where("id",$id)->delete();
        return redirect()->route('index');
    }

    public function search(Request $request){
        $product = Product::WHERE('lecturer_name','like','%'. $request->search.'%')
        ->orWHERE('lecturer_phone',$request->search)->get();
        return view('lecturer.search', compact('lecturer'));
    }
}
