<?php 

require __DIR__ . '/../vendor/autoload.php';
require_once '../app/config/Config.php';
require_once '../app/helpers/session.php';
use App\libraries\Database;
use App\libraries\Routes;
use App\controllers\Controller;
use App\controllers\HomeCtrler;
use App\controllers\RegistrationCtrler;
use App\controllers\LoginCtrler;
use App\controllers\LogoutCtrler;
use App\controllers\AssetsCtrler;
use App\controllers\UploadCtrler;

//echo rand(100000000,999999999);




Routes::get('/', function(){
    $database = new Database();
    $home = new HomeCtrler($database);
    $home->homeView('index');
});

Routes::get('Register', function(){
    $database = new Database();
    $login = new RegistrationCtrler($database);
    $login->viewPage('register');
});

Routes::get('Login', function(){
    $database = new Database();
    $login = new LoginCtrler($database);
    $login->viewPage('login');
});

Routes::get('Assets', function(){
    $database = new Database();
    $assets = new AssetsCtrler($database);
    $assets->viewPage("assets");
});

Routes::get('UploadAssets', function(){
    $database = new Database();
    $uploadAssets = new UploadCtrler($database);
    $uploadAssets->viewPage("uploadAssets");
});

Routes::get('ProceedUpload', function(){
    $database = new Database();
    $uploadAssets = new UploadCtrler($database);
    $uploadAssets->uploadAsset();
});