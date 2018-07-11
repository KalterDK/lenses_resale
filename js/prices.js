function prices_f_1() {
    var package_type_1 = $("#package_type-1").val();
    var amount_1 = $("#amount-1").val();
    var amount_sum = package_type_1 * amount_1;
    var price = 0;
    var total = 0;

    if (amount_sum < 4) {
        price = 145;
        total = amount_sum * price;
    } else if (3 < amount_sum < 7) {
        price = 135;
        total = amount_sum * price;
    } else if (amount_sum > 6) {
        price = 115;
        total = amount_sum * price;
    }

    $("#price-1").html(total);
}

prices_f_1()

function prices_f_2() {
    var package_type_2_1 = $("#package_type-2-1").val();
    var package_type_2_2 = $("#package_type-2-2").val();
    var amount_2_1 = $("#amount-2-1").val();
    var amount_2_2 = $("#amount-2-2").val();
    var amount_sum = package_type_2_1 * amount_2_1 + package_type_2_2 * amount_2_2;
    var price = 0;
    var total = 0;

    if (amount_sum < 4) {
        price = 145;
        total = amount_sum * price;
    } else if (3 < amount_sum < 7) {
        price = 135;
        total = amount_sum * price;
    } else if (amount_sum > 6) {
        price = 115;
        total = amount_sum * price;
    }

    $("#price-2").html(total);
}

prices_f_2()