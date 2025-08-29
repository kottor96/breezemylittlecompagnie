<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeController extends Controller
{
    public function index(){
        $team = Employe::all();
        return view('front.team',compact('team'));
    }
    public function create(){
        $team = Employe::all();
        return view('front.team',compact('team'));
    }
    
    public function destroy($id){
        Employe::where('id',$id)->delete();
        return Redirect()->route('team');
    }
    public function store(){
        Employe::create([
            'first_name' => request('nom'),
            'last_name' => request('prenom'),
            'email' => request('email'), 
            'departement_id' => request('departement_id')
        ]);
        return Redirect()->route('team');
    }
    public function update($id){
        $team = Employe::where('id',$id);
        return Redirect()->route('team');
    }
    
}
