<?php
    require_once APPROOT . '/views/includes/header.php';
?>

<?php
        require APPROOT . '/views/includes/navigation.php';
?>


<div class = "upload_assets_container", id = "upload_assets_container">
    <div class = "upload_nav_header">
        <h3>Upload Assets</h3>
    </div>
    <div class = "upload_conten_items">

        <div class = "upload_form_container">
            <form action=""  method = "POST" class = "uploadAssets"  id = "uploadAssets" enctype="multipart/form-data">
                <div class = "asset_img_wrapper">
                    
                    <div class = "asset_Img_Prev", id = "asset_Img_Prev">
                        <img src="<?php echo URLROOT; ?>/public/icons/image.png" alt="Image Preview" class = "actl_asset_img_src_ph" id ="actl_asset_img_src_ph">
                        <img src="" alt="Image Preview" class = "actl_asset_img_src" id ="actl_asset_img_src">
                    </div>
                    <div class = "asset_file_input_wrapper">
                        <div class = "assets_rar">
                            <span>File</span>
                            <input id = "uploadAssetsLink" type="hidden" value = "<?php echo URLROOT . '/ProceedUpload';?>">
                            <input class = "asset_file" id = "asset_file" type="file" name = "asset_file">
                        </div>
                        <div class = "assets_img">
                            <span>Image</span>
                            <input class = "asset_file_img" id = "asset_file_img" type="file" name = "asset_file_img">
                        </div>
                    </div>
                </div>
                
                <div class = "asset_nonfile_input">
                    <input type="text" placeholder = "Asset Name" name = "asset_name" class = "asset_name" id = "asset_name">
                    <input type="text" placeholder = "Asset Description" name = "asset_desc" class = "asset_desc" id = "asset_desc">
                    <button class = "upload_asset_btn" id = "" type = "submit" name = "upload_asset_btn">Upload</button>
                    <span class = "process_msg" id = "process_msg">
                    </span>
                </div>
                
            </form>
        </div>
    </div>
</div>



<?php
    require_once APPROOT . '/views/includes/footer.php';
?>


