<!-- Search Button Outline Secondary Right -->
<form class="searchform input-group" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <button type="submit" class="input-group-text btn btn-link text-secondary border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
    <input type="text" name="s" class="form-control border border-secondary rounded-pill" placeholder="<?php _e('Search', 'bootscore'); ?>">
</form>
