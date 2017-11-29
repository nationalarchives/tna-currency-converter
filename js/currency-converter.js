var conversion_data = {
    "1270": {
        "inflation": 532.72
    },
    "1280": {
        "inflation": 506.62
    },
    "1290": {
        "inflation": 536.83
    },
    "1300": {
        "inflation": 517.54
    },
    "1310": {
        "inflation": 446.49
    },
    "1320": {
        "inflation": 335.83
    },
    "1330": {
        "inflation": 447.68
    },
    "1340": {
        "inflation": 546.73
    },
    "1350": {
        "inflation": 428.64
    },
    "1360": {
        "inflation": 363.44
    },
    "1370": {
        "inflation": 358.01
    },
    "1380": {
        "inflation": 450.48
    },
    "1390": {
        "inflation": 483.3
    },
    "1400": {
        "inflation": 447.28
    },
    "1410": {
        "inflation": 459.93
    },
    "1420": {
        "inflation": 469.35
    },
    "1430": {
        "inflation": 455.77
    },
    "1440": {
        "inflation": 469.35
    },
    "1450": {
        "inflation": 455.77
    },
    "1460": {
        "inflation": 469.35
    },
    "1470": {
        "inflation": 500.58
    },
    "1480": {
        "inflation": 504.59
    },
    "1490": {
        "inflation": 488.93
    },
    "1500": {
        "inflation": 486.1
    },
    "1510": {
        "inflation": 483.77
    },
    "1520": {
        "inflation": 379.58
    },
    "1530": {
        "inflation": 322.1
    },
    "1540": {
        "inflation": 307.56
    },
    "1550": {
        "inflation": 200.51
    },
    "1560": {
        "inflation": 170.3
    },
    "1570": {
        "inflation": 173.89
    },
    "1580": {
        "inflation": 149.31
    },
    "1590": {
        "inflation": 125.29
    },
    "1600": {
        "inflation": 100.64
    },
    "1610": {
        "inflation": 97.88
    },
    "1620": {
        "inflation": 96
    },
    "1630": {
        "inflation": 89.16
    },
    "1640": {
        "inflation": 85.8
    },
    "1650": {
        "inflation": 75.56
    },
    "1660": {
        "inflation": 76.77
    },
    "1670": {
        "inflation": 83.05
    },
    "1680": {
        "inflation": 83.54
    },
    "1690": {
        "inflation": 87.47
    },
    "1700": {
        "inflation": 78.09
    },
    "1710": {
        "inflation": 76.59
    },
    "1720": {
        "inflation": 84.75
    },
    "1730": {
        "inflation": 85.98
    },
    "1740": {
        "inflation": 86.29
    },
    "1750": {
        "inflation": 85.16
    },
    "1760": {
        "inflation": 74.79
    },
    "1770": {
        "inflation": 63.69
    },
    "1780": {
        "inflation": 62.85
    },
    "1790": {
        "inflation": 56.03
    },
    "1800": {
        "inflation": 32.17
    },
    "1810": {
        "inflation": 33.96
    },
    "1820": {
        "inflation": 41.92
    },
    "1830": {
        "inflation": 49.49
    },
    "1840": {
        "inflation": 44.1
    },
    "1850": {
        "inflation": 58.53
    },
    "1860": {
        "inflation": 43.16
    },
    "1870": {
        "inflation": 45.7
    },
    "1880": {
        "inflation": 48.31
    },
    "1890": {
        "inflation": 59.89
    },
    "1900": {
        "inflation": 57.06
    },
    "1905": {
        "inflation": 57.35
    },
    "1910": {
        "inflation": 57.06
    },
    "1915": {
        "inflation": 43.06
    },
    "1920": {
        "inflation": 21.21
    },
    "1925": {
        "inflation": 29.97
    },
    "1930": {
        "inflation": 33.42
    },
    "1935": {
        "inflation": 36.98
    },
    "1940": {
        "inflation": 28.72
    },
    "1945": {
        "inflation": 25.95
    },
    "1950": {
        "inflation": 22.78
    },
    "1955": {
        "inflation": 17.42
    },
    "1960": {
        "inflation": 15.3
    },
    "1965": {
        "inflation": 12.86
    },
    "1970": {
        "inflation": 10.28
    },
    "1975": {
        "inflation": 5.57
    },
    "1980": {
        "inflation": 2.85
    },
    "1985": {
        "inflation": 2.01
    },
    "1990": {
        "inflation": 1.51
    },
    "1995": {
        "inflation": 1.28
    },
    "2000": {
        "inflation": 1.12
    },
    "2005": {
        "inflation": 1
    },
    "2017": {
        "inflation": 1.37,
        "horse_price": 2387.37,
        "cow_price": 1200,
        "wool_price": 6.35,
        "wage_price": 100,
        "wheat_price": 1.88,
        "uk_house_price": 226367
    },
    "century_intros": {
        "13th": "Most peasants in the thirteenth century lived below a reasonable subsistence level and this standard declined during the century.",
        "14th": "Between 1315 and 1322, the Great Famine, brought about by unusually prolonged periods of heavy rainfall and cold spells, killed 10-15% of the population.",
        "15th": "A hierarchy of consumption patterns mirrored the social hierarchy. The poor bought locally and in small quantities, while the better-off ventured to small towns and provincial centres.",
        "16th": "The sixteenth century was a period of population rise and price inflation. The social pressure on those with wealth to display it was considerable.",
        "17th": "In the middle of the seventeenth century, the period of price and population rises ended and the country entered a period of stability in both, that was to last until the mid-eighteenth century.",
        "18th": "One of the immediate and most important effects of the Act of Union in 1707 was the creation of a united free trade area managed from London. ",
        "19th": "The period from the late 18th century to the mid-Victorian years witnessed a major shake up and change in both the economy and society.",
        "20th": "The twentieth century saw the most rapid and dramatic social and economic change of any century."
    }
};

