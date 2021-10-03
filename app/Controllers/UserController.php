<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request;

class UserController extends Controller {
    
    public function user() {
        $this->view('user');

 
    }
    public function gutem (Request $request) {
    $user = $request->getParams();
    $user = $user['get'];
    $this->view('userLog',['userLog' => $user]);
    }
}
