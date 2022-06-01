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
        <?php onepress_breadcrumb(); ?>
		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					 <button class="accordion">Betaling</button>
<div class="panel">
	<br>
  <p>

    Varens pris er den, der er sat på www.genskabtvintage.dk på det tidspkt. ordren indgås. Genskabt Vintage tager forbehold for fejltastninger og udsolgte produkter. Evt. forsendelses pris vil blive vist på ordren sammen med det fulde beløb for ordren, ligesom det vil blive vist på din ordrebekræftelse. <br>

    Alle priser er anvendelige, indtil de ændres. Alle priser på vintage varer er uden moms -eksklusiv forsendelsespris. Da varerne beskattes som brugte varer, kan køber ikke trække moms fra.
<br><br>
    Vi accepterer Dankort, Visa Dankort, Visa, Visa Electron, VPay, MasterCard, Maestro og Pay Pal.
    Eller Mobilepay ved personlig afhentning i showroom.
<br><br>
    Genskabt Vintage vil trække beløbet fra din kontor, når varen er klar til afsendelse. Når transaktionen er gennemført vil det kunne ses på din konto. Betaler du med kort vil dine informationer blive sendt SSL krypteret med direkte til Genskabt Vintage´s betalings provider.. Genskabt Vintage har ingen adgang til dine betalings detaljer.
<br><br>
Bemærk: Alle varer sælges som fortjenstmargenordning - brugte genstande - køber har derfor ikke fradrag for momsen.
- varen sælges efter de særlige regler for brugte varer, og køber ikke kan fradrage den moms for købet. (Se SKAT: momsbekendtgørelsens § 116, stk. 3.)
</p>
</div>

<button class="accordion">Returnering og ombytning</button>
<div class="panel">
<br>
	<h4>Varer der ikke refunderes:</h4>
<p>
    Gavekort, personlig pleje og undertøj/ strømper
<br>
    For at kunne give dig penge retur kræves fremvisning af gyldig kvittering eller anden bevis på køb.
<br>
br
    Venligst undlad at sende dit køb retur til oprindelig producent.
</p>
<br>
<h4>Penge retur:</h4>
<p>Så snart din returnerede vare er modtaget her og efterset, vil vi sende dig en email for at fortælle dig vi har modtaget den. Herudover vil vi give dig besked om vi accepterer eller afviser din tilbagebetaling. Hvis vi godkender, vil dine penge retur blive overført til dit kort eller via anden oprindelig betalingsmetode du har brugt inden for et bestemt tidsrum.</p>
<br>
<h4>Returnering:</h4>
<p>
Gælder kun køb online!!
    Vores returneringsfrist er 14 dage. Hvis der siden varens modtagelse er gået mere end 14 dage, uden vi har hørt fra dig, kan vi desværre ikke refundere eller bytte varen.
    For at kunne returneres skal varen være ubrugt og i samme stand, som da du modtog den. Den skal også være i original indpakning.
	<br><br>
    For at returnere din vare skal du sende den til :
    Genskabt Vintage v /Rikke Nørregaard, Søvang 26, 4000 Roskilde, DK.
    Betaling for forsendelse af returnerede varer påhviler dig som køber. Forsendelsesomkostninger kan ikke tilbagebetales. Hvis du modtager penge retur, vil omkostninger for retur-forsendelse blive modregnet dine penge retur.
    Tiden det tager før du modtager din byttede vare, vil afhænge af hvor du bor.
    Hvis du sender en vare af en værdi over 450,- DKK, bør du vælge at bruge en sporbar kurertjeneste, eller tilvælge post-forsikring. Vi garanterer ikke for, at vi modtager din returnerede vare.
</p>
</div>

<button class="accordion">Reklamation</button>
<div class="panel">
	<br>
  <p>Vi bytter kun varer, der er ødelagt eller defekte. Igen må du påregne at de varer der købes her er brugte ting, der derfor ikke kan være helt som ny- det ligger i hele forretningens idé. Men jeg forsøger at beskrive varen så præcist som muligt i webshoppen.</p>

</div> 

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggler mellem aat tilføje og fjerne "active" klassen */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
} 
	</script>

<?php get_footer(); ?>
