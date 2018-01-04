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

    var currency_converter_output = old_money_to_new_formula(test_inputs);
    assert.ok( currency_converter_output === 729826.4, "Passed! - £1000 returned 729826.4" );
});

QUnit.test("Locale String generator", function (assert) {

    assert.equal(number_to_pounds_string(100000), "£100,000.00", "Passed for 100000");
    assert.equal(number_to_pounds_string(999999), "£999,999.00", "Passed for 999999");

    assert.equal(number_to_pounds_string(10000), "£10,000.00", "Passed for 10000");
    assert.equal(number_to_pounds_string(99999), "£99,999.00", "Passed for 99999");

    assert.equal(number_to_pounds_string(1000), "£1,000.00", "Passed for 1000");
    assert.equal(number_to_pounds_string(9999), "£9,999.00", "Passed for 9999");

    assert.equal(number_to_pounds_string(1), "£1.00", "Passed for 1");
    assert.equal(number_to_pounds_string(1.1), "£1.10", "Passed for 1.1");
    assert.equal(number_to_pounds_string(1.20), "£1.20", "Passed for 1.20");

    assert.equal(number_to_pounds_string(0), "£0.00", "Passed for 0");
    assert.equal(number_to_pounds_string(0.1),"£0.10", "Passed for 0.1");
    assert.equal(number_to_pounds_string(0.01),"£0.01", "Passed for 0.01");


});