function update_cart() {
    $(document).ready(function () {
        $(".box_number_cart").change(function () {
            var total, grandtotal;
            var url, number, id_cart, price;
            total = 0;
            grandtotal = 0;
			var shipping = 0;
            number = $(this).val();
            id_cart = $(this).attr("id");
            price = $(this).attr("title");
            url = "view/update_number_cart.php?number=" + number + "&idcart=" + id_cart + "&price=" + price;
            $.get(url, function (data) {
				shipping = data['shipping'];
                var price = data['price'];
                total = data['total'];
                var productid = "td." + data['id'];
                number = price.toFixed(2) + '';
                x = number.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                price = x1;
                if (x[1] > 0) {
                    price = price + x2;
                }
                grandtotal = total + shipping;
                $(productid).html(addCommas(price) + " VND");
				$('#shipAmount').html(addCommas(shipping) + " VND")
                $('#totalAmount').html(addCommas(total) + " VND");
                $('#grandTotal').html(addCommas(grandtotal) + " VND");
            }, 'json');
        })
    });
}

function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}