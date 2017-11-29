# TNA Currency Converter (2017 Update)

Revamp for the currency converter located at http://nationalarchives.gov.uk/currency

This currency converter converts any UK currency from 1270-2005 into 2017 values. This is the "old money to new" part of the code/formula.

The currency converter uses the converted currency to calculate buying power. This is how much horses, sheep, etc. can be bought in 2017 with this money. It is explained in the "buying power" section of this README.

It is built on top of the original TNA currency converter built in 2005, which helps give context to the maths explained below. 

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

This part of the currency takes money from the past, and shows how powerful it would be in 2017.

The formula for buying power is calculated partly using the above "old money to new" formula.

1. Take users money and year input
2. Convert the money to 2017 currency using the above "old money to new" formula store as "new_money"
3. Divide the "new_money" by the horse, cow, wool, wheat and wages prices to return the buying power.
4 Floor the values (e.g. 1.5 horses becomes 1 horse) and return results to user

#### Example
User inputs 
 * 10 Pounds
 * 99 Pence
 * 1975 Year (which becomes a 5.57 inflation multiplier). 
 
 The prices of horses, cows, wool, wages and wheat are then collected from a JS object:
 
     "2017": {
             "inflation": 1.37, // 37% inflation between 2005 and 2017
             "horse_price": 2387.37,
             "cow_price": 1200,
             "wool_price": 6.35,
             "wage_price": 100,
             "wheat_price": 1.88,
             "uk_house_price" : 226367
         }
 
 The old money to new formula is ran which returns £63.48, which is then used to calculate the buying power:
 
     63.48/2287.37 // Horses = 0
     63.48/1200 // Cows = 0 
     63.48/6.35 // Wool = 0 stones
     63.48/100 // Wages = 0 days wages
     63.48/1.88 // Wheat = 33 quarters
     
 This then gives you the buying power of £10.99 in 1975 in 2017.    
     
     