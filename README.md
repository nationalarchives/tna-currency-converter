# TNA Currency Converter (2017 Update)

Revamp for the currency converter located at http://nationalarchives.gov.uk/currency

This currency converter converts any UK currency from 1270-2005 into 2017 values. This is the "old money to new" part of the code/formula.

The currency converter uses the converted currency to calculate buying power. This is how much horses, sheep, etc. can be bought in any year. It is explained in the "buying power" section of this README.

It is built on top of the original TNA currency converter built in 2005, which helps give context to the maths explained below. 

# Installation
You will need PHP installed to run this application.

1. Setup [TNA-Base](https://github.com/nationalarchives/tna-base) in WordPress
2. Clone this repo to wp-content/themes
3. Enable this theme in WP admin
4. Create a page with the template Currency Converter to display the application.
     
## Grunt

Grunt is available in this project. It is used to:

1. Run ESLint on the currency-converter.js file to improve code quality and easily detect syntax erros
2. Concat the large currency conversion data to the logic file at build, to make the currency-converter.js easier to read for developers
3. Create a minified version of the concatenated js file using uglify
4. Run QUnit tests to ensure the currency converter still works after every code change
5. Watch the currency-converter.js file for any changes and run the above steps again

To use grunt:

1. Ensure you have installed the following npm packages
    
    [grunt](https://gruntjs.com/getting-started), [grunt-contrib-concat](https://www.npmjs.com/package/grunt-contrib-concat), [grunt-contrib-uglify](https://www.npmjs.com/package/grunt-contrib-uglify), [grunt-contrib-qunit](https://www.npmjs.com/package/grunt-contrib-qunit), [grunt-eslint](https://www.npmjs.com/package/grunt-eslint)

2. Run "grunt" in the terminal from the projects root    

# "Old money to new" maths

This part of the currency converter takes any money from 1270 upwards and converts it to its worth in 2017.

### Pre 1975 currency
1. Take the £'s from user input, store as "pounds"
2. Take the shillings from user input, divide by 20, store result as "shillings"
3. Take the pence from user input, divide by 240, store result as "pence"
4. Add pounds + shillings + pence store as "old_money".
5. Multiply "old_money" by an inflation value according to the year of the currency. This gives us the result of the old currency converter, which converted to 2005. Store result as "2005_value".  
6. Multiply "2005_value" by 37% to return "2017_value".

#### Example:
 User inputs 
 * 10 Pounds
 * 5 Shillings
 * 10 Pence
 * 1270 Year (which becomes a 532.72 inflation multiplier). 
 
 The formula ran is 

    ((10 + (5 / 20) + (10 / 240) ) * 532.72) 

which returns 5482.576. This would be the shown to the user on the old currency converter, as this is the money's value in 2005.
 
To convert the 2005 value to 2017 we multiply by 1.37 (37%) making the total £5685.43
 
### Post 1975 currency
1. Take the £'s from user input, store as "pounds"
2. Take the pence, store as "pence"
3. Add the pounds and pence together and store as "old_money"
4. Multiply "old_money" by an inflation value according to the year of the currency. This gives us the result of the old currency converter, which converted to 2005. Store result as "2005_value".  
5. Multiply "2005_value" by 37% to return "2017_value".

#### Example:
 User inputs 
 * 10 Pounds
 * 99 Pence
 * 1975 Year (which becomes a 5.57 inflation multiplier). 
 
 The formula ran is 

    ((10 + 0.99) * 5.57) 

which returns 61.2143. This would be the shown to the user on the old currency converter, as this is the money's value in 2005.
 
To convert the 2005 value to 2017 we multiply by 1.37 (37%) making the total £63.48

# "Buying power" maths

This part of the currency takes money from the past, and shows how powerful it would be in that year.

The formula for buying power is calculated partly using the above "old money to new" formula.

1. Take users money and year input
2. If the year input is below 1970, divide the shillings by 20 and the pence by 240. 
3. Add the values calculate in step 2 and divide by the horse, cow, wool, wheat and wages prices to return the buying power.
4 Floor the values (e.g. 1.5 horses becomes 1 horse) and return results to user

#### Example
User inputs 
 * 10 Pounds
 * 5 Pence
 * 5 Shillings
 * 1270 Year (which becomes a 5.57 inflation multiplier). 
 
 The prices of horses, cows, wool, wages and wheat are then collected from a JS object:
 
     "1270": {
        "inflation": 532.72,
        "horse_price": 0.76,
        "cow_price": 0.35,
        "wool_price": 0.13,
        "wheat_price": 0.16,
        "wage_price": 0.01,
        "century": "13th"
    }
    
 You then convert the old money by doing what is mentioned in step 2:
 
 10+ (5/20) + (5/240) = £10.27
 
 You would then divide this 10.27 by 0.76 (horse_price), 0.35 (cow_price) and so on to return the buying power.
 
 E.g. 10.27/0.76 (horse_price) returns 13.5. Floor this value and you are left with 13 horses.
     
     
