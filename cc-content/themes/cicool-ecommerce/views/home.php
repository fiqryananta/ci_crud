<?=get_header();?>
<body id="page-top">
   <?=get_navigation();?>
   <?=get_view_component('search-nav');?>
<div class="container" style="margin-top: 140px;">
</div>
   <?=cicool()->eventListen('coshop_home_top');?>
<div class="container" >
    <div class="col-md-12">
   <?=get_view_component('carousel/carousel');?>
    </div>
</div>

<div class="container" >
    <div class="col-md-12">
   <?=get_view_component('category/slide-category');?>
    </div>
</div>

<!-- 
<div class="container " style="margin-top: 30px;">
    <div class="col-md-12">
        <span class="brand-title">SHOES</span>
        <span class="brand-title pull-right">Show All <i class="fa  fa-chevron-circle-right "></i></span>
        <div class="clearfix">

        </div>
        <div class="container-brand" >
           <div class="col-md-3" style="background: url('https://cf.shopee.co.id/file/f154cce9597284c0cc6a6d1c3cc560f5');  background-size: contain; background-repeat: no-repeat; height: 400px;">
            <img src="" alt="">
           </div>
           <div class="col-md-9">
            <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="col-md-4 col-sm-4">
                <center>

                <div class="brand-info">
                    Shoes
                </div>
                <img src="<?=theme_asset()?>img/brand.png" alt="" style="height: 160px">
                </center>
            </div>
            <?php endfor;?>
            </div>
        </div>
    </div>
</div>
 -->
<div class="container" style="margin-top: 30px;"">

    <?php foreach($this->model_product->get(null, null, 10) as $product): ?>
    <div class="col-md-2 col-sm-3 col-xs-6">
      <?=get_view_component('product-single-item', ['product' => $product])?>
    </div>
    <?php endforeach;?>
</div>

<?=get_footer();?>