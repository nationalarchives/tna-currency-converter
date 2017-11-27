#TNA Currency Converter (2017 Update)

Revamp for the currency converter located at http://nationalarchives.gov.uk/currency

##Old money to new formula

This part of the currency converter takes any money from 1270 upwards and converts it to its worth in 2017.

### Pre 1970 currency
1. Take the £'s from user input, store as "pounds"
2. Take the shillings from user input, divide by 20, store result as "shillings"
3. Take the pence from user input, divide by 240, store result as "pence"
4. Add pounds + shillings + pence store as "old_money".
5. Multiply "old_money" by an inflation value according to the year of the currency. This gives us the result of the old currency converter, which converted to 2005. Store result as "2005_value".  
6. Multiply "2005_value" by 3.7% to return "2017_value".

Example: 10 Pounds, 5 Shillings, 10 Pence from 1270 would become £10.29. Then it is multiplied by it's inflation rate, 532.72, which becomes £5481.68. With the 3.7% inflation between 2005 and 2017, the final value becomes 7509.90

### Post 1970 currency
1. Take the £'s from user input, store as "pounds"


#Buying power maths

The formula for buying power is calculated using the above "Old Money to New" formula.
