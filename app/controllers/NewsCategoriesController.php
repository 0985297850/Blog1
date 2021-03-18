<?php
namespace App\controllers;
use App\Blade\Blade;
use App\database\Database;
use App\NewsCategories;
use App\Register;
use App\User;

new Database;
class NewsCategoriesController extends Controller
{
    /**
     * @function index()
     * List All data from database
     * Example : Register::all()
     */
    public function index(){
        $news_categories = NewsCategories::all();
        Blade::render('back-end/newsCategories/categories-news',compact('news_categories'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     * Example : Register::create($data)
     */
    public function create(){
        $html = getCategory($parent_id = 0);
        Blade::render('back-end/newsCategories/add-categories',compact('html'));
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     * Example : Register::create($data)
     */
    public function store(){
        $name = $_POST['nameCategories'];
        $cate = $_POST['newsCategories'];
        $category = NewsCategories::create([
            'name'=>$name,
            'parent_id'=>$cate,
        ]);
        if($category){
            header('Location:/small/back-end/categories-news');
        }
        else{
            echo "<script>alert('Thêm danh mục thất bại'); window.location= '/small/back-end/categories-news';</script>";
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
        $name = $_POST['nameUpCategories'];

        $update_categories = NewsCategories::find($id['id']);
        $news_categories = $update_categories->update([
            'name'=>$name,
        ]);
        if ($news_categories){
            echo " <script> alert('Update Thành Công!');window.location='/small/back-end/categories-news' ;</script> ";
        }else{
            echo "<script> alert('Update Thất Bại!'); </script>";
            header('Location:/small/back-end/categories-news');
        }
    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     * Example : Register::delete()
     */
    public function edit($id){
        $news_categories = NewsCategories::find($id['id']);
        Blade::render('/back-end/newsCategories/edit-categories',compact('news_categories'));
    }



    public function delete($id){
        NewsCategories::destroy($id);
        header('Location:/small/back-end/categories-news');
    }

    protected function registerCheck(array $input)
    {
        // TODO: Implement registerCheck() method.
    }
}
