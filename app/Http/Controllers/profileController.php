<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function index()
    {
        $profiles = profile::paginate(10);
        // $profiles = profile::all();
        return view('profiles.index',compact('profiles'));
    }

    public function show(profile $profile)
    {
        return view('profiles.profile',compact('profile'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(profileRequest $request)
    {
        $name = $request->name;
        //validation
        $fomrFilds = $request->validated();
        //hash
        $fomrFilds['password'] = Hash::make($request->password);
        $this->uploadImage($request,$fomrFilds);
        //insert
        Profile::create($fomrFilds);
        //redicection
        return redirect()->route('profiles.index')->with('success','votre profiles '.$name.' est bien créé');
    }

    public function destroy(profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success','profiles '.$profile->name.' a été bien supprimer');
    }

    public function edit(profile $profile)
    {
        return view('Profiles.edit',compact('profile'));
    }

    public function update(profileRequest $request, profile $profile)
    {
        $fomrFilds = $request->validated();
        $fomrFilds['password'] = Hash::make($request->password);
        $this->uploadImage($request,$fomrFilds);
        $profile->fill($fomrFilds)->save();
        return redirect()->route('profiles.show',$profile->id)->with('success','le profile a été bien modifie');
    }

    private function uploadImage(profileRequest $request,array &$fomrFilds)
    {
        unset($fomrFilds['image']);
        if($request->hasFile('image')){
            return $request->file('image')->store('profile','public');
        }
    }
}
