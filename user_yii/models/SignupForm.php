<?php
namespace app\models;
use Yii;
use yii\base\Model;

class SignupForm extends Model{
    public $username;
    public $email;
    public $password;
    public function rules(){
        return [
            [['username', 'email', 'password'], 'required'],
            ['email', 'email'],
            ['username', 'string', 'min' => 2, 'max' <= 255],
            ['password', 'string', 'min' => 6]
        ];
    }

    public function signup(){
        if(!$this->validate()){
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        if($user->save()){
            $auth = Yii::$app->authManager;
            $role = $auth->getRole('admin');
            $auth->assign($role, $user->id);
            return $user;
        }
        return null;
    }
}
?>