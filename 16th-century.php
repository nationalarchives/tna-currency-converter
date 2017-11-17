<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.
include 'functions.php';
$title = "Sixteenth Century"
?>

<!-- no-js class is needed for Modernizr -->
<html lang="en-gb" class="no-js">
<head>
	<title><?= $title ?></title>
	<?php
	include 'inc/head/head.php';
	?>
</head>
<body>
<?php
include 'inc/body/body.php';
include 'functions/generate-breadcrumbs.php';
include 'functions/currency-math-values.php';
//		Add breadcrumbs here
$pagesArray = array(
	array("Help with your research", "http://nationalarchives.gov.uk/help-with-your-research/"),
	array("Currency Converter: 1270 - 2017", "./index.php"),
	array("Sixteenth Century","")
);

generate_breadcrumbs($pagesArray);
?>

<main id="primary" role="main" class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article>
					<div class="entry-header">
						<h1><?= $title ?></h1>
					</div>
					<div class="row entry-content">
						<div class="col-md-12">
							<img src="./img/sixteenth-century.jpg" />
						</div>
					</div>
				</article>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<article>
					<div class="entry-header">
						<h2>Standard of Living</h2>
					</div>
					<div class="row entry-content">
						<div class="col-md-12">
                            <p>The sixteenth century was a period of population rise and price inflation. The social pressure on those with wealth to display it was considerable. Fortunes were poured into building grand houses and providing lavish hospitality. Expenditure on litigation among the upper classes was also high because the land law regarding the descent of property was going through a period of uncertainty. Landowners were also always in debt. Not because they were suffering from serious financial problems but because their rental income varied and they often need to borrow large sums to fund expensive projects such as house building.</p>
                            <p>Most landowners were, however, more than able to cope with these pressures. Rising food prices and population created a demand for tenancies and this, combined with increases imposed on existing tenants by landlords, made for higher rents. Holdings were also expanded as the sales of ex-monastic lands mostly went to existing rather than new owners. From the second half of the century in particular, the numbers of men who might be classed among the gentry or aristocracy significantly expanded. For the labouring population this was not such a good time. While wages did rise, they did not increase as fast as prices and with an increasing population there was more competition and many were forced to take to the roads in search of work.</p>
                            <p>Meanwhile, after 1550 international trade went though periods of trouble as English merchants found they had to compete with foreign merchants in the handling of English trade. The ultimate outcome was, however, favourable as trade began to expand to new areas. This made a wider range of new goods available to the population and together with general prosperity helped contribute to the development of shops. The great medieval fairs were gradually transformed into agricultural and wholesale markets and metropolitan and provincial shops sold a range of good, not only those made by the urban craftsman on site. James Backhouse of Kirkby Lonsdale in Westmorland died in 1578 leaving the stock of his shop which included Spanish silks, French garters, Norwich lace, Oxford gloves and Turkey purses.</p>
						</div>
					</div>
				</article>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<article>
					<div class="entry-header">
						<h2>Transport</h2>
					</div>
					<div class="row entry-content">
						<div class="col-md-12">
                            <p>Good distribution was obviously essential to such trade. Long distance wagons, were regularly travelling between London and provincial centres such as Norwich, Canterbury and Gloucester by the late sixteenth century, carrying both goods and passengers but speedier transportation was available by horse. The fastest way was by the hiring of successive horses, an ancient privilege of the Crown for the use of royal officials and later the king's mail. In sixteenth century this system of post horses was extended and made available, at a price, to the general public.</p>
						</div>
					</div>
				</article>

			</div>
		</div>

        <div class="row">
            <div class="col-md-12">
                <article>
                    <div class="entry-header">
                        <h2>Currency</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">
                            <p>Changes in currency included the minting of the gold crowns and half-crowns worth 5s. 0d. and 2s. 6d. respectively and the debasement of the coinage by reissues containing less precious metal to raise money to fund war with France and pay the king's debts. A situation that was not remedied until 1561. In 1504 the first silver shilling was produced, testimony to the growing commerce and wealth of the country.</p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
	</div>
</main>

<!-- END EDITING CONTENT -->

<?php
include 'inc/footer/footer.php';
?>

</body>
