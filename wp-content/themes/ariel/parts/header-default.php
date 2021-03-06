<?php
/**
 * Header
 *
 * Logo top left, light (Default)
 *
 * @package ariel
 */
?>
<div class="header-v1" id="header">
	<div class="header-row-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<?php
						/**
						 * Site identity
						 */
						get_template_part( 'parts/site', 'identity' ); ?>
				</div><!-- col-sm-8 -->

				<div class="col-sm-4">
					<div class="pull-right">
						<?php
							/**
							 * Header Widgets
							 */
							get_sidebar( 'header' ); ?>
					</div><!-- pull-right -->
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- header-row-1 -->

	<div class="header-row-2" id="myHeader">
		<div class="container">
			<?php
				/**
				 * Main navigation
				 */
				get_template_part( 'parts/navigation', 'header' ); ?>
		</div><!-- container -->
	</div><!-- header-row-2 -->	
</div><!-- header-v1 -->
<div class="container">
<?php
	if ( function_exists('yoast_breadcrumb') ) {
  		yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}
?>

</div>
<script>

window.onwheel = function() {myFunction(event)};
var header = document.getElementById("myHeader");

function myFunction(event) {
    if (event.deltaY < 0) {
        header.classList.add("sticky");        
    } else {
        header.classList.remove("sticky");        
    }
}



</script>