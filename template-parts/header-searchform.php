<!-- Modal -->
<div class="modal fade" id="pemSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-group">
				      <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pem' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'pem' ); ?>" />
				      <span class="input-group-btn">
				        <button class="btn btn-primary" type="submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'pem' ); ?></span>Search</button>
				      </span>
				</div>
			</form>
      </div>
    </div>
  </div>
</div>