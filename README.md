#TNA Currency Converter (2017 Update)

Revamp for the currency converter located at http://nationalarchives.gov.uk/currency

##Old money to new formula

This part of the currency converter takes any money from 1270 upwards and converts it to its worth in 2017.

### Pre 1975 currency
1. Take the £'s from user input, store as "pounds"
2. Take the shillings from user input, divide by 20, store result as "shillings"
3. Take the pence from user input, divide by 240, store result as "pence"
4. Add pounds + shillings + pence store as "old_money".
5. Multiply "old_money" by an inflation value according to the year of the currency. This gives us the result of the old currency converter, which converted to 2005. Store result as "2005_value".  
6. Multiply "2005_value" by 3.7% to return "2017_value".

####Example:
 User inputs 
 * 10 Pounds
 * 5 Shillings
 * 10 Pence
 * 1270 Year (which becomes a 532.72 inflation multiplier). 
 
 The formula ran is 

    ((10 + (5 / 20) + (10 / 240) ) * 532.72) 

which returns 5482.576. This would be the shown to the user on the old currency converter, as this is the money's value in 2005.
 
To convert the 2005 value to 2017 we multiply by 1.037 (3.7%) making the total £5685.43
 
### Post 1975 currency
1. Take the £'s from user input, store as "pounds"
2. Take the pence, store as "pence"
3. Add the pounds and pence together and store as "old_money"
4. Multiply "old_money" by an inflation value according to the year of the currency. This gives us the result of the old currency converter, which converted to 2005. Store result as "2005_value".  
5. Multiply "2005_value" by 3.7% to return "2017_value".

####Example:
 User inputs 
 * 10 Pounds
 * 99 Pence
 * 1975 Year (which becomes a 5.57 inflation multiplier). 
 
 The formula ran is 

    ((10 + 0.99) * 5.57) 

which returns 61.2143. This would be the shown to the user on the old currency converter, as this is the money's value in 2005.
 
To convert the 2005 value to 2017 we multiply by 1.037 (3.7%) making the total £63.48

#Buying power maths

The formula for buying power is calculated using the above "Old Money to New" formula.
