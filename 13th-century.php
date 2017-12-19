<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.
$title = "Living in the Thirteenth Century"
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
                            <p>Most peasants in the thirteenth century lived below a reasonable subsistence level and this standard declined during the century. Titow (English Rural Society) demonstrated that between ten and thirteen and a half acres were needed to maintain the average family of four and a half persons. The average tenant with half a yardland and fifteen acres of fertile soil must have been on the edge of destitution. Opportunities for casual work on the demesne were few and far between and only allowed a peasant to earn a few shillings here and there. There was, however, a growing number of wage earners such as artisans, tradesmen and hired labourers who created an expanding market for goods and services. Large scale landlords and small scale producers who were able to sell a surplus had an opportunity for profit.</p>
                            <p>The growth of population as well as trade also helped expand and establish larger villages and towns. Long distance trade was still quite limited in the thirteenth century and developed at a different pace throughout the country. However, wool was exported to Flanders and for those who could afford such a luxury, wine was imported from Gascony. From Scandinavia came expensive furs and stone from Caen was imported and used for mouldings and carvings in Westminster Abbey. In the thirteenth and fourteenth centuries the aristocracy bought squirrel skins, which could add £2 to £3 to the cost of a garment and luxurious textiles such as silks and linens, while others wore a larger amount of woollen cloth.</p>

                        </div>
                </div>
                </article>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>Travel</h2>
                        </div>
                        <div class="entry-content">
                            <p>The best ships in the British Isles in this period were built in Ireland and in the first half of the century a number of galleys were built there for John and Henry III. These, however, were war ships, trade was carried out by a variety of ships but probably often by cogs. These were clinker built, with a flat bottom and a single sail. In estuaries and inland waterways many boats built for carrying goods and passengers operated. Large boats called shouts, for example operated up the Thames between Henley and London and on the river Lea. However, despite a great increase in inland trade in this period, water transport did not expand at the same rate.</p>
                            <p>It may have been much cheaper but it was also much more unpredictable. The improvement of many bridges by building in stone, which occurred in the early thirteenth century, suggests road transport was at this stage preferred. Over these roads many people walked or rode and goods were transported by cart, probably small one horse carts.</p>
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
                        <div class=" entry-content">
                            <p>The principal currency of exchange was the silver penny or sterling. The silver groat was produced as an isolated issue in 1279 but did not come into general circulation until the following century (see below). Its value throughout remained 4d. Also produced in the thirteenth century, but not in general circulation, the gold penny was an isolated issue by Henry III in 1257 with a value of 20d. For most of the thirteenth century, wool exports, revenues from Gascony and seignorage dues paid by continental merchants keen to exchange their silver for a more stable currency, continued to increase the silver bullion in England.</p>
                            <p>However, this also increased the circulation of inferior, foreign or clipped coins. Four times in this century the king ordered the reminting of the currency in whole or in part, which helped to stabilise prices. There was also an increase in the amount of currency in circulation from around £125,000 in 1180 to £674,000 in 1278. This far outstripped the increase in population and helped develop and expand the monetized economy. Rents to landlords, for example, were increasingly paid in cash rather than goods or service.</p>
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
                                <li><strong>Living in the 13th Century</strong></li>
                                <li><a href="./14th-century.php">Living in the 14th Century</a></li>
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
