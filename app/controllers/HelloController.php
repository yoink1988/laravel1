<?php
class HelloController extends BaseController
{
    public function showIndex($name = '%username%')
    {
        return View::make('hello.index', array('username' => $name));
    }

    public function showForm()
    {
        return View::make('hello.form');
    }

    public function postForm()
    {
    //    return View::make('hello.post', array('name' => Input::get('name')));
        return Redirect::route('bladepath');  ///<--imya marshruta   Redirect::route - dla psevdonimov\\\\\ Redirect::to - dla imen
    }

    public function showBlade()
    {
        return View::make('hello.blade', array('list' => array(1,2,3,4,5),'item'=>'my text', 'ival' => 100));
    }
}
?>
