<?php

use React\EventLoop\Factory;
use React\Filesystem\Filesystem;

require '../../vendor/autoload.php';

$loop = Factory::create();
$filesystem = Filesystem::create($loop);

$file = $filesystem->file('new_3.txt');
$file->open('c')->then(function () {
    echo 'File created' . PHP_EOL;
});

$loop->run();
