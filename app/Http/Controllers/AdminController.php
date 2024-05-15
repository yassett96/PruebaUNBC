<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
// use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        // $users = User::all(); 
        $users = User::where('id', '!=', auth()->id())->get();
        return view('adminPanel', ['users' => $users]); 
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('adminPanel');
    }
    
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('adminPanel');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('adminPanel'); // Ajusta esto según donde quieras redirigir al usuario después de eliminar
    }
}
