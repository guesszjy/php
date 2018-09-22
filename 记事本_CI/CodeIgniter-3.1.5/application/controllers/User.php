<?php
define('BASEPATH') OR exit('No direct script accsee allowed');
class User extends CI_Controller{
    public function do_reg(){
        $uname = $this -> input -> post('uname');
        $pwd = $this -> input -> post('pwd');

        echo $uname,"||",$pwd;
    }
}
/**
 * Created by PhpStorm.
 * User: Administration
 * Date: 2018/9/15
 * Time: 14:54
 */
