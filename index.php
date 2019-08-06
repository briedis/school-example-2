<?php

require 'EmailInterface.php';
require 'EmailLogService.php';
require 'UserRepositoryInterface.php';
require 'UserService.php';
require 'UserArrayRepository.php';
require 'UserFileRepository.php';
require 'UserModel.php';

echo "<pre>";

//$repository = new UserArrayRepository();
$repository = new UserFileRepository();

$emails = new EmailLogService;

$userService = new UserService($repository, $emails);

$userService->register('Anonymous', 'test@test.test');

// foreach ($userService->getUsers() as $user) {
//     echo $user->name . "\n";
// }
var_dump($userService->getUsers());


echo "</pre>";