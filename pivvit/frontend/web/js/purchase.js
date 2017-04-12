$(document).ready(function(){
    $('#purchase-offeringid, #purchase-quantity').change(function () {
        var qt = $('#purchase-quantity').val();
        var price = $('#purchase-offeringid').find('option:selected').val();
        var total = qt * price;
        console.log("qt: ");
        console.log(qt);
        console.log("price: ");
        console.log(price);
        $('#total').text(total);
    });
});