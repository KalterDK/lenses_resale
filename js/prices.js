function prices_f() {
    var package_type = $("#package_type").val();
    var amount = $("#amount").val();
    var amount_sum = package_type * amount;
    var price = 0;
    var total = 0;

    if (amount_sum < 4) {
        price = 179;
        total = amount_sum * price;
    } else if (3 < amount_sum < 7) {
        price = 169;
        total = amount_sum * price;
    } else if (amount_sum > 6) {
        price = 149;
        total = amount_sum * price;
    }

    $("#price").html(total);
}