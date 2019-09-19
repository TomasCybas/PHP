<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::all();

        return view('owners.index', ['owners' => $owners]);
    }

    public function createOwner(){

        return view('owners.new');
    }

    public function storeOwner(Request $request){

        $owner = new Owner();
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->save();
        return redirect()->route('owners');

    }

    public function showOwner($id){
        $owner = Owner::find($id);
        return view('owners.details', ['owner' => $owner]);
    }

    public function editOwner($id){
        $owner = Owner::find($id);
        return view('owners.edit', [
            'owner' => $owner,
        ]);
    }

    public function updateOwner($owner_id, Request $request){
        $owner = Owner::find($owner_id);
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->save();
        return redirect()->route("owners.details", $owner_id);


    }

    public function deleteOwner($owner_id){
        Owner::destroy($owner_id);
        return redirect()->route('owners');
    }


}
