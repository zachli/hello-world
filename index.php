<?php

use Helloworld\Log;

$log = new Log();

$log->setMessage("hello world!");

echo $log->getMessage();
