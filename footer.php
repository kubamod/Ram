<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modrzjwzki
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ">
		<div class="site-info">
			<div style="margin-left:auto; margin-right:auto; text-align:center; padding-top:10px;">Copyright &copy Ram Studio usług komputerowych 2018r.</div>
			<div class="socialmedia">
							
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
function jump(h){
    var url = location.href;               //Save down the URL without hash.
    location.href = "#"+h;                 //Go to the target element.
    history.replaceState(null,null,url);   //Don't like hashes. Changing it back.
}

</script>
<?php wp_footer(); ?>

</body>
</html>
