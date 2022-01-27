<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function start(){
        $playerNext = "X";
        $steps = array (1 => '_', 2 => '_', 3 => '_', 4 => '_', 5 => '_', 6 => '_', 7 => '_', 8 => '_', 9 => '_',);
        Storage::disk('local')->put('bd.txt',json_encode($steps));
        return view('player', compact("steps", "playerNext"));
    }
    public function stepX($player, $step)
    {
        $steps = json_decode(Storage::get("/bd.txt"),true);
        if($steps[$step] === "_"){
            $steps[$step] = "$player";
            if ($player === "X"){
                $playerNext = "O";
            } else{
                $playerNext= "X";
            }
            Storage::disk('local')->put('bd.txt',json_encode($steps));
        } else{
            $playerNext= $player;
        }
        return view('player', compact("steps","playerNext"));
    }

}
