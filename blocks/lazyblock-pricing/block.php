<section id="pricing" class="pricing">
    <div class="container">
        <h2 class="section-title">Cennik</h2>
    </div>
    <div class="pricing__cards">
    <?php forEach( $attributes['card'] as $card) : ?>
        <div class="pricing__card">
            <img src="<?php echo esc_url( $card['image']['url'] ); ?>"
                alt="<?php echo esc_attr( $card['image']['alt'] ); ?>" class="pricing__card-img">
            <div class="pricing__card-info">
                <div class="pricing__card-top">
                <p class="pricing__card-subtitle"><?php echo $card['subtitle']; ?></p>
                <h2 class="pricing__card-title"><?php echo $card['title']; ?></h2>
                </div>
             
                <div class="pricing__card-bottom">
                    <p class="pricing__card-price"><?php echo $card['price']; ?></p>
                    <span class="pricing__card-span">/</span>
                <p class="pricing__card-time"><?php echo $card['time']; ?></p>
                </div>
            
                
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>