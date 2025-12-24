<?php 
namespace tests\unit\models;

use app\models\Book;
use Codeception\Test\Unit;

class BookTest extends Unit{
    protected $tester;

    protected function _before()
    {
       
    }

    public function testValidation(){
        $model = new Book();
      //  $this->assertFalse($model->validate());

        $model->title = 'Ужас один...';
        $model->author = 'автор';
        $model->year = 900;

        $this->assertFalse($model->validate());
    }
}
?>