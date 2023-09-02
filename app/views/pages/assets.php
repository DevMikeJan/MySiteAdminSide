<?php
    require_once APPROOT . '/views/includes/header.php';
?>

<?php
        require APPROOT . '/views/includes/navigation.php';
?>

<div class = "all_assets_container", id = "all_assets_container">
    <div class = "assets_nav_header">
        <h3>All Assets</h3>
    </div>
    <div class = "assets_conten_items">
        <div class = "assets_content_items_wrapper">

            <?php if($assetList) : ?>
                <?php foreach($assetList as $asset):?>
                    <div class = 'griditems'>
                        <div class = "asset_img_holder">
                            <img src="<?php echo URLROOT . '/public/uploadedAssets/'.$asset->ASSET_IMG_RAN_NUM;?>" alt="">
                        </div>
                        <div class = "asset_info_wrapper">
                            <span>Name: <?php echo $asset->ASSET_NAME ?></span><br>
                            <span>Desc: <?php echo $asset->ASSET_DESC ?></span>
                        </div>
                    </div>
                <?php endforeach?>
            <?php endif ?>
        </div>
    </div>
</div>




<?php
    require_once APPROOT . '/views/includes/footer.php';
?>


