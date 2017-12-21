<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.

$title = "Currency Converter: 1270 to 2017 - The National Archives"
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
	array( "Help with your research", "http://nationalarchives.gov.uk/help-with-your-research/" ),
	array( "Currency Converter: 1270 - 2017", "" )
);

generate_breadcrumbs( $pagesArray );
?>

<div class="level-one">
    <div class="container">
        <div class="row" role="banner">
            <div class="col-md-12">
                <article class="banner feature-img feature-img-bg"
                         style="background-image: url(./img/currency-converter-banner.jpg);">
                    <div class="entry-header">
                        <h1>Currency Converter: 1270 - 2017</h1>
                    </div>
                </article>
            </div>

        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <article>
                        <div class="entry-header">
                            <h2>Currency Converter</h2>
                        </div>
                        <div class="row entry-content">
                            <div class="col-md-12">

                                <form action="index.php" method="post" id="currency-form" >
                                    <fieldset>
                                        <legend id="currency-legend">Enter currency to show its purchasing power in 1270</legend>
                                        <div class="form-row">
                                            <label for="currency-year">Year of currency</label>
                                            <select id="currency-year" name="currency-year">
												<?php for ( $i = 1270; $i <= 1900; $i = $i + 10 ) {
													echo "<option value='" . $i . "'>" . $i . "</option>";

												} ?>

												<?php for ( $i = 1905; $i <= 2005; $i = $i + 5 ) {
													echo "<option value='" . $i . "'>" . $i . "</option>";

												} ?>

                                                <option value="2017">2017</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <label for="currency-pounds">Pounds</label>
                                            <input type="number" id="currency-pounds" name="currency-pounds" value="0"
                                                   required>
                                        </div>
                                        <div class="form-row" id="currency-shillings-row">
                                            <label for="currency-shillings">Shillings (s)</label>
                                            <select id="currency-shillings" name="currency-shillings">
												<?php for ( $i = 0; $i <= 19; $i = $i + 1 ) {
													echo "<option value='" . $i . "'>" . $i . "</option>";
												} ?>
                                            </select>
                                        </div>

                                        <div class="form-row" id="currency-old-pence-row">
                                            <label for="omtn-old-pence">Pence (d)</label>
                                            <input type="number" name="omtn-old-pence" id="currency-old-pence"
                                                  min="0" max="11" value="0">
                                        </div>

                                        <div class="form-row" id="currency-new-pence-row">
                                            <label for="omtn-new-pence">Pence</label>
                                            <input type="number" name="currency--new-pence" id="currency-new-pence"
                                                   min="0" max="99" value="0">
                                        </div>

                                        <div class="form-row">
                                            <p id="currency-validation" class="currency"></p>
                                            <p class="fieldset-disclaimer">The results of the calculations are intended to be a general guide to historical values, rather than a categorical statement of fact.</p>
                                            <input type="submit" name="convert-currency" id="currency-submit"
                                                   value="Show purchasing power in 1270" class="button">
                                        </div>


                                    </fieldset>
                                </form>

                                <span id="currency-result"></span>
                                <span id="currency-no-js-message">Sorry, you do not have JavaScript enabled which is required for the currency converter at the moment.</span>
                            </div>
                        </div>

                    </article>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>Disclaimer</h2>
                        </div>
                        <div class="entry-content">
                            <p>The data used to provide the calculations for the currency converter has been collated
                                from original documents and official statistics, and the survey of material used has
                                been as comprehensive as possible. However, the results of the calculations are intended
                                to be a general guide to historic values, rather than a categorical statement of fact.
                                Icons made by Freepik from www.flaticon.com</p>
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
                            <div class="col-md-12">
                                <ul class="full">
                                    <li><strong>Currency Converter</strong></li>
                                    <li><a href="./13th-century.php">Living in the 13th Century</a></li>
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
</div>


<!-- END EDITING CONTENT -->

<?php
include 'inc/footer/footer.php';
?>

</body>
