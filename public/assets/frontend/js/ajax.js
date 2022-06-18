const hostname =document.location.origin;
function addToCart(id) {
    var qty = $('#qty-' + id).val();
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: '/them-gio-hang/' + id,
        type: 'POST',
        data: {qty: qty, _token: _token},
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        $('#qty-' + id).val(1);
        alertify.success('Thêm Giỏ Hàng Thành Công');
    });
}
function removeCartItem(id) {
    $.ajax({
        url: 'delete-cart-item/' + id,
        type: 'GET',
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        alertify.warning('Đã xoá sản phẩm');
    });
}
function removeAllCart() {
    $.ajax({
        url: 'delete-all-cart',
        type: 'GET',
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        alertify.warning('Đã xoá tất cả sản phẩm trong giỏ hàng');
    });
}
function checkOut(){
    swal({
        title: "Thông Báo!",
        text: "Vui lòng liên hệ đến  <b class='font-weight-bold'> Nguyễn Văn Tuân </b> </br> SĐT:<b class='text-danger mt-1'>0934616287</b> </br> để được hỗ trợ",
        html:true,
        // imageUrl:hostname+"/assets/frontend/images/load.gif",
        showCancelButton: false,
        showConfirmButton: true
    });
    // var _token = $("input[name='_token']").val();
    // var fullName = $("input[name='fullName']#fullName").val();
    // var phoneNumber = $("input[name='phoneNumber']#phoneNumber").val();
    // var email = $("input[name='emailAddress']#emailAddress").val();
    // var address = $("input[name='Address']#Address").val();
    // var message = $("textarea[name='message']#noteCheckout").val();

    // $.ajax({
    //     url: "/checkout",
    //     type:'POST',
    //     data: {_token:_token, fullName:fullName, phoneNumber:phoneNumber, email:email, address:address,message:message},
    //     beforeSend: function() {
    //         swal({
    //             title: "Đang Tải...",
    //             text: "Xin Hãy Chờ!",
    //             imageUrl:hostname+"/assets/frontend/images/load.gif",
    //             showCancelButton: false,
    //             showConfirmButton: false
    //         });
    //     },
    //     success: function(data) {
    //         if($.isEmptyObject(data.error)){
    //             document.location.href="/xac-nhan";
    //         }else{
    //             sweetAlert("Lỗi...","Vui Lòng Nhập Đầy Đủ Thông Tin!","error")
    //             printErrorMsg(data.error);
    //         }
    //     },
    //     error:function (data){
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Oops...',
    //             text: 'Something went wrong!',
    //         })
    //     }
    // });
    // function printErrorMsg (msg) {
    //     $(".print-error-msg").find("ul").html('');
    //     $(".print-error-msg").css('display','block');
    //     $.each( msg, function( key, value ) {
    //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //     });
    // }
}
function functionAjax(){
    var search = "";
    var cate = $('#cate').val();
    if($('#search').val() === ""){
        search = $('#search-cate').val();
    }else {
        search = $('#search').val();
    }
    var display = $('#display-item').val();
    var sortBy = $('#sort-by').val();
    $.ajax({
        url: '/search-and-sort',
        type: 'GET',
        data: {p: search,display:display,sort:sortBy, cate: cate},
    }).done(function (response) {
        $('#product-res').empty();
        $('#product-res').html(response.products);
        if(response.search_key === null){
            $('#search-key').empty();
        }else {
            $('#search-key').empty();
            $('#search-key').html('<p><i class="icon_search"></i> Kết Quả Tìm Kiếm Cho Từ Khoá "<span class="text-danger">'+`${response.search_key}`+'</span>"</p>');
        }
    });
}
