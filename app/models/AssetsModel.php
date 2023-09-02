<?php


class AssetsModel {
    public function chkExistingFile($conn, $data) {
        $conn->query('SELECT * FROM ASSETS_UPLOAD WHERE ASSET_RAR_RAN_NUM = :ASSET_RAR_RAN_NUM
                      OR ASSET_IMG_RAN_NUM = :ASSET_IMG_RAN_NUM OR ASSETFILE_ID = :ASSETFILE_ID');

        $conn->bind(':ASSET_RAR_RAN_NUM', $data['random_number_rar']);
        $conn->bind(':ASSET_IMG_RAN_NUM', $data['random_number_img']);
        $conn->bind(':ASSETFILE_ID', $data['asset_file_id']);
        $conn->execute();
            
        //check if the email is already taken
        return ($conn->rowCount() > 0) ? true : false;
    }


    public function fileUpload($conn, $data) {
        $conn->query('INSERT INTO ASSETS_UPLOAD(ASSETFILE_ID, ASSET_NAME, ASSET_DESC, ASSET_FILE_NAME, ASSET_RAR_FILE_EXT,
                                                ASSET_IMG_FILE_EXT, ASSET_RAR_RAN_NUM, ASSET_IMG_RAN_NUM)
                                        VALUES (:ASSETFILE_ID, :ASSET_NAME, :ASSET_DESC, :ASSET_FILE_NAME, :ASSET_RAR_FILE_EXT,
                                                :ASSET_IMG_FILE_EXT, :ASSET_RAR_RAN_NUM, :ASSET_IMG_RAN_NUM)');

        $conn->bind(':ASSETFILE_ID', $data['asset_file_id']);
        $conn->bind(':ASSET_NAME', $data['asset_name']);
        $conn->bind(':ASSET_DESC', $data['asset_desc']);
        $conn->bind(':ASSET_FILE_NAME', $data['asset_name']);
        $conn->bind(':ASSET_RAR_FILE_EXT', $data['asset_rar_ext']);
        $conn->bind(':ASSET_IMG_FILE_EXT', $data['asset_img_ext']);
        $conn->bind(':ASSET_RAR_RAN_NUM', $data['random_number_rar']);
        $conn->bind(':ASSET_IMG_RAN_NUM', $data['random_number_img']);
        $inserted = $conn->execute();

        if($inserted){
            return true;
        }
        else {
            return false;
        }
    }


    public function getUploadedAssets($conn) {
        $conn->query('SELECT * FROM ASSETS_UPLOAD LIMIT 20');

        $conn->execute();
        $row = $conn->rowCount();
        $fetch = $conn->fetchAll();

        return ($row > 0) ? $fetch : false;
    }
}