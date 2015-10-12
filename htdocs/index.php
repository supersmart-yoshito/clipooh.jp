<?php
require "../configs/config.php" ;
require "../configs/directory.php" ;
require "../libs/Smarty/Smarty.class.php" ;
require "../libs/App/Kernel.php" ;


// テンプレートエンジン設定
$smarty = new Smarty ;
$smarty->template_dir = dirname(__FILE__).'/../views' ;
$smarty->compile_dir = dirname(__FILE__).'/../compile' ;
$smarty->cache_dir = dirname(__FILE__).'/../cache' ;

// フレームワークカーネル生成
$kernel = new AppKernel($smarty) ;
$kernel->setModelDir(dirname(__FILE__).'/../models') ;
$kernel->setEntityDir(dirname(__FILE__).'/../entities') ;

// セッション設定
$sessionHandler = new SessionsModel();
session_set_save_handler($sessionHandler);                   
session_start();

// イベントディスパッチ
$kernel->dispatch() ;


