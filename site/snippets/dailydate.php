<?php
    $current_date = $article->date();
    // Do the damn thing.
    if ( $next_date && $article->date() ) {
        if ( $current_date < $next_date ) {
?>
        <time class="dailydate" datetime="<?php echo $previous_date ?>" pubdate="pubdate">
            <?php echo date( 'l', $current_date ) ?>,
            <?php echo ' ' . date( 'j F Y', $current_date ) ?>
        </time>

<?php
        }
    }

    $next_date = $article->date();
?>