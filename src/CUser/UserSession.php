<?php
namespace Mos\CUser;

class UserSession implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;

    public function add($user)
   {
       $users = $this->session->get('users', []);
       $users[] = $user;
       var_dump( $this->session->get('users', []));
       $this->session->set('users', $users);
   }

   public function currentuser()
   {
         $user=$this->session->get('users', []);
         if(isset($user[0]) && !empty($user))
         {
            return true;
        }else{
            return false;
        }
   }

   public function logout()
   {
        $this->session->set('users', []);
        //session_unset($this->session->get('users', []));
        //echo 'in usersession';
        //var_dump( $this->session->get('users', []));

   }
}
