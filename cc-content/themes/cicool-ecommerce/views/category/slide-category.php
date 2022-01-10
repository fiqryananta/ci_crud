<div class="content slider-home-content  slider-home-category">
	<div class="category-title-head">CATEGORY</div>
   <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                	<?php 
                	$categories = db_get_all_data('product_category');
                	?>
					
					       <?php foreach($categories as $category): ?>
                    <li class="glide__slide" >
                    	<a href="<?= site_url('product/ct-'.url_title($category->category_name).'-'.$category->id) ?>">
                    	<img src="<?= BASE_URL.'uploads/product_category/'.$category->category_image ?>" alt="">
                    	<div class="slide-category-name">
                    		<?= _ent($category->category_name) ?>
                    	</div>
                    	</a>
                    </li>
                	<?php endforeach ?>
                </ul>
            </div>
            <div class="glide">
              <!--  <div class="glide__arrows" data-glide-el="controls">
                 <button class="glide__arrow glide__arrow--prev" data-glide-dir="<">prev</button>
                 <button class="glide__arrow glide__arrow--next" data-glide-dir=">">next</button>
                            </div> -->
              <!-- <div class="glide__bullets" data-glide-el="controls[nav]">
                   <button class="glide__bullet" data-glide-dir="=0"></button>
                   <button class="glide__bullet" data-glide-dir="=1"></button>
                   <button class="glide__bullet" data-glide-dir="=2"></button>
               </div> -->
            </div>
        </div>
</div>

<link rel="stylesheet" href="<?= theme_asset() ?>js/plugin/glidejs/dist/css/glide.core.min.css">
<link rel="stylesheet" href="<?= theme_asset() ?>js/plugin/glidejs/dist/css/glide.theme.min.css">
<script src="<?= theme_asset() ?>js/plugin/glidejs/dist/glide.min.js"></script>

<script>
	$(function(){
    var perView = 7;
    if (window.is_mobile ) {
      perView = 3;
    }
		new Glide('.glide', {
		  type: 'carousel',
		  autoplay: 0,
		  animationDuration: 600,
		  animationTimingFunc: 'linear',
		  perView: perView,
		  gap : 0
		}).mount()
	})
</script>