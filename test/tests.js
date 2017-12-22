QUnit.test( "1270 year, £1000 input currency_formula test", function( assert ) {

   var test_inputs = {
       year: 1270,
       pounds: 1000,
       shillings: 0,
       old_pence: 0,
       new_pence: 0,
       inflation: 532.72,
       century: "13th"
   }

    var currency_converter_output = currency_formula(test_inputs);
    assert.ok( currency_converter_output.money === 729826.40, "Passed! - £1000 returned 729826.40" );

});