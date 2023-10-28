<!--2.	Создать класс User с открытыми свойствами логин и пароль, конструктором класса, получающим на вход значения логина и 
пароля,  и методом, выводящим на экран строку «У пользователя с логином … пароль - …». Создать объект данного класса и, 
используя метод, вывести его логин и пароль.-->

<?php
class User {
    public string $login;
    public string $password;
    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function write(){
       
        return 'У пользователя с логином '. $this->login .' пароль '.  $this->password .'<br>';
    }
}

$user = new User('UserLogin', '54445');
$user1 = new User('UserLogin1', '345864');

echo $user->write();
echo $user1->write();

?>