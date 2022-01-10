<?php cicool()->eventListen('product_item_single') ?>

<?php 
$product = new Product\Product_single_item($product);
?>
<a class="product-item" href="<?= site_url('product/detail/'.$product->getUrl()) ?>">
    <div class="product-image" style="background-image: url('<?= $product->getImageCover() ?>'); background-size: contain; background-repeat: no-repeat; ">
    </div>
    <div class="product-content">
        <div class="product-content-name">
            <?= ucwords(($product->getName())) ?>
        </div>
        <div class="product-content-price">
            <!-- <s class="product-content-price-s">USD 54.000</s>   --><?= $product->getPriceFormat() ?>
        </div>
       <!--  <img src="https://cdn.tokopedia.net/img/star-4-new.png" class="product-content-rating" alt=""><span class="product-content-rating-count">(4)</span> -->
    </div>
    <div class="product-footer">
        <div class="product-footer-store-name">
            <?= ucwords(($product->merchant->getName())) ?>
        </div>
        <!-- <div class="product-footer-location">
            <img src="<?= theme_asset() ?>img/location-pin.svg" alt="" class="product-footer-location-marker"> location name
        </div> -->
    </div>
</a>