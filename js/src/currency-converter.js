$(function () {
    show_inputs_relevant_to_selected_year();
});

function show_inputs_relevant_to_selected_year() {
    if (get_currency_year() > 1970) {
        /* Hide old UK currency inputs & show modern */

        $(".newer-currencies").each(function () {
            $(this).show();
            $(this).find("input").attr('required', true);

            var label_for_value = $(this).find("input").attr("name");
            $(this).find("label").attr('for',label_for_value);
        });

        $(".older-currencies").each(function () {
            $(this).hide();

            if($(this).find("input").length > 0) {
                $(this).find("input").removeAttr('required');
            }
            else {
                $(this).find("select").removeAttr('required');
            }

            $(this).find("label").removeAttr('for');
        });
    }
    else if (get_currency_year() <= 1970) {
        /* Hide modern UK currency inputs & show old */

        $(".newer-currencies").each(function () {
            $(this).hide();
            $(this).find("input").removeAttr('required');
            $(this).find("label").removeAttr('for');
        });

        $(".older-currencies").each(function () {
            $(this).show();
            var label_for_value;

            if($(this).find("input").length > 0) {
                $(this).find("input").attr('required', true);
                label_for_value = $(this).find("input").attr("name");
                $(this).find("label").attr('for',label_for_value);
            }
            else {
                $(this).find("select").attr('required',true);
                label_for_value = $(this).find("select").attr("name");
                $(this).find("label").attr('for',label_for_value);
            }

        });
    }
}

$("#currency-year").change(function () {
    change_fieldset_text();
    show_inputs_relevant_to_selected_year();

});

function change_fieldset_text() {
    $('#currency-legend').text("Enter currency to show its purchasing power in " + get_currency_year());
    $('#currency-submit').val("Show purchasing power in " + get_currency_year());
}

function build_century_intro_paragraph(intro, century) {
    return "<div id='currency-century-intro'>" + "<p>" + intro + "</p>" +
        "<p id='currency-century-intro-read-more'><a href='./" + century + "-century.php'>Read more about the " + century + " century. </a></p></div>";
}

function currency_output() {
    var user_inputs = get_user_inputs();
    var currency_formula_return_values = currency_formula();

    var century_preview = "";
    var converted_money_string = number_to_pounds_string(currency_formula_return_values.money);

    if (user_inputs.century != "21st") {
        century_preview = build_century_intro_paragraph(conversion_data.century_intros[user_inputs.century], user_inputs.century);
    }

    var HTML_output =

        "<div class='currency' id='currency-result'><h3 class='currency-result-header'>In 2017, this is worth approximately: </h3>" + "<span id='currency-large-text'>" + converted_money_string + "</span>" +

        "<h3 class='currency-result-header'>In " + user_inputs.year + ", you could buy one of the following with " + currency_formula_return_values.bp_string + ": </h3>" +

        build_currency_output_html("Horses", currency_formula_return_values.horses, "", "./img/horse.png") +

        build_currency_output_html("Cows", currency_formula_return_values.cows, "", "./img/cow.png") +

        build_currency_output_html("Wool", currency_formula_return_values.wool, "stones", "./img/ewe.png") +

        build_currency_output_html("Wheat", currency_formula_return_values.wheat, "quarters", "./img/wheat.png") +

        build_currency_output_html("Wages", currency_formula_return_values.wage, "days (skilled tradesman)", "./img/coinage.png") +

        century_preview +
        "</div>";

    $("#currency-result").html(HTML_output);
    $("#currency-result").fadeIn();
}

function build_currency_output_html(string, value, unit, img) {
    return "<h4>" + " <img src='" + img + "'/>" + string + ": " + value + " " + unit + "</h4>";
}

$("#currency-form").submit(function (event) {
    event.preventDefault();

    if (check_validation()) {
        if (window.location.hash == '#currency-result') {
            window.location.hash = ''; // Reset so that browser will auto-scroll down again.
        }
        window.location.hash = '#currency-result';
        currency_output();
    }

});


function set_validation_message(message) {
    $("#currency-validation").text(message);
    $("#currency-validation").show();
}


function check_validation() {

    var year = get_currency_year();
    var pounds = get_currency_pounds();
    var shillings = get_currency_shillings();
    var old_pence = get_currency_old_pence();
    var new_pence = get_currency_new_pence();

    //Check if divisible by 10 - year must be 1270, 1280 and not 1271 or 1277 etc.
    if (year <= 1900) {

        if (year % 10 != 0) {
            set_validation_message("Please enter a year ending in 0. For example 1270.");
            return false;
        }

    }

    //Check if divisible by 5 - year must be 1975 or 1980 and not 1971 or 1979 etc. (Unless it's 2017)
    else if (year > 1900) {

        if (year % 5 != 0) {

            if (year != 2017) {
                set_validation_message("Please enter a year ending in 5 or 0. For example 1975 or 1980.");
                return false;
            }

        }
    }


    if (year < 1270) {
        set_validation_message("Please enter a year above 1270.");
        return false;
    }

    if (pounds < 0) {
        set_validation_message("Please enter a positive whole number into the pounds field.");
        return false;
    }

    if (year <= 1970) {
        if (shillings < 0 || shillings > 19) {
            set_validation_message("Please enter a whole number between 0 and 19 into the shillings field. ");
            return false;
        }

        if (old_pence < 0 || old_pence > 11) {
            set_validation_message("Please enter a whole between 0 and 11 into the pence field.");
            return false;
        }

        if (pounds == 0 && old_pence == 0 && shillings == 0) {
            set_validation_message("Please enter a number above 0 into at least one field.");
            return false;
        }

    }

    if (year > 1970) {
        if (new_pence < 0 || new_pence > 99) {
            set_validation_message("Please enter a whole number between 0 and 99 into the pence field.");
            return false;
        }
        if (pounds == 0 && new_pence == 0) {
            set_validation_message("Please enter a number above 0 into at least one field.");
            return false;
        }

    }

    $("#currency-validation").hide();
    return true;
}


