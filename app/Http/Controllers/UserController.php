<?php
namespace App\Http\Controllers;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return Inertia::render('Users/Index', [
            'users' => User::paginate()
        ]);
    }
    public function create(){
        return Inertia::render('Users/create');
    }
    public function store(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        sleep(1);

        return redirect()->route('users.index')->with('success', 'Creado con éxito');
    }
    public function edit($id){
        $user = User::find($id);
        return Inertia::render('Users/edit',[
            'user' => $user
        ]);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!is_null($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        sleep(1);

        return redirect()->route('users.index')->with('warning', 'Editado con éxito');
    }
    public function destroy($id){
        $user = User::find($id)->delete();
        sleep(1);

        return redirect()->route('users.index')->with('danger', 'Eliminado con éxito');
    }
}
