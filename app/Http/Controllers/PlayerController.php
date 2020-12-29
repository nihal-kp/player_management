<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players =  Player::all();
        return view('index',['players'=>$players]);
    }

    public function add(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|min:4',
            'country' => 'required',
            'score' => 'required|numeric'
        ]);
        $player = new Player;
        $player->name = $req->name;
        $player->country = $req->country;
        $player->score = $req->score;
        $player->save();
        return '<script>
                    alert("Successfully added a new player!!"); 
                    window.location.href="/";
                </script>';
    }

    public function edit($id)
    {
        $player = Player::find($id);
        return view ('edit',['player'=>$player]);
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'name' => 'required|min:4',
            'country' => 'required',
            'score' => 'required|numeric'
        ]);
        $player = Player::find($id);
        $player->name = $req->name;
        $player->country = $req->country;
        $player->score = $req->score;
        $player->save();
        return '<script>
                    alert("Details updated!"); 
                    window.location.href="/";
                </script>';
    }

    public function destroy($id)
    {    
        Player::destroy($id);
        return redirect("/");
    }

    public function search(Request $req)
    {
        $players = Player::where('name', 'like', '%'.$req->input('search').'%')
        ->orWhere('country', 'like', '%'.$req->input('search').'%')
        ->get();
        return view('search',['players'=>$players]);
    }

    public function ascending()
    { 
        $players = Player::orderBy('score', 'ASC')
        ->get();
        return view('index',['players'=>$players]);
    }

    public function descending()
    { 
        $players = Player::orderBy('score', 'DESC')
        ->get();
        return view('index',['players'=>$players]);
    }
}
