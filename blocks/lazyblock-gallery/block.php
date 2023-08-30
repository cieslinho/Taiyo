<section id="gallery" class="gallery">
    <div class="container">
        <h2 class="section-title">Galeria</h2>

        <div class="gallery__boxes">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                class="swiper mySwiper2 main-gallery ">
                <div class="swiper-wrapper gallery__main">
                <?php forEach( $attributes['gallery'] as $gallery) : ?>
                    <div class="swiper-slide gallery__main-slide">
                        <img src="<?php echo esc_url( $gallery['gallery-slide']['url'] ); ?>"
                alt="<?php echo esc_attr( $gallery['gallery-slide']['alt'] ); ?>"
                            class="gallery__main-img" />
                        <img src="<?php echo esc_url( $gallery['gallery-mobile']['url'] ); ?>"
                alt="<?php echo esc_attr( $gallery['gallery-mobile']['alt'] ); ?>"
                            class="gallery__main-img gallery__main-mobile" />
                    </div>
                    <?php endforeach; ?>
                    

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination header__pagination gallery__pagination"></div>

            </div>
            <div thumbsSlider="" class="swiper mySwiper thumbs-gallery ">
                <div class="swiper-wrapper gallery__thumbs">
                <?php forEach( $attributes['thumbnail'] as $thumbnail) : ?>
                    <div class="swiper-slide gallery__thumbs-slide">
                        <img src="<?php echo esc_url( $thumbnail['thumbnail-slide']['url'] ); ?>"
                alt="<?php echo esc_attr( $thumbnail['thumbnail-slide']['alt'] ); ?>"
                            class="gallery__thumbs-img" />
                    </div>
                    <?php endforeach; ?>
                    

                </div>
            </div>
        </div>
    </div>
</section>