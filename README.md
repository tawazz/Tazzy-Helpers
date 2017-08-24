# Tazzy-Helpers
php helper functions for common tasks ranging from database , file handling, validation,emails,hashing, tokens and sessions

# Using Tazzy-Helpers

* To use Tazzy-Helpers in your project:
    * include "Tazzy-Helpers/autoload.php";

* Database accesss:
* create secrets.php file
* add config

```php
$GLOBALS['config'] = [
  'db'        => [
      'driver'   => 'mysql',
      'host'     => 'localhost',
      'username' => 'root',
      'password' => 'secret',
      'db'       => 'database',
      'prefix'   => ''
  ]
];
```
    * edit the config file to set your database config settings. Note Database uses PDO

* There is two ways to use the database helpers, one way is to use the querybuilder class which uses php code to create sql queries
  and the other way is to inherit the Table class to use it on your models for a basic ORM

## DB usage

* Raw queries
```php
  $users = DB::getInstance()->query('Select * from users');
  if(!$users->count()){
      echo 'no such user found';
  }else{
    foreach($users->result() as $user){
        echo $user->username;
    }
  }
```

* Insert into Database

```php
$insert = DB::getInstance()-> insert('users',array(
  'firstname'=> 'john',
  'lastname'=> 'doe',
));
```

* Update
```php
$update = DB::getInstance()->update('users',array('id','=', '1'),array(
   'firstname'=> 'alex'
 ));
```
