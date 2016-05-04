<?php
namespace Mos\CUser;

/**
 * A controller for users and admin related events.
 *
 */
class CUserTest extends \PHPUnit_Framework_TestCase
{


    private $user = 'admin';
    private $pass = 'admin';



    public function testaddAction()
    {
        /*
        $isPosted = $this->request->getPost('doCreate');

        if (!$isPosted) {
            $this->response->redirect($this->request->getPost('redirect'));
        }
        */
        $di    = new \Anax\DI\CDIFactoryDefault();
        $user = new \Mos\CUser\UserController();

        if($this->user == 'admin' && $this->pass=='admin')
        {
        $newUser = [
            'username'   => 'admin',
            'password'   => 'admin',
            'timestamp' => time(),
        ];

        $di->setShared('session', function () {
            $session = new \Anax\Session\CSession();
            $session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
        });


        $users = new \Mos\CUser\UserSession();
        $users->setDI($di);
        $users->add($newUser);
        //$this->response->redirect($this->request->getPost('redirect'));
    }
}

    public function testgetCurrentUser()
    {
        $di    = new \Anax\DI\CDIFactoryDefault();
        $users = new \Mos\CUser\UserSession();
        $users->setDI($di);

        $di->setShared('session', function () {
            $session = new \Anax\Session\CSession();
            $session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
        });


        $User=$users->currentuser();
        return $User;
    }

    public function testlogoutAction()
    {

        $di    = new \Anax\DI\CDIFactoryDefault();

        $users = new \Mos\CUser\UserSession();
        $users->setDI($di);

        $di->setShared('session', function () {
            $session = new \Anax\Session\CSession();
            $session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
        });


        $users->logout();
        //$url = $this->url->create('');
        //$this->response->redirect($url);
        //echo 'in usercontroller';
    }


}
