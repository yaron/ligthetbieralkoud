<?php
/**
 * Created by PhpStorm.
 * User: yaron
 * Date: 27-1-16
 * Time: 15:55
 */

namespace App\Http\Controllers;

use App\Youtube;

class YoutubeController Extends Controller {

  public function index() {
    $youtubes = Youtube::orderBy('used', 'desc')->get();
    return view('youtube.list', compact('youtubes'));
  }

  public function create() {
    return view('youtube.add');
  }
}