function old_money_to_new_formula(user_inputs) {
    var mathResult;

    user_inputs = user_inputs || get_user_inputs();

    if (user_inputs.year <= 1970) {

        mathResult = ((user_inputs.pounds + (user_inputs.shillings / 20) + (user_inputs.old_pence / 240) ) * user_inputs.inflation);

    }
    else if (user_inputs.year > 1970) {

        if (user_inputs.year != 2017) {
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


    if (user_inputs.year != 2017) {
        mathResult = mathResult * conversion_data[2017].inflation;
    }

    return mathResult;
}

function currency_formula(user_inputs) {
    user_inputs = user_inputs || get_user_inputs();

    var currency_money_to_modern_value = old_money_to_new_formula(user_inputs);

    var buying_power_money_value;


    var bp_string = "";

    if (user_inputs.year < 1975) {
        buying_power_money_value = user_inputs.pounds + (user_inputs.shillings / 20) + (user_inputs.old_pence / 240);

        if (user_inputs.pounds > 0) {
            bp_string = "£" + user_inputs.pounds;
        }
        if (user_inputs.shillings > 0) {
            if (user_inputs.pounds > 0) {
                bp_string = bp_string + ", ";
            }

            bp_string = bp_string + user_inputs.shillings + "s";
        }
        if (user_inputs.old_pence > 0) {
            if (user_inputs.pounds > 0 || user_inputs.shillings > 0) {
                bp_string = bp_string + " & ";
            }
            bp_string = bp_string + user_inputs.old_pence + "d";
        }

        /* Displays the currency in the buying power box, e.g. £10 1s 0d would be 10 pounds, 1 shilling, 0 pence.
        bp_string = "£" + user_inputs.pounds + ", " + user_inputs.shillings + "s & " + user_inputs.old_pence + "d";
        */
    }
    else {
        buying_power_money_value = user_inputs.pounds + user_inputs.new_pence;

        bp_string = number_to_pounds_string(buying_power_money_value);
    }

    return {
        horses: Math.floor(buying_power_money_value / get_horse_price(user_inputs.year)),
        cows: Math.floor(buying_power_money_value / get_cow_price(user_inputs.year)),
        wool: Math.floor(buying_power_money_value / get_wool_price(user_inputs.year)),
        wheat: Math.floor(buying_power_money_value / get_wheat_price(user_inputs.year)),
        wage: Math.floor(buying_power_money_value / get_wage_price(user_inputs.year)),
        money: currency_money_to_modern_value.toFixed(2),
        bp_string: bp_string
    };

}

function number_to_pounds_string(number) {

    var split_number = number.toString().split(".");
    var pounds_string = split_number[0];
    var pence_string = split_number[1] || "";
    var split_number_pounds_length = pounds_string.length;

    var comma = ",";
    var position_for_comma;
    var sliced_pounds_string;
    var output_string;

    // If the £ value is more than £999, we need to add a comma. E.g. 1000 needs to become £1,000.
    if (split_number_pounds_length > 3) {
        switch (split_number_pounds_length) {

            case 4:
                // Numbers 1,000 to 9,999 we insert the comma at index 1
                position_for_comma = 1;
                break;
            case 5:
                // Numbers 10,000 to 99,999 we insert the comma at index 2
                position_for_comma = 2;
                break;
            case 6:
                // Numbers 100,000 to 999,999 we insert the comma at index 3
                position_for_comma = 3;
                break;

            default:
                break;
        }

        sliced_pounds_string = [pounds_string.slice(0, position_for_comma), comma, pounds_string.slice(position_for_comma)].join('');

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

    output_string = "£" + sliced_pounds_string + "." + pence_string;
    return output_string;
}

function get_inflation_rate(year) {
    return conversion_data[year].inflation;
}

function get_horse_price(year) {
    return conversion_data[year].horse_price;
}

function get_cow_price(year) {
    return conversion_data[year].cow_price;
}

function get_wool_price(year) {
    return conversion_data[year].wool_price;
}

function get_wheat_price(year) {
    return conversion_data[year].wheat_price;
}

function get_wage_price(year) {
    return conversion_data[year].wage_price;
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

function get_currency_year() {
    return parseInt($("#currency-year").val(), 10);
}

function get_currency_pounds() {
    return parseInt($("#currency-pounds").val(), 10);
}

function get_currency_shillings() {
    return parseInt($("#currency-shillings").val(), 10);
}

function get_currency_old_pence() {
    return parseInt($("#currency-old-pence").val(), 10);
}

function get_currency_new_pence() {
    return parseInt($("#currency-new-pence").val(), 10) / 100;
}

function get_user_inputs() {

    // Returns users input, PLUS the inflation value based on the year they input.

    return {
        year: get_currency_year(),
        pounds: get_currency_pounds(),
        shillings: get_currency_shillings(),
        old_pence: get_currency_old_pence(),
        new_pence: get_currency_new_pence(),
        inflation: get_inflation_rate(get_currency_year()),
        century: get_century(get_currency_year())
    };
}