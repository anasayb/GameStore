<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class GameController extends Controller
{
    //show game page
    public function index($page){
        return view('games', [
            'heading' => 'New and Trending Games',
            'games' => Games::getPage($page)
        ]);
    }

    //show single game
    public function show($slug){
        $GameRow = Games::where('slug', '=', $slug)->get();
        return view('game', [
            'game' => $GameRow[0]
        ]);
    }

    //show most popular games
    public function showMostPopular(){
        $gameLibrary = Games::select()->get();
        $Pgames= array($gameLibrary[1]);
        $counter=0;
        for ($x = 0; $x <= 1000; $x++){
            if ($gameLibrary[$x]['added']>= 10000) {
                $Pgames[$counter]=$gameLibrary[$x];
                $counter++;
            }
            if ($counter>=100) {
                break;
            }
        }
        return view('games', [
            'heading' => 'Most Popular Games',
            'games' => $Pgames
        ]);
    }

        //show highest rated games
        public function showHighestRated(){
            $gameLibrary = Games::select()->get();
            $Pgames= array($gameLibrary[1]);
            $counter=0;
            for ($x = 0; $x <= 1000; $x++){
                if ($gameLibrary[$x]['rating']>= 4.5) {
                    $Pgames[$counter]=$gameLibrary[$x];
                    $counter++;
                }
                if ($counter>=100) {
                    break;
                }
            }
            return view('games', [
                'heading' => 'Highest Rated Games',
                'games' => $Pgames
            ]);
        }
                    //show longest games
                    public function showLongestGames(){
                        $gameLibrary = Games::select()->get();
                        $Pgames= array($gameLibrary[1]);
                        $counter=0;
                        for ($x = 0; $x <= 1000; $x++){
                            if ($gameLibrary[$x]['playtime']>= 40) {
                                $Pgames[$counter]=$gameLibrary[$x];
                                $counter++;
                            }
                            if ($counter>=100) {
                                break;
                            }
                        }
                        return view('games', [
                            'heading' => 'Longest Games',
                            'games' => $Pgames
                        ]);
                    }
}