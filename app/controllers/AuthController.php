<?php
/**
* \AuthController
*/
class AuthController extends BaseController {

  public function login()
  {
    $view = View::make('auth.login');
    $view->data = [];
    return $view;
  }
  public function APILogin()
  {
    $email = PostInput('email');
    $password = PostInput('password');

    $data = ['email'=>$email, 'password'=>$password];
    $validator = $this->validate($data, [
      'email' => 'required|email',
      'password' => 'required|min:6|max:20',
    ]);
    if ( !$validator->success ) {
      setcookie('validate_errors', json_encode($validator->errors), time() + 86400, '/');
      redirectBack();
    } else {
      $user = new User;
      $user->email = $email;

      $salt = mt_rand(0, 10000000000);
      $user->persist_code = $salt;
      $user->password     = hash("sha256", $password.$salt);
      if ( $user->save() ) {
        redirect();
      }
    }
  }
}