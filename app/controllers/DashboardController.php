<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\Register;
use App\User;

new Database;
class DashboardController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $user = User::count();
        Blade::render('back-end/main-view/dashboard',compact('user'));
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
