$(function () {
    show_inputs_relevant_to_selected_year();
    change_fieldset_text();

    $("#currency-form").on('submit', function (event) {
        event.preventDefault();

        if (check_validation()) {
            hide_validation_error_div();
            if (window.location.hash == '#currency-result') {
                window.location.hash = ''; // Reset so that browser will auto-scroll down again.
            }
            window.location.hash = '#currency-result';
            currency_output();
        }
        else {
            show_validation_error_div();
        }

    });

    $("#currency-year").on('change', function () {
        change_fieldset_text();
        show_inputs_relevant_to_selected_year();

    });
});

function show_validation_error_div() {
    window.location.hash = 'currency-h2'
    $("#currency-error").show();
}

function hide_validation_error_div() {
    window.location.hash = '';
    $("#currency-error").hide();
}

function show_inputs_relevant_to_selected_year() {
    if (get_currency("#currency-year") > 1970) {
        /* Hide old UK currency inputs & show modern */

        $(".newer-currencies").each(function () {
            $(this).show();
            $(this).find("input").attr('required');
            $(this).find("input").attr('aria-required');

            var label_for_value = $(this).find("input").attr("name");
            $(this).find("label").attr('for', label_for_value);
        });

        $(".older-currencies").each(function () {
            $(this).hide();

            if ($(this).find("input").length > 0) {
                $(this).find("input").removeAttr('required');
                $(this).find("input").removeAttr('aria-required');

            }
            else {
                $(this).find("select").removeAttr('required');
                $(this).find("select").removeAttr('aria-required');
            }

            $(this).find("label").removeAttr('for');
        });
    }
    else if (get_currency("#currency-year") <= 1970) {
        /* Hide modern UK currency inputs & show old */

        $(".newer-currencies").each(function () {
            $(this).hide();
            $(this).find("input").removeAttr('required');
            $(this).find("input").removeAttr('aria-required');
            $(this).find("label").removeAttr('for');
        });

        $(".older-currencies").each(function () {
            $(this).show();
            var label_for_value;

            if ($(this).find("input").length > 0) {
                $(this).find("input").attr('required', true);
                $(this).find("input").attr('aria-required', true);
                label_for_value = $(this).find("input").attr("name");
                $(this).find("label").attr('for', label_for_value);
            }
            else {
                $(this).find("select").attr('required', true);
                $(this).find("select").attr('aria-required', true);
                label_for_value = $(this).find("select").attr("name");
                $(this).find("label").attr('for', label_for_value);
            }

        });
    }
}

function change_fieldset_text() {

    if(isNaN(get_currency("#currency-year"))){
        $('#currency-legend').text("Enter currency to show its purchasing power");
        $('#currency-submit').val("Show purchasing power");
    }
    else {
        $('#currency-legend').text("Enter currency to show its purchasing power in " + get_currency("#currency-year"));
        $('#currency-submit').val("Show purchasing power in " + get_currency("#currency-year"));
    }


}

function build_century_intro_paragraph(intro, century, url) {
    return "<div id='currency-century-intro'>" + "<p>" + intro + "</p>" +
        "<p id='currency-century-intro-read-more'><a href='" + url + "'>Read more about the " + century + " century. </a></p></div>";
}

function currency_output() {
    var user_inputs = get_user_inputs();
    var currency_formula_return_values = currency_formula();

    var century_preview = "";
    var converted_money_string = number_to_pounds_string(currency_formula_return_values.money, true);
    var excerpt = "";
    var url = "";

    if (user_inputs.century != "21st") {

        $.map(wp_child_theme.excerptArray, function (value, index) {

            $.map(value, function (value, index) {
                if (index == user_inputs.century) {
                    excerpt = value;
                }
            });
        });

        $.map(wp_child_theme.urlArray, function (value, index) {
            $.map(value, function (value, index) {
                if (index == user_inputs.century) {
                    url = value;
                }
            });

        });

        century_preview = build_century_intro_paragraph(excerpt, user_inputs.century, url);
    }
    var HTML_img_string = wp_child_theme.templateURL + "/img/";
    var HTML_output =

        "<div class='currency' id='currency-result' aria-live='polite'><h3 class='currency-result-header'>In 2017, this was worth approximately: </h3>" + "<span id='currency-large-text'>" + converted_money_string + "</span>" +

        "<h3 class='currency-result-header'>In " + user_inputs.year + ", you could buy one of the following with " + currency_formula_return_values.bp_string + ": </h3>" +

        build_currency_output_html("Horses", currency_formula_return_values.horses, "", HTML_img_string + "horse.png") +

        build_currency_output_html("Cows", currency_formula_return_values.cows, "", HTML_img_string + "cow.png") +

        build_currency_output_html("Wool", currency_formula_return_values.wool, "stones", HTML_img_string + "ewe.png") +

        build_currency_output_html("Wheat", currency_formula_return_values.wheat, "quarters", HTML_img_string + "wheat.png") +

        build_currency_output_html("Wages", currency_formula_return_values.wage, "days (skilled tradesman)", HTML_img_string + "coinage.png") +

        century_preview +
        "</div>";

    $("#currency-result").html(HTML_output);
    $("#currency-result").fadeIn();
}

