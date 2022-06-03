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


<section id="box">
<template>
	<article class="polaroid">
	<img src="" alt="" />
<div class="polaroid_txt">
	<h2 class="titel"></h2>
	<h4 class="pris"></h4>
</div>
<i id="heartloop" class="fa fa-heart-o"></i>
	</article>
</template>
</section>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

	<script>
console.log("loader script")
//Her deffineres de forskelllige variabler (der er benyttet let og ikke const, de variablen skal kunne ændres)
//Definerer siden TØJ
let toej;
//Definerer siden kategorierne
let categories;
//Definerer .... toj med alle kategorier
let filterToj ="alle";

//nøgle
const url = "https://albertestaermose.dk/genskabtvintage/wp-json/wp/v2/toj?per_page=100";
const catUrl = "https://albertestaermose.dk/genskabtvintage/wp-json/wp/v2/categories";



// //loader dommen før og henviser så herefter til hentdata funktionen
document.addEventListener("DOMContentLoaded", hentdata);

// //henter rest api
async function hentdata() {
const data = await fetch(url);
const catdata = await fetch(catUrl);
toej = await data.json();
categories = await catdata.json();
console.log(toej);
 opretknapper();
 visToj();
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
// toggleClass("".active-button")
visToj();
}


function visToj() {
console.log(filterToj);
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
