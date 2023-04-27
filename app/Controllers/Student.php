<?php
namespace App\Controllers;
use Config\Database;

class Student extends BaseController
{
    public function index()

    {
        $db=Database::connect();
        $query=$db->$query('SELECT * FROM information');
        $StudentList=$query->getResultArray();
        die();
        return View('Student/index',['data'=>$StudentList]);
    }
    public function new()
    {
        if(!$this->request->is('post')){
            return view('Student/new');
        }
        
    }
}
