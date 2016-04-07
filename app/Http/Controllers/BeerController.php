<?php
/**
 * Created by PhpStorm.
 * User: yaron
 * Date: 26-1-16
 * Time: 19:27
 */

namespace App\Http\Controllers;


use App\User;
use App\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BeerController Extends Controller {
  protected $coldBool;
  protected $cold;
  protected $bringers;
  protected $currentBringer;
  protected $youtube;
  protected $time;

  protected function __constructor() {
    $this->coldBool = (bool) getenv('COLD');
    $this->cold = $this->coldBool ? 'Ja!' : 'Nee';

    $this->bringers = User::orderBy('lastbrought', 'desc')->get(['name']);
    if ($this->bringers->isEmpty()) {
      throw new \ErrorException('No users to choose.');
    }

    $this->currentBringer = $this->bringers->shift();
    $this->youtube = Youtube::orderBy('used', 'desc')->first(['youtube_id'])->youtube_id;

    $sec = strtotime('17:00 GMT+1') - $_SERVER['REQUEST_TIME'];
    if ($sec > 0) {
      $this->time = floor($sec/ 60 / 60) . ' Uren, ' . floor($sec/ 60) % 60 . ' minuten en ' . $sec % 60 . ' seconden.';
    }
    else {
      $this->time = 'Het is tijd voor bier!';
    }
  }
  
  public function Frontpage() {
    return view('frontpage', [
      'coldBool' => $this->coldBool,
      'cold' => $this->cold,
      'bringers' => $this->bringers,
      'current_bringer' => $this->currentBringer,
      'youtube' => $this->youtube,
      'time' => $this->time,
    ]);
  }

  public function Json() {
    return response()->json([
      'cold' => $this->cold,
      'bringers' => $this->bringers,
      'current_bringer' => $this->currentBringer,
      'youtube' => $this->youtube,
    ]);
  }

  public function Update() {
    return view('beer.update');
  }
}
