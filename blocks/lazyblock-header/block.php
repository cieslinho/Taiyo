<header class="header">


    <div class="swiper mySwiper header__swiper">
   
           <div class="header__texts">
                 <h2 class="header__title">Salon Masażu</h2>
                 <h2 class="header__title header__subtitle">Wrocław</h2>
                 <a href="#pricing" class="header__link">Oferta</a>
                </div>
      
        <div class="swiper-wrapper header__boxes ">
   
            <?php forEach( $attributes['slide'] as $slide) : ?>
            <img src="<?php echo esc_url( $slide['image']['url'] ); ?>"
                alt="<?php echo esc_attr( $slide['image']['alt'] ); ?>" class="header__slide header__slide-desktop swiper-slide">
            <img src="<?php echo esc_url( $slide['image-mobile']['url'] ); ?>"
                alt="<?php echo esc_attr( $slide['image-mobile']['alt'] ); ?>" class="header__slide header__slide-mobile swiper-slide">
            <?php endforeach; ?>
        </div>
        <!-- <div class="swiper-button-next header__btn"></div>
        <div class="swiper-button-prev header__btn"></div> -->
        <div class="swiper-pagination header__pagination"></div>
    </div>

    </div>

</header>