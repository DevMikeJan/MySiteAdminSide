<?php

namespace app\controllers;

class AssetsCtrler extends Controller {
    public $connection;

    public function __construct($conn){
        $this->assetModel = $this->model('AssetsModel', $this->connection);
        $this->connection = $conn;
        
    }
    public function viewPage($view){
        $assetList = $this->showUploadedAssets();
        require_once $this->userPages($view);
    }

    public function showUploadedAssets(){
        $fetchAssets = $this->assetModel->getUploadedAssets($this->connection);

        return $fetchAssets;
    }
}