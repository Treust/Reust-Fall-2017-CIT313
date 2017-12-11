<?php

class LoginController extends Controller{

   protected $userObject;

   public function do_login() {
	   // handle login

       $this->userObject = new Users();
       //if test 1 check to see if login/password match
       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

              //if test 2 check if user is active
              if($userinfo->isActive()) {

                  //if test 3
                  if(strlen($_SESSION['redirect']) > 0 ) {
                      $view = $_SESSION['redirect'];
                      unset($_SESSION['redirect']);
                      header('Location: '.BASE_URL.$view);
                    }
                    //else for test 3
                    else {
                      header('Location: '.BASE_URL);
                    }
              //else test 2
              else {
                $this->set('error','awaiting admin approval');
                }
        //else test 1
       else {
           $this->set('error','Wrong password / email combination');
            }
       }
     }
   }


    public function logout() {

    //unset the session id
        unset($_SESSION['uID']);

    // close the session
        session_write_close();

    // send to the homepage
        header('Location: '.BASE_URL);

    }

}
