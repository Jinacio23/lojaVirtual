<?php

class LoginController extends RenderView
{

    public function index(){
        $this->loadView('login',[]);
    }

}