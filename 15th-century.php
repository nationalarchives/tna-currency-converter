<!DOCTYPE HTML>
<?php
//Used for browser title and for META tags.
$title = "Living in the Fifteenth Century"
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
    array($title, "")
);
generate_breadcrumbs($pagesArray);
?>
<main id="primary" class="content-area" role="main">
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
                                <p>A hierarchy of consumption patterns mirrored the social hierarchy. The poor bought
                                    locally and in small quantities, while the better-off ventured to small towns and
                                    provincial centres. Magnates bought from cities, even from London. A rising knightly
                                    family such as that of Sir Hugh Luttrell of Dunster, Somerset purchased most of
                                    their goods in 1405-6 in towns around their home. Fish came from Porlock and
                                    Minehead; lime and horseshoes from Watchet; wine from Taunton and spices, wax and
                                    pewter from Bridgwater. In the accounts of 1418-19, the household of Alice de
                                    Bryene, a gentry widow from Suffolk consumed 46 head of cattle, 44 pigs, 57 sheep, a
                                    lot of poultry, 3 pheasants, 13 partridges and 3 herons as well as 102 rabbits, 5
                                    cygnets, cod, haddock and occasionally pike and sturgeon.</p>
                                <p>In aristocratic households the lavish provision of meat, bread and wines added up to
                                    calorific intakes so huge that most of the food must have been for conspicuous
                                    display rather than actual consumption. Remarkable regional variation in diet and
                                    lifestyle can, however, be observed. Rye was the main bread-corn in parts of Norfolk
                                    and Worcestershire, barley in north Suffolk. Game was available in forest areas and
                                    cider and perry were drunk in Hertfordshire. People were eating more fish, which
                                    could come from the new aristocratic fishponds or was still being brought in from
                                    Scandinavia.</p>
                                <p>Above all food was cheap which left more income for other goods. Manufacturing and
                                    service profession proliferated in towns and even small villages. Urban artisans
                                    flourished, protected by guild status. The leather industry was the second largest
                                    after textiles and provided a whole series of goods from buckets and belts to
                                    saddles and bottles, many of which were modestly priced. Aspirational consumption
                                    expanded and there was wider participation in patterns of purchasing and taste. In
                                    the 1430s the export of cloth first exceeded the export of wool and villages became
                                    centres of production. Clothiers employed agents to deliver the wool and collect the
                                    product from rural workers.</p>
                                <p>In the countryside, the availability of land and leases provided opportunities for
                                    expansion in villages and occasioned moves to neighbouring manors. Manumission was a
                                    common feature of the first half of the century, after which few peasants lived as
                                    unfree persons. Rural populations were generally better fed, clothed, housed and
                                    equipped than their ancestors would have been although problems were experienced in
                                    the mid-century recession. The disruption of trade with France and the Low Countries
                                    in the 1440s and 1450s made all imports more expensive and the consumption of
                                    luxuries had to be reassessed but recovery was quick in the latter half of the
                                    century.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="entry-header">
                                <h2>Travel</h2>
                            </div>
                            <div class="entry-content">
                                <p>That travel was both socially and economically more accessible and the population
                                    generally more mobile is demonstrated by the place of hostelling and victualling
                                    among the flourishing urban occupations. York was probably able to provide 1,300
                                    beds for visitors such as pilgrims, traders and royal officials and English inns had
                                    the reputation of being warm and welcoming.</p>
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
                            <div class="entry-content">
                                <p>From 1464, the gold noble which had previously had a value of 6s. 8d. became the
                                    Rose-noble or Ryal and was valued as 10s., although the weight did not change
                                    significantly. At the same time, another gold coin of lesser weight was issued,
                                    known as the Angel and it became the coin worth 6s. 8d. In 1489, Henry VII minted
                                    the first gold piece of 20s. to be called a sovereign.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <nav role="navigation">
                                <div class="entry-header">
                                    <h2>Navigation</h2>
                                </div>
                                <div class="row entry-content">
                                    <ul class="full">
                                        <li><a href="./index.php">Currency Converter</a></li>
                                        <li><a href="./13th-century.php">Living in the 13th Century</a></li>
                                        <li><a href="./14th-century.php">Living in the 14th Century</a></li>
                                        <li><strong>Living in the 15th Century</strong></li>
                                        <li><a href="./16th-century.php">Living in the 16th Century</a></li>
                                        <li><a href="./17th-century.php">Living in the 17th Century</a></li>
                                        <li><a href="./18th-century.php">Living in the 18th Century</a></li>
                                        <li><a href="./19th-century.php">Living in the 19th Century</a></li>
                                        <li><a href="./20th-century.php">Living in the 20th Century</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </article>
                    </div>
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