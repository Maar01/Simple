<?php

require_once 'vendor/autoload.php';

/*require_once 'Database.php';
require_once 'User.php';

spl_autoload_register(function (string $FQN){
    echo 'Autoload called with Fully Qualified Name: ' . $FQN . PHP_EOL;
});*/

echo 'Hello World!' . PHP_EOL;

echo 'getClass() = ' . get_class(new \Maar10\Simple\Storage\Database()) . PHP_EOL;
echo 'getClass() = ' . get_class(new \Maar10\Simple\Model\User()) . PHP_EOL;