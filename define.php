<?php

//定数: 変更されない値につけるラベル

define("MY_EMAIL", "mail@mail");

echo MY_EMAIL;

// MY_EMAIL = "hogehoge"など、変更しようとするとエラーになる

var_dump(__LINE__); //現在の行数を出力
var_dump(__FILE__); //ファイル名
var_dump(__DIR__); //ディレクトリ名
