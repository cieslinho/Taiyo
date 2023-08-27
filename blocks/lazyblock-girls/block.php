<section id="girls" class="girls">   

    <div class="container">
        <h2 class="section-title">
            Masażystki
        </h2>
        </div>
        <div class="girls__boxes">
        <?php foreach( $attributes['girl-box'] as $girl): ?>
            <div id="<?php echo $girl['box-id']; ?>" class="girls__box">
                <img src="<?php echo esc_url( $girl['image-mobile']['url'] ); ?>"
                alt="<?php echo esc_attr( $girl['image-mobile']['alt'] ); ?>" class="girls__box-img">
                <img src="<?php echo esc_url( $girl['image-desktop']['url'] ); ?>"
                alt="<?php echo esc_attr( $girl['image-desktop']['alt'] ); ?>" class="girls__box-img girls__box-desktopimg">
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
                    <a href="<?php echo esc_url( $girl['desktop'] ); ?>" class="girls__box-mobile girls__box-desktop">umów wizytę</a>
                </div>
            </div>
            <?php endforeach; ?>


            
        </div>
        <div class="girls__overlay"></div>
        <?php foreach( $attributes['modal-box'] as $modal): ?>
        <div id="<?php echo $modal['modal-id']; ?>" class="girls__modal">
            <div class="girls__modal-content">
                <p class="girls__modal-title"><?php echo $modal['modal-name']; ?></p>
                <p class="girls__modal-text"><?php echo $modal['modal-description']; ?></p>    
            </div>
            <button class="girls__close">
                    <i class='bx bx-x'></i>
            </button>
        </div>
        <?php endforeach; ?>
        
    
</section>