$(function () {
    hide_inputs_by_year();
});

function hide_inputs_by_year() {
    if (get_currency_year() > 1970) {
        /* Hide old UK currency inputs & show modern */
        $("#currency-shillings-row").hide();
        $("#currency-old-pence-row").hide();
        $("#currency-new-pence-row").show();
    }
    else if (get_currency_year() <= 1970) {
        /* Hide modern UK currency inputs & show old */
        $("#currency-shillings-row").show();
        $("#currency-old-pence-row").show();
        $("#currency-new-pence-row").hide();
    }
}

$("#currency-year").change(function () {

    hide_inputs_by_year();

});

function currency_output() {

    var currency_values = currency_formula(get_currency_year(), get_currency_pounds(), get_currency_shillings(), get_currency_old_pence(), get_currency_new_pence(), get_inflation_rate(get_currency_year()));

    var century = get_century(get_currency_year());

    var century_preview = "";
    var converted_money_string = currency_values.money.toLocaleString('en-GB', {style: 'currency', currency: 'GBP'});
    if (century != "21st") {
        century_preview = "<p><blockquote>" + conversion_data.century_intros[century] + "</p>" +
            "<p><cite><a href='./" + century + "-century.php' target='_blank'>Read more about the " + century + " century. </a></p></cite></blockquote>";
    }

    var HTML_output =

        "<div class='currency' id='currency-result'><h1>In 2017, this is worth approximately: </h1>" + "<span id='currency-large-text'>" + converted_money_string + "</span>" + "<h3>In 2017, you could buy either of these with " + converted_money_string + ": </h3>" +
        build_currency_output_html("Horses", currency_values.horses, "", "./img/horse.png") +

        build_currency_output_html("Cows", currency_values.cows, "", "./img/cow.png") +

        build_currency_output_html("Wool", currency_values.wool, "stones", "./img/ewe.png") +

        build_currency_output_html("Wheat", currency_values.wheat, "quarters", "./img/wheat.png") +

        build_currency_output_html("Wages", currency_values.wage, "days (skilled tradesman)", "./img/coinage.png") +

        build_currency_output_html("Houses", currency_values.houses, "(UK house price index)", "./img/coinage.png") +
        century_preview +
        "</div>";

    $("#currency-result").html(HTML_output);
    $("#currency-result").fadeIn();
}

function build_currency_output_html(string, value, unit, img) {
    return "<h4>" + " <img src='" + img + "' class='currency-icon'/>" + string + ": " + value + " " + unit + "</h4>";
}

$("#currency-form").submit(function (event) {
    event.preventDefault(); // Prevent PHP fallback
    window.location.hash = '';
    window.location.hash = '#currency-result';
    currency_output();
});

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
    return parseInt($("#currency-year").val());
}

function get_currency_pounds() {
    return parseInt($("#currency-pounds").val());
}

function get_currency_shillings() {
    return parseInt($("#currency-shillings").val());
}

function get_currency_old_pence() {
    return parseInt($("#currency-old-pence").val());
}

function get_currency_new_pence() {
    return parseInt($("#currency-new-pence").val()) / 100;
}


function old_money_to_new_formula(year, pounds, shillings, old_pence, new_pence, inflation) {
    var mathResult;

    if (year <= 1970) {

        mathResult = ((pounds + (shillings / 20) + (old_pence / 240) ) * inflation);

    }
    else if (year > 1970) {
        if (year != 2017) {
            mathResult = (pounds + new_pence) * inflation;
        }
        else {
            mathResult = (pounds + new_pence);
        }


    }


    if (year != 2017) {
        mathResult = mathResult * conversion_data[2017].inflation;
    }

    return mathResult;
}

function currency_formula(year, pounds, shillings, old_pence, new_pence, inflation) {

    var currency_money_to_modern_value = old_money_to_new_formula(year, pounds, shillings, old_pence, new_pence, inflation);


    return {
        horses: Math.floor(currency_money_to_modern_value / get_horse_price(2017)),
        cows: Math.floor(currency_money_to_modern_value / get_cow_price(2017)),
        wool: Math.floor(currency_money_to_modern_value / get_wool_price(2017)),
        wheat: Math.floor(currency_money_to_modern_value / get_wheat_price(2017)),
        wage: Math.floor(currency_money_to_modern_value / get_wage_price(2017)),
        houses: Math.floor(currency_money_to_modern_value / get_house_price(2017)),
        money: currency_money_to_modern_value
    }


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

function get_house_price(year) {
    return conversion_data[year].uk_house_price;
}