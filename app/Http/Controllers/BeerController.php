<?php
/**
 * Created by PhpStorm.
 * User: yaron
 * Date: 26-1-16
 * Time: 19:27
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Collection;

class BeerController Extends Controller{
  public function Frontpage() {
    $cold = getenv('COLD');
    $bringers = User::orderBy('lastbrought', 'desc')->get(['name']);
    $current_bringer = $bringers->shift();
    $youtube = getenv('YOUTUBE');

    $sec = strtotime('17:00 GMT+1') - $_SERVER['REQUEST_TIME'];
    if ($sec > 0) {
      $time = floor($sec/ 60 / 60) . ' Uren, ' . floor($sec/ 60) % 60 . ' minuten en ' . $sec % 60 . ' seconden.';
    }
    else {
      $time = 'Het is tijd voor bier!';
    }

    return view('frontpage', compact('cold', 'bringers', 'current_bringer', 'youtube', 'time'));
  }

  public function Json() {
    $cold = getenv('COLD');
    $bringers = User::orderBy('lastbrought', 'desc')->get(['name']);
    $current_bringer = $bringers->shift()->name;
    $bringers = $bringers->pluck('name');
    $youtube = getenv('YOUTUBE');
    return response()->json(compact('cold', 'bringers', 'current_bringer', 'youtube'));
  }
}