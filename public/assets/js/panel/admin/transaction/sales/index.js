$("#customer-id").select2({
    placeholder: "Pilih Pelanggan",
    allowClear: true,
    minimumInputLength: 3,
    ajax: {
        url: $("#customer-id").attr("data-url"),
        type: "POST",
        dataType: "json",
        data: function (params) {
            return {
                _token: $('meta[name="csrf-token"]').attr("content"),
                search: params.term,
            };
        },
        processResults: function (data) {
            return {
                results: data,
            };
        },
    },
});

$("#item-id").select2({
    placeholder: "Pilih Item",
    allowClear: true,
    minimumInputLength: 3,
    ajax: {
        url: $("#item-id").attr("data-url"),
        type: "POST",
        dataType: "json",
        data: function (params) {
            return {
                _token: $('meta[name="csrf-token"]').attr("content"),
                search: params.term,
            };
        },
        processResults: function (data) {
            return {
                results: data,
            };
        },
    },
});

$("#customer-id").on("change", function () {
    let custId = $("#customer-id").val();
    if (custId != null) {
        $("#customer-cart-wrapper").removeClass("hidden");

        $.ajax({
            url: $("#customer-cart-wrapper").attr("data-url") + `/${custId}`,
            type: "GET",
            beforeSend: function () {
                $(".ajax-loading").show();
            },
        }).done(function (response) {
            $(".ajax-loading").hide();
            $("#cart-table-body").html("");

            let cart = response.data;

            let subtotal = response.data.reduce((acc, cart) => Number(acc) + Number(cart.total), 0);
            let discount = (subtotal * $("#discount").val()) / 100;
            let total = subtotal - discount;

            cart.map((state, index) => {
                $("#cart-table-body").append(
                    `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">` +
                        `<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> ${state.item_name} </th>` +
                        `<td class="px-6 py-4 text-right"> ${state.price} </td>` +
                        `<td class="px-6 py-4 text-right"> ${state.qty} </td>` +
                        `<td class="px-6 py-4 text-right"> ${state.discount} </td>` +
                        `<td class="px-6 py-4 text-right"> ${state.total} </td>` +
                        `</tr>`
                );
            });

            $("#subtotal").val(subtotal);
            $("#total").val(total);
        });
    } else {
        $("#customer-cart-wrapper").addClass("hidden");
    }
});

$("#discount").on("change", function () {
    let discount = ($("#subtotal").val() * $("#discount").val()) / 100;
    let total = $("#subtotal").val() - discount;
    $("#total").val(total);
});

$("#save-transaction-btn").on("click", function () {
    let orderCode = $("#save-transaction-btn").attr("data-ordercode");
    let customerId = $("#customer-id").val();
    let subtotal = $("#subtotal").val();
    let discount = $("#discount").val();
    let total = $("#total").val();

    let param = {
        _token: $('meta[name="csrf-token"]').attr("content"),
        code: orderCode,
        customer_id: customerId,
        subtotal: subtotal,
        discount: discount,
        total: total,
    };

    $.ajax({
        url: $("#save-transaction-btn").attr("data-url"),
        type: "POST",
        data: param,
        dataType: "json",
        beforeSend: function () {
            $(".ajax-loading").show();
        },
    }).done(function (response) {
        $(".ajax-loading").hide();
        if (response.success == true) {
            window.location = $("#save-transaction-btn").attr("data-urlsuccess");
        }
    });
});

$("#add-item-btn").on("click", function () {
    let itemId = $("#item-id").val();
    let customerId = $("#customer-id").val();
    let qty = $("#qty").val();

    if (itemId != null && customerId != null) {
        let param = {
            _token: $('meta[name="csrf-token"]').attr("content"),
            customer_id: customerId,
            item_id: itemId,
            qty: qty,
        };

        $.ajax({
            url: $("#add-item-btn").attr("data-url"),
            type: "POST",
            data: param,
            dataType: "json",
            beforeSend: function () {
                $(".ajax-loading").show();
            },
        }).done(function (response) {
            $(".ajax-loading").hide();
            if (response.success == true) {
                $.ajax({
                    url: $("#customer-cart-wrapper").attr("data-url") + `/${customerId}`,
                    type: "GET",
                    beforeSend: function () {
                        $(".ajax-loading").show();
                    },
                }).done(function (response) {
                    $(".ajax-loading").hide();
                    $("#cart-table-body").html("");

                    let cart = response.data;

                    let subtotal = response.data.reduce((acc, cart) => Number(acc) + Number(cart.total), 0);
                    let discount = (subtotal * $("#discount").val()) / 100;
                    let total = subtotal - discount;

                    cart.map((state, index) => {
                        $("#cart-table-body").append(
                            `<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">` +
                                `<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"> ${state.item_name} </th>` +
                                `<td class="px-6 py-4 text-right"> ${state.price} </td>` +
                                `<td class="px-6 py-4 text-right"> ${state.qty} </td>` +
                                `<td class="px-6 py-4 text-right"> ${state.discount} </td>` +
                                `<td class="px-6 py-4 text-right"> ${state.total} </td>` +
                                `</tr>`
                        );
                    });

                    $("#subtotal").val(subtotal);
                    $("#total").val(total);
                });
            }
        });
    }
});
