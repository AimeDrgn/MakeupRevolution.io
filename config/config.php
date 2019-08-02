<?php

return [
    "name" => "Wordify blog",
    "description" => "My blog",
    "base_url" => "http://mthree.local:8080",
    "db" => [
        "dsn" => "mysql:host=localhost;dbname=mthree",
        "username" => "credis",
        "password" => "credis",
    ],
    "routes" => require ROOT_PATH . 'config'. DIRECTORY_SEPARATOR. 'routes.php'
];