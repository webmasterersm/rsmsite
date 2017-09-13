<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <div class="row">
        <div class="input-field col s6">
            <input type="sarch" placeholder="Buscar..." id="first_name" class="validate" value="<?php echo get_search_query(); ?>" name="s" title="search">
            <label for="first_name">First Name</label>
        </div>
    </div>
</form>