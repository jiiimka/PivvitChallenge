$(document).ready(function(){
    $('#purchase-offeringid, #purchase-quantity').change(function () {
        var qt = $('#purchase-quantity').val();
        var price = $('#purchase-offeringid').attr('data-price');
        var total = qt * price;
        $('#total').text(total);
    });
});