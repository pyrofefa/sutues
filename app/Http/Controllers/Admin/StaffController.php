<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Staff;
use App\Models\Person;

class StaffController extends Controller
{
    public function index(){
        $staff = Staff::with('person')->get();
        return Inertia::render('Admin/Staff/index',[
            'staff' => $staff
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Staff/create');
    }
    public function store(Request $request){
        $person = new Person();
        $person->name = $request->name;
        $person->last_name = $request->lastName;
        $person->save();

        $staff = new Staff();
        $staff->person_id = $person->id;
        $staff->position = $request->position;
        $staff->save();
        sleep(1);

        return redirect()->route('staff.index')->with('message', 'Blog Created Successfully');
    }
    public function edit($id){
        $staff = Staff::where('person_id',$id)->with('person')->first();
        return Inertia::render('Admin/Staff/edit',[
            'staff' => $staff
        ]);
    }
    public function update(Request $request, $id){
        $person = Person::find($id);
        $person->name = $request->name;
        $person->last_name = $request->lastName;
        $person->save();

        $staff = Staff::where('person_id',$id)->first();
        $staff->position = $request->position;
        $staff->save();
        sleep(1);

        return redirect()->route('staff.index')->with('message', 'Blog Updated Successfully');
    }
    public function destroy($id){
        $person = Person::find($id)->delete();
        $staff = Staff::where('person_id',$id)->delete();
        sleep(1);

        return redirect()->route('staff.index')->with('message', 'Blog Delete Successfully');
    }
}
