<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OnePress
 */

get_header();
$layout = onepress_get_layout();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>

	<div id="content" class="site-content">

		<?php onepress_breadcrumb(); ?>

		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<section id="box-single">
	<article>

<div class="billeder">
	<img class="billede1"src="" alt="" />
	<img class="billede2"src="" alt="" />
	<img class="billede3"src="" alt="" />
</div>
	
<div class="txt">
	<h2 class="titel"></h2>
	<h4 class="pris-single"></h4>
	<h4 class="storrelse-single"></h4>

<div class="knapConatiner">
	<button class="kobbutton">Læg i kurven</button>
 <i id="heartsingle" class="fa fa-heart-o"></i>
</div>

<p class="info"></p>

<button class="accordionGuide">Størrelsesguide</button>
<div class="panelGuide">
  <p class="guide"></p>
</div>


</div>
	</article>
</section>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!--#content-inside -->
	</div><!-- #content -->

	<script>
		
			let toj;
			document.addEventListener("DOMContentLoaded", getJson);
			const dbUrl = "https://albertestaermose.dk/genskabtvintage/wp-json/wp/v2/toj/"+<?php echo get_the_ID() ?>;
			async function getJson(){
				const data = await fetch(dbUrl);
				toj = await data.json();
				visToj();
				}

	//Vis data om retten
	function visToj() {
		document.querySelector(".billede1").src = toj.billede1.guid;
		document.querySelector(".billede2").src = toj.billede2.guid;
		document.querySelector(".billede3").src = toj.billede3.guid;
		document.querySelector(".titel").textContent = toj.titel.rendered;
		document.querySelector(".pris-single").textContent = toj.pris + " kr";
		document.querySelector(".storrelse-single").textContent = "Str. " + toj.storrelse;
		document.querySelector(".info").innerHTML = toj.info;
		document.querySelector(".guide").innerHTML = toj.guide;
	}



	var acc = document.getElementsByClassName("accordionGuide");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("activeGuide");

    /* Toggle between hiding and showing the active panel */
    var panelGuide = this.nextElementSibling;
    if (panelGuide.style.display === "block") {
      panelGuide.style.display = "none";
    } else {
      panelGuide.style.display = "block";
    }
  });
} 

		</script>

<?php get_footer(); ?>
