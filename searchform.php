<?php
/**
 * Szablon odpowiedzialny za generowanie formularza wyszukiwarki
 */
?>
<form class="navbar-form navbar-right" role="search">
    <div class="form-group">
    <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" 
           data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
