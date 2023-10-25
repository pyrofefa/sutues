<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

use App\Models\Supplier;

class SuppliersController extends Controller
{
    public function index(){
        $suppliers = Supplier::paginate(10);
        return Inertia::render('Admin/Suppliers/index',[
            'suppliers' => $suppliers,
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Suppliers/create');
    }
    public function store(Request $request){
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->content = $request->lastName;
        $supplier->logo = $request->file('file')->getClientOriginalName();
        $supplier->save();

        if($request->file('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $file = $request->file('file');
            Storage::disk('public')->put('/supplier/'.$filename, \File::get($file));
        }
        sleep(1);

        return redirect()->route('staff.index')->with('message', 'Blog Created Successfully');
    }

}
