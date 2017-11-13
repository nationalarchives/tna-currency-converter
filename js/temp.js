/*
var inflation_rate, horse_price, cow_price, wool_price, wheat_price, wage_price;
function set_values(inflation_rate, horse_price, cow_price, wool_price, wheat_price, wage_price) {
    this.inflation_rate = inflation_rate;
    this.horse_price = horse_price;
    this.cow_price = cow_price;
    this.wool_price = wool_price;
    this.wheat_price = wheat_price;
    this.wage_price = wage_price;
}

/!*function JSON_loop() {
    var obj = {};
    for(var i = 1270; i <= 1900; i = i+10) {
        math_value_setter_switch(i);
        obj[i] = {
            'inflation' : get_inflation_rate(),
            'horse_price' : horse_price,
            'cow_price' : cow_price,
            'wool_price' : wool_price,
            'wheat_price' : wheat_price,
            'wage_price' : wage_price
        };
    }
    for(var i = 1905; i <= 1970; i = i+5) {
        math_value_setter_switch(i);
        obj[i] = {
            'inflation' : get_inflation_rate(),
            'horse_price' : horse_price,
            'cow_price' : cow_price,
            'wool_price' : wool_price,
            'wheat_price' : wheat_price,
            'wage_price' : wage_price
        };
    }


    console.log(JSON.stringify(obj));
}*!/

function math_value_setter_switch(year) {



    switch (year) {
        case 1270:
            set_values(532.72, 0.76, 0.35, 0.13, 0.16, 0.01);
            break;
        case 1280:
            set_values(506.62, 0.85, 0.45, 0.23, 0.26, 0.01);
            break;
        case 1290:
            set_values(536.83, 0.85, 0.45, 0.23, 0.26, 0.01);
            break;

        case 1300:
            set_values(517.54, 0.85, 0.45, 0.23, 0.26, 0.01);
            break;

        case 1310:
            set_values(446.49, 0.85, 0.45, 0.23, 0.26, 0.01);
            break;

        case 1320:
            set_values(335.83, 0.85, 0.45, 0.23, 0.26, 0.01);
            break;

        case 1330:
            set_values(447.68, 0.69, 0.37, 0.14, 0.37, 0.02);
            break;

        case 1340:
            set_values(546.73, 0.69, 0.37, 0.14, 0.37, 0.02);
            break;

        case 1350:
            set_values(428.64, 0.69, 0.37, 0.14, 0.37, 0.02);
            break;

        case 1360:
            set_values(363.44, 0.69, 0.37, 0.14, 0.37, 0.02);
            break;

        case 1370:
            set_values(358.01, 0.69, 0.37, 0.14, 0.37, 0.02);
            break;

        case 1380:
            set_values(450.48, 1.27, 0.58, 0.18, 0.31, 0.02);
            break;

        case 1390:
            set_values(483.30, 1.27, 0.58, 0.18, 0.31, 0.02);
            break;

        case 1400:
            set_values(447.28, 1.27, 0.58, 0.18, 0.31, 0.02);
            break;

        case 1410:
            set_values(459.93, 1.27, 0.58, 0.18, 0.31, 0.02);
            break;

        case 1420:
            set_values(469.35, 1.27, 0.58, 0.18, 0.31, 0.02);
            break;

        case 1430:
            set_values(455.77, 0.76, 0.40, 0.14, 0.37, 0.03);
            break;

        case 1440:
            set_values(469.35, 0.76, 0.40, 0.14, 0.37, 0.03);
            break;

        case 1450:
            set_values(455.77, 0.76, 0.40, 0.14, 0.37, 0.03);
            break;

        case 1460:
            set_values(469.35, 0.76, 0.40, 0.14, 0.37, 0.03);
            break;

        case 1470:
            set_values(500.58, 0.76, 0.40, 0.14, 0.37, 0.03);
            break;

        case 1480:
            set_values(504.59, 1.41, 0.38, 0.11, 0.40, 0.03);
            break;

        case 1490:
            set_values(488.93, 1.41, 0.38, 0.11, 0.40, 0.03);
            break;

        case 1500:
            set_values(486.10, 1.41, 0.38, 0.11, 0.40, 0.03);
            break;

        case 1510:
            set_values(483.77, 1.41, 0.38, 0.11, 0.40, 0.03);
            break;

        case 1520:
            set_values(379.58, 1.41, 0.38, 0.11, 0.40, 0.03);
            break;

        case 1530:
            set_values(322.10, 4.75, 1.25, 0.32, 0.93, 0.03);
            break;

        case 1540:
            set_values(307.56, 4.75, 1.25, 0.32, 0.93, 0.03);
            break;

        case 1550:
            set_values(200.51, 4.75, 1.25, 0.32, 0.93, 0.03);
            break;

        case 1560:
            set_values(170.30, 4.75, 1.25, 0.32, 0.93, 0.03);
            break;

        case 1570:
            set_values(173.89, 4.75, 1.25, 0.32, 0.93, 0.03);
            break;

        case 1580:
            set_values(149.31, 8.24, 1.86, 0.34, 1.80, 0.05);
            break;

        case 1590:
            set_values(125.29, 8.24, 1.86, 0.34, 1.80, 0.05);
            break;

        case 1600:
            set_values(100.64, 8.24, 1.86, 0.34, 1.80, 0.05);
            break;

        case 1610:
            set_values(97.88, 8.24, 1.86, 0.34, 1.80, 0.05);
            break;

        case 1620:
            set_values(96, 8.24, 1.86, 0.34, 1.80, 0.05);
            break;

        case 1630:
            set_values(89.16, 6.37, 5.39, 0.80, 3.83, 0.07);
            break;

        case 1640:
            set_values(85.80, 6.37, 5.39, 0.80, 3.83, 0.07);
            break;

        case 1650:
            set_values(75.56, 6.37, 5.39, 0.80, 3.83, 0.07);
            break;

        case 1660:
            set_values(76.77, 6.37, 5.39, 0.80, 3.83, 0.07);
            break;

        case 1670:
            set_values(83.05, 6.37, 5.39, 0.80, 3.83, 0.07);
            break;

        case 1680:
            set_values(83.54, 5.38, 4.16, 0.60, 2, 0.09);
            break;

        case 1690:
            set_values(87.47, 5.38, 4.16, 0.60, 2, 0.09);
            break;

        case 1700:
            set_values(78.09, 5.38, 4.16, 0.60, 2, 0.09);
            break;

        case 1710:
            set_values(76.59, 5.38, 4.16, 0.60, 2, 0.09);
            break;

        case 1720:
            set_values(84.75, 5.38, 4.16, 0.60, 2, 0.09);
            break;

        case 1730:
            set_values(85.98, 6.85, 4.67, 0.47, 1.63, 0.10);
            break;

        case 1740:
            set_values(86.29, 6.85, 4.67, 0.47, 1.63, 0.10);
            break;

        case 1750:
            set_values(85.16, 6.85, 4.67, 0.47, 1.63, 0.10);
            break;

        case 1760:
            set_values(74.79, 6.85, 4.67, 0.47, 1.63, 0.10);
            break;

        case 1770:
            set_values(63.69, 6.85, 4.67, 0.47, 1.63, 0.10);
            break;

        case 1780:
            set_values(62.85, 10.50, 5, 0.90, 5.69, 0.15);
            break;

        case 1790:
            set_values(56.03, 10.50, 5, 0.90, 5.69, 0.15);
            break;

        case 1800:
            set_values(32.17, 10.50, 5, 0.9, 5.69, 0.15);
            break;

        case 1810:
            set_values(33.96, 10.5, 5, 0.9, 5.69, 0.15);
            break;

        case 1820:
            set_values(41.92, 10.5, 5, 0.9, 5.69, 0.15);
            break;

        case 1830:
            set_values(49.49, 15, 5.34, 0.66, 2.01, 0.2);
            break;

        case 1840:
            set_values(44.1, 15, 5.34, 0.66, 2.01, 0.2);
            break;

        case 1850:
            set_values(58.53, 15, 5.34, 0.66, 2.01, 0.2);
            break;

        case 1860:
            set_values(43.16, 15, 5.34, 0.66, 2.01, 0.2);
            break;

        case 1870:
            set_values(45.70, 15, 5.34, 0.66, 2.01, 0.2);
            break;

        case 1880:
            set_values(48.31, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1890:
            set_values(59.89, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1900:
            set_values(57.06, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1905:
            set_values(57.35, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1910:
            set_values(57.06, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1915:
            set_values(43.06, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1920:
            set_values(21.21, 27.5, 9.69, 0.54, 1.28, 0.33);
            break;

        case 1925:
            set_values(29.97, 255.2, 67.17, 4.44, 5.98, 0.33);
            break;

        case 1930:
            set_values(33.42, 255.2, 67.17, 4.44, 5.98, 0.33);
            break;

        case 1935:
            set_values(36.98, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1940:
            set_values(28.72, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1945:
            set_values(25.95, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1950:
            set_values(22.78, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1955:
            set_values(17.42, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1960:
            set_values(15.3, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1965:
            set_values(12.86, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1970:
            set_values(10.28, 255.2, 67.17, 4.44, 5.98, 1.42);
            break;

        case 1975:
            set_values(5.57, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 1980:
            set_values(2.85, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 1985:
            set_values(2.01, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 1990:
            set_values(1.51, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 1995:
            set_values(1.28, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 2000:
            set_values(1.12, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        case 2005:
            set_values(1, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;

        default:
            // Fallback to 2005 values
            set_values(1, 2387.37, 392.79, 5.36, 17.36, 57.6);
            break;
    }
}*/
