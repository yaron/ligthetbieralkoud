<?php
/**
 * Created by PhpStorm.
 * User: yaron
 * Date: 27-1-16
 * Time: 15:25
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class updateBringer extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'beer:update-bringer';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Update the person who has to fetch the next beer';

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $bringers = User::orderBy('lastbrought', 'desc')->get();
    $new_bringer = $bringers->pop();
    $this->comment('new bringer is ' . $new_bringer->name);
    $new_bringer->lastbrought = date('Y-m-d', time());
    $new_bringer->save();
  }
}