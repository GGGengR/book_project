<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
////    登录进入,判断跳转
//    public function renders(){
//        $user = $this->getUser();
////        $this->get('logger')->info($user->getRoles());
//        if (in_array("ROLE_ADMIN", $user->getRoles())) {
//            return $this->redirectToRoute("album");
//        }
//        if (in_array("ROLE_BIGPROXY", $user->getRoles())) {
//            return $this->redirectToRoute("staffManage");
//        }
//        return $this->redirectToRoute("app_login");
//    }
     public function index(){
        return $this->render(
            'index/index.html.twig'
        );
    }
}

?>