<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\User;

new Database;

class RegisterController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        Blade::render('back-end/auth/register');
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */
    public function create(){


    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){
        $email = $firstname = $lastname  = $password = $confirm = "";
        if (!empty($_POST['email'])){
            $email = $_POST['email'];
        }


        if (!empty($_POST['firstname'])){
            $firstname = $_POST['firstname'];
        }

        if (!empty($_POST['lastname'])){
            $lastname = $_POST['lastname'];
        }

        if (!empty($_POST['password'])){
            $password = $_POST['password'];
        }
        if ($email != "" && $firstname != "" && $lastname  != "" && $password != ""){
            $user = User::create([
                'email'=> $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'password' => $password,
            ]);
            if ($user){
                echo "oke";
                header('Location:login');
            }else{
                echo "lỗi";
            }
        }else{
            echo "Lỗi";
        }
    }
    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     * Example : Register::find($id)
     */
    public function show($id){
        print_r($id['id']);
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     * Example : Register::find($id)->update($data)
     */
    public function update($id){

    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function delete($id){

    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
