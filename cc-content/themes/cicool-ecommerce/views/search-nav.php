
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-search" style="margin-top: 27px;">
    <!-- /.container-fluid -->
    <div class="header-second-top">

     <div class="container">
        <div class="col-md-2">
            <a href="/"><img src="<?= theme_asset() ?>img/logo-white.png" alt="" class="main-logo"></a>
            
            <a href="" title="" class="bar-menu">
             <!--    <i class="fa fa-bars" style="float: right;color: #fff; font-size: 30px;margin-top: 10px"></i> -->
             <img src="<?= theme_asset() ?>img/menu.svg" style="width:25px;float: right;color: #fff; font-size: 30px;margin-top: 12px" class="menu-bar">
            </a>
                 <div class="menu-category-container" style="display: none;">
                    <div class="shop-category-tile">SHOOP CATEGORY</div>
                    <div class="category-list-wrapper">
                    	<ul>
	                    <?php foreach(db_get_all_data('product_category') as $item): ?>
		                    <li><a href="<?= site_url('product/ct-'.url_title($item->category_name).'-'.$item->id) ?>" title=""><?= _ent(ucwords($item->category_name)) ?> <img src="<?= theme_asset() ?>img/chevron.svg" class="menu-bar"></a></li>
		                    <?php endforeach; ?>
		                </ul>
                    </div>
                    
                </div>
            <div class="menu-category-wrapper" style="display: none;">
                
            </div>

        </div>
        <div class="col-md-9 ">
                <form action="<?= site_url('product/all') ?>">
            <a class="btn-search" onclick="$(this).closest('form').submit()">
                <center><i class="fa fa-search"></i></center> </a>
                    
            <input type="" autocomplete="off" name="q" class="search-product" placeholder="Find product, store and brand"> 
                </form>
            <div class="search-suggest-bottom">
                <a href="" class="suggest-item" title=""></a>
                <!-- <a href="" class="suggest-item" title="">xiaomi redmi s2</a>
                <a href="" class="suggest-item" title="">t shirt</a> -->
            </div>

            <div class="search-result-container" style="display: none;">
               
            </div>
        </div>
        <div class="col-md-1 cart-button-wrapper">
            <a href="<?= base_url('cart') ?>" class="btn-cart"><img style="height:30px;" src="<?= theme_asset() ?>img/icon-cart.png" alt=""></a>

            <div class="cart-counter">-</div>
            <div class="cart-item-wrapper" style="display: none;">
              
            </div>
        </div>
     </div>
     </div>
</nav>

<script>
    $(function(){
         getCart()
    })
</script>
