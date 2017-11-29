<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.
include 'get_root_url.php';
$title = "Living in the Twentieth Century"
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
                                <p>The twentieth century saw the most rapid and dramatic social and economic change of any century. Higher incomes and ever cheaper manufactured goods from overseas producers, often in the Far East, resulted in higher standards of living and a greatly expanded consumer society. At the same time rapid technical advance continually increased the range of luxury goods on the market, from vacuum cleaner and fridges to televisions, stereos and computers.</p>
                                <p>In the employment marked the general change has been a gradual move away from employment in manufacturing towards occupation in service sectors and the increasing importance of professional, managerial and technical roles.</p>
                            </div>
                    </div>
                    </article>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <article>
                            <div class="entry-header">
                                <h2>Transport</h2>
                            </div>
                            <div class="entry-content">
                                <p>At the heart of twentieth century change was the car. In 1900, Herbert Austin began making cars at Longbridge, Birmingham and the famous Austin Seven appeared in 1922. William Morris with his Morris Minor reduced the price of a motor vehicle so that it was within the reach of a skilled artisan or better paid clerk. Meanwhile at the other end of the scale the Rolls company, formed in 1902, was soon producing high quality limousines.</p>
                                <p>Early motorist of the late Victorian and Edwardian era were often viewed with serious misgivings or even loathing. The machines were noisy and highly intrusive and many early drivers came from the aristocracy. The arrogant behaviour of some let a group of MPs to press the government to rush through a Motor Car Bill in 1903 which declared it an offence to drive a car on the public highway 'recklessly or negligently', required all vehicles to be registered with a County or Borough council, to display a number plate and all driver to hold an annually renewable driving licence.</p>
                                <p>A general speed limit of twenty miles an hour was also put in place. Over the remainder of the twentieth century the number of motor vehicles in Britain, both public transport, good transport and private cars, has continued to increase dramatically. Between 1919 and 1938 the total number rose from 330,518 to 3,084, 896 and became an integral part of the economic structure of the country. By 1997 that figure had reached 26,974,000. The first motorway, the M1, running from London to a point near Rugby, opened in November 1959.</p>
                                <p>The most notable occurrence for rail this century was the Beeching Plan of the 1960s which closed some 27,000 km of the national rail network.</p>
                                <p>Commercial air transport in Britain began in 1919, sixteen years after the Wright brothers carried out the world’s first powered flight. In this year George Holt Thomas launched Aircraft Transport and Travel (AT&T) with the first regular passenger service between London and Paris. The costs, however, were so high and the potential customer base so small it quickly folded. Nevertheless, numerous small airlines evolved, operating both over short domestic routes and internationally.</p>
                                <p>In 1925, for example, 11,193 passengers travelled by air either to another part of Britain or abroad and in 1933 alone, eight new internal airlines were registered. Dramatic expansion followed. Between 1958 and 1959, 4,249,000 people took domestic or international flights; 470,000 travelling with BOAC; 2,829,000 with BEA and the remainder with independent airlines. In 1974, BEA lost its separate identity in the merger with BOAC and British Airways was born. In the latter half of the twentieth century, cheaper air travel opened the world to people from all socio-economic backgrounds and the population generally took more holidays than ever before.</p>
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
                                <p>It took four years to achieve, but decimal coinage became the official currency of the UK on 15 February 1971 with the issue of the 1/2p, 1p and 2p pieces.</p>
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
                                    <li><a href="./14th-century.php">Living in the 14th Century</a></li>
                                    <li><a href="./15th-century.php">Living in the 15th Century</a></li>
                                    <li><a href="./16th-century.php">Living in the 16th Century</a></li>
                                    <li><a href="./17th-century.php">Living in the 17th Century</a></li>
                                    <li><a href="./18th-century.php">Living in the 18th Century</a></li>
                                    <li><a href="./19th-century.php">Living in the 19th Century</a></li>
                                    <li><strong>Living in the 20th Century</strong></li>
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
