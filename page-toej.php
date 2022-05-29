<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		<div id="content-inside" class="container
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					
<nav id="filtrering">
</nav>


<section>
<template>
	<article>
<div class="polaroid">
<div>
<img src="" alt="" />
</div>
<h2 class="titel"></h2>
<h4 class="pris"></h4>
<div class="forsidebutton">
<button></button>
</div>
</div>
	</article>
</template>
</section>
				</main><!-- #main -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

	<script>
console.log("loader script")
let toej;
let categories;
let filterToj;
let filter ="alle";

//nøgle
const url = "https://albertestaermose.dk/genskabtvintage/wp-json/wp/v2/toj";
const catUrl = "https://albertestaermose.dk/genskabtvintage/wp-json/wp/v2/categories";



// //loader dommen før funktionen start kommer
document.addEventListener("DOMContentLoaded", start);

//definere funktionen start, som definere at man klikker på knap
function start() {
	console.log("start")
hentdata();
}

// //henter data fra json io
async function hentdata() {
const data = await fetch(url);
const catdata = await fetch(catUrl);
toej = await data.json();
categories = await catdata.json();
console.log(categories);
visToj();
 opretknapper();
}

// //definere at container er section og at temp er template
const container = document.querySelector("section");
const temp = document.querySelector("template");


function opretknapper(){

	categories.forEach(cat =>{
		document.querySelector("#filtrering").innerHTML += `<button class="filter" data-toj="${cat.id}">${cat.name}</button>`
	})

	addEventListenerToButton();
}

function addEventListenerToButton(){
	document.querySelectorAll("#filtrering button").forEach(elm =>{
		elm.addEventListener("click", filtrering)
	})
}

function filtrering(){
filterToj = this.dataset.toj;
console.log(filterToj)

visToj();
}

function visToj() {
console.log("visToej");
// let container = document.querySelector()
container.innerHTML = "";
toej.forEach((toj) => {
	if (filterToj == "alle" || toj.categories.includes(parseInt(filterToj))){
const klon = temp.cloneNode(true).content;
klon.querySelector("h2").textContent = toj.title.rendered;
klon.querySelector("h4").textContent = toj.pris + " kr.";
klon.querySelector("img").src = toj.billede1.guid;
/*___kald til at åbne i ny side_____*/
klon.querySelector("article").addEventListener("click", () => {
location.href = toj.link;})
/*klon.querySelector("img").src = "medium/" + kategori.md;*/
container.appendChild(klon);
}
});
}
</script>

<?php get_footer(); ?>
