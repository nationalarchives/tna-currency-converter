<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.
include 'get_root_url.php';
$title = "Living in the Fourteenth Century"
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
	array($title,"")
);

generate_breadcrumbs($pagesArray);
?>
<main id="primary" role="main" class="content-area">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h1><?= $title ?></h1>
                        </div>
                        <div class="entry-content">
                            <p>Between 1315 and 1322, the Great Famine, brought about by unusually prolonged periods of heavy rainfall and cold spells, killed 10-15% of the population. The social fabric was strained from horrific reports: from rumours of men and women eating dogs and horses in Northumbria to cases of cannibalism. Many people were forced to sell land and anything they could to try to raise money to buy ever more expensive food and livestock levels fell as they were slaughtered for meat. Rents and incomes, however, had recovered by the 1330s and the new prosperity was founded upon the interrelationship between the countryside, manorial households and the newly expanding market towns.</p>
                            <p>Wider trading networks were also established. Italian merchants in England were deeply involved in the wool trade, dealing in over half of the wool exported and bringing in bullion, Mediterranean goods and exotica. Portuguese ships offloaded cargoes of figs, raisins, dyes, leather and honey and left laden with broadcoths, hangings, tin, lead and Welsh cloth. The ability to move food and livestock around the country with relative speed facilitated the commercialization of medieval England but it was not always easy when encumbered. A drover’s diary of 1323 describes the progress of John the Baker, a valet of the royal household from Holland in Lincolnshire to Tadcaster in Yorkshire with 19 cows, a bull, 313 ewes, 192 young sheep, 272 lambs and a ram, assisted by eight boys and a shepherd.</p>
                            <p>On 13 May they set off, picking up more help and animals as they went. The trip took twelve days and involved passage of the Trent on a ferry at Littleborough. In the later fourteenth century diets became more diversified. In London, in 1378 a tariff was established for the foods habitually prepared by its cooks, including roasts and pasties of fish, fowl and game. The patrons for these fast foods were not only travellers and single people but also the urban poor who could not afford to maintain a kitchen and even middle sized houses often did not have their own ovens and relied on the services of bakers for their pies and flans. Spices such as pepper, cloves, cinnamon, ginger and saffron were desired for preservation and flavouring but could not be afforded by all. Peasants ate more vegetables than their lords and richer neighbours and taverns proliferated, providing the thick nutritious ale which formed a growing part of the nutrition of rich and poor alike.</p>
                            <p>In 1348, however, a new import came to England. The Black Death reached the shores of England at Melcombe Regis (now Weymouth) in Dorset in June, perhaps carried by a ship which had crossed from Gascony to Bristol. Those infected usually died just days after the appearance of buboes under their armpits and in their groins. By 1349 it had killed around a third of the population. This left much land unworked and with insufficient manpower to continue with labour intensive arable farming, new solutions had to be found. Some landlords cut costs by investing more in horse power, many moved over to pasturing sheep or cattle.</p>
                            <p>By the later fourteenth century consumption of meat, particularly by urban populations had significantly increased. With land prices low and wages high, many who survived the plague experienced a higher standard of living. Ale consumption, for example, had increased, probably to around three pints per person per day by the late fourteenth century. Many deserted the countryside in favour of wage earning in the towns and traditional landlord tenant relationships and communal methods of working the land had to be redefined.</p>
                        </div>
                </div>
                </article>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>Currency</h2>
                        </div>
                        <div class="entry-content">
                            <p>Silver pennies remained the primary currency and the silver groat was issued in significant numbers from 1351 with a value of 4d. It was copied in Scotland from 1357. By the 1320s exports of English wool were declining both in quantity and price and in the late 1330s most of the wool trade’s earnings were spent abroad by Edward III without reaching England at all. Imports drained the economy of silver until the private export of wool was again permitted and in 1344, the gold noble was introduced with a value of 6s. 8d. In the same year, Edward III reduced the weight of silver in the penny from 22 grains to 20.3.</p>
                            <p>In 1346 it was devalued further to 20 grains and by 1351 had been reduced to 18 grains. The inflationary effect of devaluation was encouraged by the swift revival of wool exports after the Black Death and renewed inflow of silver.</p>
                        </div>
                </div>
                </article>
            </div>

        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>Navigation</h2>
                        </div>
                        <div class="row entry-content">
                            <ul class="full">
                                <li><a href="./index.php">Currency Converter</a></li>
                                <li><a href="./13th-century.php">Living in the 13th Century</a></li>
                                <li><strong>Living in the 14th Century</strong></li>
                                <li><a href="./15th-century.php">Living in the 15th Century</a></li>
                                <li><a href="./16th-century.php">Living in the 16th Century</a></li>
                                <li><a href="./17th-century.php">Living in the 17th Century</a></li>
                                <li><a href="./18th-century.php">Living in the 18th Century</a></li>
                                <li><a href="./19th-century.php">Living in the 19th Century</a></li>
                                <li><a href="./20th-century.php">Living in the 20th Century</a></li>
                            </ul>
                        </div>
                </div>
                </article>
            </div>


        </div>



    </div>
</div>
</main>

<!-- END EDITING CONTENT -->

<?php
include 'inc/footer/footer.php';
?>

</body>
