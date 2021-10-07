<?php

require __DIR__ ."/vendor/autoload.php";

use UdemyComposer\Response\JsonResponse;

$student = [
    'name' => 'John Doe',
    'course' => 'Software Engineering',
    'level' => '200',
    'collections' => ['books' => 'Intro to UML', 'music' => 'rap']
];

new JsonResponse('unauthorized','', $student);
