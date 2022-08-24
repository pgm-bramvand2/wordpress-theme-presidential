<div class="position-relative">
    <form 
        action="<?php echo esc_url(site_url('/')); ?>" method="get"
        class="form-inline"
    >
            <input
                autocomplete="off"
                name="s"
                type="search"
                class="form-control mr-sm-2" 
                placeholder="Search"
                aria-label="Search"
                id="autocomplete-search">
    </form>
    
    <ul id="autocomplete-results" class="z-20 position-absolute top-100 bg-white list-unstyled h-auto w-100 mt-2 rounded overflow-hidden"></ul>
</div>