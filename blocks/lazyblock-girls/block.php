<section id="girls" class="girls">
    <div class="container">
        <h2 class="section-title">
            Masażystki
        </h2>
        </div>
        <div class="girls__boxes">
        <?php foreach( $attributes['girl-box'] as $girl): ?>
            <div class="girls__box">
                <img src="<?php echo esc_url( $girl['image']['url'] ); ?>"
                alt="<?php echo esc_attr( $girl['image']['alt'] ); ?>" class="girls__box-img">
                <div class="girls__box-top">
                <button id="<?php echo $girl['more-id']; ?>" class="girls__box-link">więcej...</button>
                </div>
                <div class="girls__box-bottom">
                    <h3 class="girls__box-title"> <?php echo $girl['name']; ?></h3>
                    <div id="<?php echo $girl['more-id']; ?>" class="girls__box-texts">
                    <h3 class="girls__box-subtitle">o mnie:</h3>
                    <p  class="girls__box-text"> <?php echo $girl['about']; ?></p>
                    </div>
                    <a href="<?php echo esc_url( $girl['mobile'] ); ?>" class="girls__box-mobile">umów wizytę</a>
                </div>
            </div>
            <?php endforeach; ?>


            
        </div>
    
</section>