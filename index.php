<!DOCTYPE HTML>

<?php
//Used for browser title and for META tags.
include 'get_root_url.php';
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
    array("Help with your research", "http://nationalarchives.gov.uk/help-with-your-research/"),
    array("Currency Converter: 1270 - 2017", "")
);

generate_breadcrumbs($pagesArray);
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>A</h2>
                        </div>
                        <div class="row entry-content">
                            <p>A</p>
                        </div>
                 </div>
                    </article>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <article>
                        <div class="entry-header">
                            <h2>B</h2>
                        </div>
                        <div class="row entry-content">
                            <p>B</p>
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
                            <h2>C</h2>
                        </div>
                        <div class="row entry-content">
                            <p>C</p>
                        </div>
                </div>
                </article>
            </div>


        </div>



</div>

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

<main id="primary" role="main" class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry-header">
                        <h2>Convert old money to new</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">


                            <form action="index.php" method="post" id="omtn-form">
                                <fieldset>
                                    <legend>Enter currency to be converted to 2017 values</legend>
                                    <div class="form-row">
                                        <label for="omtn-year">Year of currency</label>
                                        <select id="omtn-year" name="omtn-year">
										    <?php for($i = 1270; $i <= 1900; $i = $i+10){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>

										    <?php for($i = 1905; $i <= 2005; $i = $i+5){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <label for="omtn-pounds">Pounds</label>
                                        <input type="number" id="omtn-pounds" name="omtn-pounds" value="0" required>
                                    </div>
                                    <div class="form-row" id="omtn-shillings-row">
                                        <label for="omtn-shillings">Shillings (s)</label>
                                        <select id="omtn-shillings" name="omtn-shillings">
										    <?php for($i = 0; $i <= 19; $i = $i+1){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>
                                        </select>
                                    </div>

                                    <div class="form-row" id="omtn-old-pence-row">
                                        <label for="omtn-old-pence">Pence (d)</label>
                                        <input type="number" name="omtn-old-pence" id="omtn-old-pence" step="0.01" min="0" max="11.99" value="0" >
                                    </div>

                                    <div class="form-row" id="omtn-new-pence-row">
                                        <label for="omtn-new-pence">Pence</label>
                                        <input type="number" name="omtn-new-pence" id="omtn-new-pence" min="0" max="99" value="0">
                                    </div>

                                    <div class="form-row">
                                        <input type="submit" name="convert-currency" id="omtn-submit" value="Convert to 2017 currency" class="button">
                                    </div>


                                </fieldset>
                            </form>

                            <div id="omtn-result" class="omtn"></div>

                        </div>
                    </div>
                </article>

            </div>
            <div class="col-md-3">
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

        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry-header">
                        <h2>Buying power</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">

                            <form action="index.php" method="post" id="bp-form">
                                <fieldset>
                                    <legend>Enter currency to show its purchasing power in 2017</legend>
                                    <div class="form-row">
                                        <label for="bp-year">Year of currency</label>
                                        <select id="bp-year" name="bp-year">
										    <?php for($i = 1270; $i <= 1900; $i = $i+10){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>

										    <?php for($i = 1905; $i <= 2005; $i = $i+5){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>

                                            <option value="2017">2017</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <label for="bp-pounds">Pounds</label>
                                        <input type="number" id="bp-pounds" name="bp-pounds" value="0" required>
                                    </div>
                                    <div class="form-row" id="bp-shillings-row">
                                        <label for="bp-shillings">Shillings (s)</label>
                                        <select id="bp-shillings" name="bp-shillings">
										    <?php for($i = 0; $i <= 19; $i = $i+1){
											    echo "<option value='".$i."'>".$i ."</option>";

										    } ?>
                                        </select>
                                    </div>

                                    <div class="form-row" id="bp-old-pence-row">
                                        <label for="omtn-old-pence">Pence (d)</label>
                                        <input type="number" name="omtn-old-pence" id="bp-old-pence" step="0.01" min="0" max="11.99" value="0" >
                                    </div>

                                    <div class="form-row" id="bp-new-pence-row">
                                        <label for="omtn-new-pence">Pence</label>
                                        <input type="number" name="bp-new-pence" id="bp-new-pence" min="0" max="99" value="0">
                                    </div>

                                    <div class="form-row">
                                        <input type="submit" name="convert-currency" id="bp-submit" value="Show currency power in 2017" class="button">
                                    </div>


                                </fieldset>
                            </form>

                            <span id="bp-result"></span>

                        </div>
                    </div>
                </article>

            </div>
            <div class="col-md-3">
                <article>
                    <div class="entry-header">
                        <h2>Disclaimer</h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-md-12">
                           <p>The data used to provide the calculations for the currency converter has been collated from original documents and official statistics, and the survey of material used has been as comprehensive as possible. However, the results of the calculations are intended to be a general guide to historic values, rather than a categorical statement of fact.</p>
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
