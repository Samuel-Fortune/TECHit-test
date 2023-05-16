<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TECHiT-test
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-wrapper">
				<div class="footer-wrap">
					<div class="first">
						<h3>I - net World</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
									'menu_id'        => 'footer-menu',
									'container' => 'div',
									'container_class' => 'footer-buttom-list',
									'container_id' => 'footer-buttom-list-menu',
									'items_wrap' => '<ul class="list-menu">%3$s</ul>',
								)
							);
						?>
					</div>
					<div class="second">
						<?php if( !empty( get_theme_mod('number_header') ) ):?>
							<h3><?php echo get_theme_mod ('number_header')?></h3>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('phone_number') ) ):?>
							<p><?php echo get_theme_mod ('phone_number')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('phone_number_2') ) ):?>
							<p><?php echo get_theme_mod ('phone_number_2')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('phone_number_3') ) ):?>
							<p><?php echo get_theme_mod ('phone_number_3')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('phone_number_4') ) ):?>
							<p><?php echo get_theme_mod ('phone_number_4')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('phone_number_5') ) ):?>
							<p><?php echo get_theme_mod ('phone_number_5')?></p>
						<?php endif;?>
					</div>
					<div class="third">
						<?php if( !empty( get_theme_mod('our_plans') ) ):?>
							<h3><?php echo get_theme_mod ('our_plans')?></h3>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('our_plan_1') ) ):?>
							<p><?php echo get_theme_mod ('our_plan_1')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('our_plan_2') ) ):?>
							<p><?php echo get_theme_mod ('our_plan_2')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('our_plan_3') ) ):?>
							<p><?php echo get_theme_mod ('our_plan_3')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('our_plan_4') ) ):?>
							<p><?php echo get_theme_mod ('our_plan_4')?></p>
						<?php endif;?>
					</div>
					<div class="forth">
						<?php if( !empty( get_theme_mod('address_header') ) ):?>
							<h3><?php echo get_theme_mod ('address_header')?></h3>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('address') ) ):?>
							<p><?php echo get_theme_mod ('address')?></p>
						<?php endif;?>
						<?php if( !empty( get_theme_mod('address_2') ) ):?>
							<p><?php echo get_theme_mod ('address_2')?></p>
						<?php endif;?>
					</div>
					<div class="fifth">
						<?php if( !empty( get_theme_mod('show_social_links_in_footer') ) ):?>
							<?php if( !empty( get_theme_mod( 'twitter_social_link' ) ) 
								|| !empty( get_theme_mod('facebook_social_link') ) 
								|| !empty( get_theme_mod( 'linkedin_social_link' ) )
								|| !empty( get_theme_mod( 'youtube_social_link' ) ) 
								|| !empty( get_theme_mod( 'instagram_social_link' ) )  ): ?>
								<h3>Social Media</h3>
							<?php endif;?>
							<div class="social">
								<?php if( !empty( get_theme_mod('facebook_social_link') ) ):?>
									<a href="<?=  get_theme_mod('facebook_social_link') ;?>" target="blank" title="TECHiT on Facebook" tabindex="0" aria-label="Click to visit TECHiiT on Facebook">
										<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.501 8.05C16.501 3.604 12.919 0 8.50102 0C4.08102 0.001 0.499023 3.604 0.499023 8.051C0.499023 12.068 3.42502 15.398 7.24902 16.002V10.377H5.21902V8.051H7.25102V6.276C7.25102 4.259 8.44602 3.145 10.273 3.145C11.149 3.145 12.064 3.302 12.064 3.302V5.282H11.055C10.062 5.282 9.75202 5.903 9.75202 6.54V8.05H11.97L11.616 10.376H9.75102V16.001C13.575 15.397 16.501 12.067 16.501 8.05Z" fill="white"/>
										</svg>
	
									</a>
								<?php endif;?>
								<!-- -->
								<?php if( !empty( get_theme_mod('twitter_social_link') ) ):?>
									<a href="<?=  get_theme_mod('twitter_social_link') ;?>" target="blank" title="TECHiT on Twitter" tabindex="0" aria-label="Click to visit TECHiiT on Twitter">
										<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.50098 0.000976562C4.08312 0.000976562 0.500977 3.58312 0.500977 8.00098C0.500977 12.4188 4.08312 16.001 8.50098 16.001C12.9188 16.001 16.501 12.4188 16.501 8.00098C16.501 3.58312 12.9188 0.000976562 8.50098 0.000976562ZM12.3456 6.03133C12.351 6.11526 12.351 6.20276 12.351 6.28848C12.351 8.90991 10.3545 11.9295 6.70633 11.9295C5.58133 11.9295 4.53848 11.6028 3.65991 11.0403C3.82062 11.0581 3.97419 11.0653 4.13848 11.0653C5.06705 11.0653 5.92062 10.751 6.60098 10.2188C5.72955 10.201 4.99741 9.62955 4.74741 8.84383C5.05276 8.88848 5.32776 8.88848 5.64205 8.80812C5.19335 8.71696 4.79004 8.47327 4.50065 8.11845C4.21126 7.76363 4.05363 7.31956 4.05455 6.86169V6.83669C4.31705 6.98491 4.62598 7.07598 4.94919 7.08848C4.67748 6.9074 4.45465 6.66207 4.30046 6.37424C4.14627 6.08642 4.06548 5.765 4.06526 5.43848C4.06526 5.06883 4.16169 4.73133 4.33491 4.43848C4.83295 5.05158 5.45442 5.55302 6.15895 5.9102C6.86347 6.26739 7.63528 6.47232 8.42419 6.51169C8.14383 5.16348 9.15098 4.07241 10.3617 4.07241C10.9331 4.07241 11.4474 4.31169 11.8099 4.69741C12.2581 4.61348 12.6867 4.44562 13.0688 4.22062C12.9206 4.67955 12.6099 5.06705 12.1974 5.31169C12.5974 5.26883 12.9831 5.15812 13.3403 5.00276C13.0706 5.39919 12.7331 5.75098 12.3456 6.03133Z" fill="white"/>
										</svg>
	
									</a>
								<?php endif;?>
								<!-- -->
								<?php if( !empty( get_theme_mod('linkedin_social_link') ) ):?>
									<a href="<?=  get_theme_mod('linkedin_social_link') ;?>" target="blank" title="TECHiT on Linkedin" tabindex="0" aria-label="Click to visit TECHiiT on Linkedin">
										<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.50098 0.000976562C4.08264 0.000976562 0.500977 3.58264 0.500977 8.00098C0.500977 12.4193 4.08264 16.001 8.50098 16.001C12.9193 16.001 16.501 12.4193 16.501 8.00098C16.501 3.58264 12.9193 0.000976562 8.50098 0.000976562ZM6.54264 11.3168H4.92264V6.10348H6.54264V11.3168ZM5.72264 5.46348C5.21098 5.46348 4.88014 5.10098 4.88014 4.65264C4.88014 4.19514 5.22098 3.84348 5.74348 3.84348C6.26598 3.84348 6.58598 4.19514 6.59598 4.65264C6.59598 5.10098 6.26598 5.46348 5.72264 5.46348ZM12.4593 11.3168H10.8393V8.42764C10.8393 7.75514 10.6043 7.29848 10.0185 7.29848C9.57098 7.29848 9.30514 7.60764 9.18764 7.90514C9.14431 8.01098 9.13348 8.16098 9.13348 8.31014V11.316H7.51264V7.76598C7.51264 7.11514 7.49181 6.57098 7.47014 6.10264H8.87764L8.95181 6.82681H8.98431C9.19764 6.48681 9.72014 5.98514 10.5943 5.98514C11.6601 5.98514 12.4593 6.69931 12.4593 8.23431V11.3168Z" fill="white"/>
										</svg>
	
									</a>
								<?php endif;?>
							</div>
						<?php endif;?>
					</div>
				</div>
			</div>
			<div class="copyright">
				<?php if( !empty( get_theme_mod('copyright') ) ):?>
					<p><?php echo get_theme_mod ('copyright')?></p>
				<?php endif;?>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
