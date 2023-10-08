<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Secretary;
use App\Models\Person;


class SecretariesController extends Controller
{
    public function index(){
        $secretaries = Secretary::with('person')->orderBy('period','desc')->get();
        return Inertia::render('Admin/Secretaries/index',[
            'secretaries' => $secretaries
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Secretaries/create');
    }
    public function store(Request $request){
        $person = new Person();
        $person->name = $request->name;
        $person->last_name = $request->lastName;
        $person->save();

        $secretary = new Secretary();
        $secretary->person_id = $person->id;
        $secretary->period = $request->period;
        $secretary->save();
        sleep(1);

        return redirect()->route('secretaries.index')->with('message', 'Blog Created Successfully');
    }
    public function edit($id){
        $secretary = Secretary::where('person_id',$id)->with('person')->orderBy('period','desc')->first();
        return Inertia::render('Admin/Secretaries/edit',[
            'secretary' => $secretary
        ]);
    }
    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->name = $request->name;
        $person->last_name = $request->lastName;
        $person->save();

        $secretary = Secretary::where('person_id',$id)->first();
        $secretary->period = $request->period;
        $secretary->save();
        sleep(1);

        return redirect()->route('secretaries.index')->with('message', 'Blog Updated Successfully');
    }

    public function destroy($id)
    {
        $person = Person::find($id)->delete();
        $secretary = Secretary::where('person_id',$id)->delete();
        sleep(1);

        return redirect()->route('secretaries.index')->with('message', 'Blog Delete Successfully');
    }
}
