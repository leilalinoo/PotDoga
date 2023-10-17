<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        return Club::all();
    }

    public function show($id){
        return Club::find($id);
    }

    public function destroy($id){
        Club::find($id)->delete();
        return redirect('/club/list');
    }

    public function update(Request $request, $id){
        $club = Club::find($id);
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }

    public function store(Request $request){
        $club = new Club();
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/club/list');
    }


    public function newView(){
        $clubs = Club::all();
        return view('club.new', ['clubs' => $clubs]);
    }

    public function editView($id){
        $clubs = Club::all();
        $club = Club::find($id);
        return view('club.edit', ['clubs' => $clubs, 'club' => $club]);
    }

    public function listView(){
        $clubs = Club::all();
        return view('club.list', ['clubs' => $clubs]);
    }

    public function deleteView(){
        $club = Club::all();
        return view("club.delete", ["clubs" => $club]);
    }

}
