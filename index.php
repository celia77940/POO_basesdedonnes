<?php

use App\Autoloader;
use App\Models\AnnoncesModel;
use App\Models\UsersModel;

require_once 'Autoloader.php';
Autoloader::register();

$model = new UsersModel;

$user = $model
->setEmail('contact@nouvelle-techno.fr')
->setPassword(password_hash('azerty', PASSWORD_ARGON2I));

$model->create($user);




// var_dump($annonce);





