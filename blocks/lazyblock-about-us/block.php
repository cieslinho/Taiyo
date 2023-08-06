<section id="aboutus" class="about">
    <div class="container">
        <div class="about__boxes">
            <div class="about__box about__box-img">
            
  <img class="about__img" src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">

            </div>
            <div class="about__box about__box-info">
                <h2 class="about__subtitle">Gabinet masażu erotycznego we Wrocławiu</h2>
                <h2 class="about__title">o nas</h2>
                <div class="about__texts">
                <?php foreach( $attributes['texts'] as $text ): ?>
                    <p class="about__text"> <?php echo $text['text']; ?></p>
            
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>