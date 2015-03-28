<?php
/**
* \HomeController
*/
class HomeController extends BaseController {

  public function home()
  {
    return View::make('home')->withTitle('KillTYZ 干掉拖延症');
  }
  public function storage()
  {
    $user_id = 2;
    if (Task::where('user_id', $user_id)->count()) {
      $task = Task::where('user_id', $user_id)->first();
    } else {
      $task = new Task;
    }

    $task->user_id = $user_id;
    $task->tasks = json_encode($_POST);
    $task->save();
    exit;
  }
}