function build_currency_output_html(string, value, unit, img) {
    return "<h4>" + " <img src='" + img + "'alt=''/>" + string + ": " + value + " " + unit + "</h4>";
}



function hide_validation_messages(){
    hide_validation_error_div();
    $(".form-error").remove();
    $("input").removeClass("form-warning");
    $("select").removeClass("form-warning");
}

function set_validation_message(message, id) {
    show_validation_error_div();
    $("#currency-"+id).addClass("form-warning");
    $("#currency-"+id).after(function () {
        return "<span class='form-error form-hint' role='alert'>" + message +"</span>";
    });
}

function check_validation() {
    hide_validation_messages();
    var year = get_currency("#currency-year");
    var pounds = get_currency("#currency-pounds");
    var shillings = get_currency("#currency-shillings");
    var old_pence = get_currency("#currency-old-pence");
    var new_pence = get_currency("#currency-new-pence");
    var return_boolean = true;

    if(isNaN(year)){
        // As the aria-label has no "value" attribute, it will be returned as NaN, so we must account for that.
        set_validation_message("Select a year of currency.", "year");
        return_boolean = false;
    }

    //Check if divisible by 10 - year must be 1270, 1280 and not 1271 or 1277 etc.
    if (year <= 1900) {

        if (year % 10 !== 0) {
            set_validation_message("Enter a year ending in 0. For example 1270.", "year");
            return_boolean = false;
        }

    }

    //Check if divisible by 5 - year must be 1975 or 1980 and not 1971 or 1979 etc. (Unless it's 2017)
    else if (year > 1900) {

        if (year % 5 !== 0) {

            if (year !== 2017) {
                set_validation_message("Enter a year ending in 5 or 0. For example 1975 or 1980.", "year");
                return_boolean = false;
            }

        }
    }


    if (year < 1270) {
        set_validation_message("Enter a year above 1270.", "year");
        return_boolean = false;
    }

    if (pounds < 0) {
        set_validation_message("Enter a valid number of pounds.", "pounds");
        return_boolean = false;
    }

    if (year <= 1970) {
        if (shillings < 0 || shillings > 19) {
            set_validation_message("Enter a whole number between 0 and 19 into the shillings field. ","shillings");
            return_boolean = false;
        }

        if (old_pence < 0 || old_pence > 11) {
            set_validation_message("Enter a whole between 0 and 11 into the pence field.", "old-pence");
            return_boolean = false;
        }

        if (pounds === 0 && old_pence === 0 && shillings === 0) {
            set_validation_message("Enter a number above zero into at least one currency field.", "pounds");
            set_validation_message("Enter a number above zero into at least one currency field.", "old-pence");
            set_validation_message("Enter a number above zero into at least one currency field.", "shillings");
            return_boolean = false;
        }

    }

    if (year > 1970) {
        if (new_pence < 0 || new_pence > 99) {
            set_validation_message("Enter a whole number between 0 and 99.", "new-pence");
            return_boolean = false;
        }
        if (pounds === 0 && new_pence === 0) {
            set_validation_message("Enter a number above zero into at least one currency field.", "pounds");
            set_validation_message("Enter a number above zero into at least one currency field.", "new-pence");
            return_boolean = false;
        }

    }

    return return_boolean;
}


function old_money_to_new_formula(user_inputs) {
    var mathResult;

    user_inputs = user_inputs || get_user_inputs();

    if (user_inputs.year <= 1970) {

        mathResult = ((user_inputs.pounds + (user_inputs.shillings / 20) + (user_inputs.old_pence / 240) ) * user_inputs.inflation);

    }
    else if (user_inputs.year > 1970) {

        if (user_inputs.year !== 2017) {
            /*
            If the users input year isn't 2017, we need to add inflation to bring it up to 2005's value.
            Then in the second if statement, we add 2017's 37% inflation to bring the 2005 money value to 2017's value.
             */

            mathResult = (user_inputs.pounds + user_inputs.new_pence) * user_inputs.inflation;
        }
        else {
            mathResult = (user_inputs.pounds + user_inputs.new_pence);
        }

    }

    if (user_inputs.year !== 2017) {
        mathResult = mathResult * conversion_data[2017].inflation;
    }

    return mathResult.toFixed(2);
}

