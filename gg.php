<?php

$str ='ddLL';

echo preg_replace('/([A-Za-z])\1+/', '\1', $str);