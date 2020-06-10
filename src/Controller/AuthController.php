<?php

namespace Controller;

use Entity\User;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class AuthController extends AbstractController
{
    public function login(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);

        if ($request->request->has("username") && $request->request->has('password')) {
            $users = $userRepo->findBY(array("nickname" => $request->request->get('username'), "password" => $request->request->get('password')));
            if (count($users) == 1) {
                $request->getSession()->set("user", $users[0]);
                return $this->redirectToRoute('display');
            } else {
                $errorMsg = "Wrong login or password.";
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render('LoginForm.php', $data);
            }
        } else {
            $data = array(
                "errorMsg" => null
            );
            return $this->render('LoginForm.php', $data);
        }
    }

    public function logout(Request $request): Response
    {
        if ($request->getSession()->has('user')) {
            $request->getSession()->remove('user');
        }
        return $this->redirectToRoute('display');
    }

    public function register(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);
        $manager = $this->getOrm()->getManager();

        if ($request->request->has('username') && $request->request->has('password') && $request->request->has('passwordRetype')) {
            $errorMsg = NULL;
            $users = $userRepo->findBy(array("nickname" => $request->request->get('username')));

            if (count($users) > 0) {
                $errorMsg = "Nickname already used.";
            } else if ($request->request->get('password') != $request->request->get('passwordRetype')) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($request->request->get('password'))) < 8) {
                $errorMsg = "Your password should have at least 8 characters.";
            } else if (strlen(trim($request->request->get('username'))) < 4) {
                $errorMsg = "Your nickame should have at least 4 characters.";
            }
            if ($errorMsg) {
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render('RegisterForm.php', $data);
            } else {
                // $user = CreateNewUser($request->request->get('username'), $request->request->get('password'));
                $user = new User();
                $user->nickname = $request->request->get("username");
                $user->password = $request->request->get("password");
                $user->contact = $request->request->get("contact");
                $manager->persist($user);
                $manager->flush();
                $request->getSession()->set("user", $user);
                return $this->redirectToRoute('display');
            }
        } else {

            $data = array(
                "errorMsg" => null
            );
            return $this->render('RegisterForm.php', $data);
        }
    }
}
