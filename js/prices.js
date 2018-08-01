function prices_f_1() {

    var amount_1 = $("#amount-1").val();
    var price = 0;
    var total = 0;

    if (amount_1 < 4) {
        price = 145;
        total = amount_1 * price;
    } else if (3 < amount_1 < 7) {
        price = 145;
        total = amount_1 * price;
    } else if (amount_1 > 6) {
        price = 145;
        total = amount_1 * price;
    }

    $("#price-1").html(total);
}

prices_f_1()

function prices_f_2() {
    var amount_2_1 = $("#amount-2-1").val();
    var amount_2_2 = $("#amount-2-2").val();
    var amount_sum = +amount_2_1 + +amount_2_2;
    var price = 0;
    var total = 0;

    if (amount_sum < 4) {
        price = 145;
        total = amount_sum * price;
    } else if (3 < amount_sum < 7) {
        price = 145;
        total = amount_sum * price;
    } else if (amount_sum > 6) {
        price = 145;
        total = amount_sum * price;
    }

    $("#price-2").html(total);
}

prices_f_2()