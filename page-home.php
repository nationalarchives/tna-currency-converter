
<?php
/*
 * Template Name: Currency Converter
 *
 */
get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div id="primary" class="content-area level-one">
    <div class="container">
        <div class="row" role="banner">
            <div class="col-md-12">
                <?php
                global $post;
                $image      = make_path_relative_no_pre_path( get_feature_image_url( $post->ID, 'full-page-width', true ) );
                $title      = get_the_title();
                get_page_banner( 'level one', $title, $image, '', '', '' );
                ?>
            </div>
        </div>

            <div class="row">
                <main role="main">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <div class="entry-header">
                                <h2 id="currency-h2"><?php echo get_post_meta( get_the_ID(), 'currency_application_h2', true ) ?></h2>
                            </div>
                            <div class="row entry-content">
                                <div class="col-md-12">

	                                <?php
	                                while ( have_posts() ) : the_post();
		                                the_content();
	                                endwhile;
	                                ?>

                                    <div id="currency-error" class="emphasis-block error-message" role="alert"><p class="h3">Sorry, there was a problem</p><p>Please check the highlighted fields to proceed.</p></div>
                                    <form action="index.php" method="post" id="currency-form" role="application">
                                        <fieldset>
                                            <legend id="currency-legend">Enter currency to show its purchasing power
                                            </legend>
                                            <div class="form-row">
                                                <label for="currency-year">Year of currency</label>
                                                <select id="currency-year" name="currency-year">
                                                    <?php
                                                    echo '<option value="" aria-label="Please select a year.">Please select a year</option>';
                                                    for ($i = 1270; $i <= 1900; $i = $i + 10) {
                                                        echo "<option value='" . $i . "'>" . $i . "</option>";
                                                    } ?>
                                                    <?php
                                                    for ($i = 1905; $i <= 2005; $i = $i + 5) {
                                                        echo "<option value='" . $i . "'>" . $i . "</option>";
                                                    } ?>
                                                    <option value="2017">2017</option>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <label for="currency-pounds">Pounds</label>
                                                <input type="number" id="currency-pounds" name="currency-pounds"
                                                       value="0" placeholder="0"
                                                       required>
                                            </div>
                                            <div class="form-row older-currencies" id="currency-shillings-row">
                                                <label for="currency-shillings">Shillings (s)</label>
                                                <select id="currency-shillings" name="currency-shillings">
                                                    <?php
                                                    for ($i = 0; $i <= 19; $i = $i + 1) {
                                                        echo "<option value='" . $i . "'>" . $i . "</option>";
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-row older-currencies" id="currency-old-pence-row">
                                                <label for="currency-old-pence">Pence (d)</label>
                                                <select id="currency-old-pence">
                                                    <?php
                                                    for( $i = 0; $i < 12; $i++){
	                                                    echo "<option value='" . $i . "'>" . $i . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-row newer-currencies" id="currency-new-pence-row">
                                                <label for="currency-new-pence" >Today’s pence (p)</label>
                                                <input type="number" name="currency-new-pence" id="currency-new-pence"
                                                       min="0" max="99" value="0" placeholder="0">
                                            </div>
                                            <div class="form-row">
                                                <p id="currency-validation" class="currency"></p>
                                                <p class="fieldset-disclaimer">The result of the calculation is intended to be a general guide to historical values, rather than a categorical statement of fact. </p>
                                                <input type="submit" name="convert-currency" id="currency-submit"
                                                       value="Show purchasing power" class="button">
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
	                            <?php echo get_post_meta( get_the_ID(), 'currency_application_disclaimer', true ) ?>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </main>
	            <?php include 'sidebar.php' ?>

    </div>


    </div>
</div>

<?php get_footer(); ?>