function currency_formula(user_inputs) {
    user_inputs = user_inputs || get_user_inputs();

    var currency_money_to_modern_value = old_money_to_new_formula(user_inputs);

    var buying_power_money_value;

    var bp_string = "";

    if (user_inputs.year < 1975) {
        buying_power_money_value = user_inputs.pounds + (user_inputs.shillings / 20) + (user_inputs.old_pence / 240);

        if (user_inputs.pounds > 0) {
            bp_string = number_to_pounds_string(user_inputs.pounds, false);
        }
        if (user_inputs.shillings > 0) {
            if (user_inputs.pounds > 0) {
                bp_string = bp_string + ", ";
            }

            bp_string = bp_string + user_inputs.shillings + "s<span class='sr-only'>(shillings)</span>";
        }
        if (user_inputs.old_pence > 0) {
            if (user_inputs.pounds > 0 || user_inputs.shillings > 0) {
                bp_string = bp_string + " & ";
            }
            bp_string = bp_string + user_inputs.old_pence + "d<span class='sr-only'>(pence)</span>";
        }
    }
    else {
        buying_power_money_value = user_inputs.pounds + user_inputs.new_pence;

        bp_string = number_to_pounds_string(buying_power_money_value, true);
    }

    return {
        horses: Math.floor(buying_power_money_value / get_price(user_inputs.year, 'horse_price')),
        cows: Math.floor(buying_power_money_value / get_price(user_inputs.year, 'cow_price')),
        wool: Math.floor(buying_power_money_value / get_price(user_inputs.year, 'wool_price')),
        wheat: Math.floor(buying_power_money_value / get_price(user_inputs.year, 'wheat_price')),
        wage: Math.floor(buying_power_money_value / get_price(user_inputs.year, 'wage_price')),
        money: currency_money_to_modern_value,
        bp_string: bp_string
    };

}

function number_to_pounds_string(number, include_pence) {

    var split_number = number.toString().split(".");
    var pounds_string = split_number[0];
    var pence_string = split_number[1] || "";
    var split_number_pounds_length = pounds_string.length;

    var sliced_pounds_string = "";
    var output_string;

    // If the £ value is more than £999, we need to add a comma. E.g. 1000 needs to become £1,000.
    if (split_number_pounds_length > 3) {
        sliced_pounds_string = pounds_string.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    else {
        sliced_pounds_string = pounds_string;
    }

    if (pence_string.length === 1) {
        pence_string = pence_string + "0";
    }
    else if (pence_string.length === 0) {
        pence_string = "00";
    }

    if (include_pence) {
        output_string = "£" + sliced_pounds_string + "." + pence_string;
    }
    else {
        output_string = "£" + sliced_pounds_string;
    }

    return output_string;
}

function get_price(year, price) {
    return conversion_data[year][price];
}

function get_century(year) {
    if (year >= 2000) {
        return "21st";
    }
    else if (year >= 1900) {
        return "20th";
    }
    else if (year >= 1800) {
        return "19th";
    }
    else if (year >= 1700) {
        return "18th";
    }
    else if (year >= 1600) {
        return "17th";
    }
    else if (year >= 1500) {
        return "16th";
    }
    else if (year >= 1400) {
        return "15th";
    }
    else if (year >= 1300) {
        return "14th";
    }
    else if (year >= 1200) {
        return "13th";
    }
}


function get_currency(html_id) {

    if (html_id === "#currency-new-pence") {
        return parseInt($(html_id).val(), 10) / 100;
    }
    else {
        return parseInt($(html_id).val(), 10);
    }

}

function get_user_inputs() {

    // Returns users input, PLUS the inflation value based on the year they input.

    return {
        year: get_currency("#currency-year"),
        pounds: get_currency("#currency-pounds"),
        shillings: get_currency("#currency-shillings"),
        old_pence: get_currency("#currency-old-pence"),
        new_pence: get_currency("#currency-new-pence"),
        inflation: get_price(get_currency("#currency-year"), 'inflation'),
        century: get_century(get_currency("#currency-year"))
    };
}
