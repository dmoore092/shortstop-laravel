$(document).ready(function(){
    let $j=jQuery.noConflict();
    //$(selector).inputmask("99-9999999");  //static mask
    $('#cell_phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
    $('#home_phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
    $('#ref1_phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
    $('#ref2_phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
    $('#ref3_phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
    $('#zip').inputmask({"mask": "99999[-9999]"}, { greedy: false }); //specifying options
    //$(selector).inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
});
