
'use strict';
$(document).ready(function () {
    init();
    initEvents();
});


function init() {
    $('#product_name').focus();
}

function initEvents() {
    $(document).on('click','#btn-detail',function (e) {
        try {
            
        } catch (e) {
            alert('Detail' + e.message);
        }
    });
    $(document).on('click','#product_name',function (e) {
        try {
            e.preventDefault();
            $("input").keypress(function(){
                $("#invalid_product_name").addClass('display_view');
            });

        } catch (e) {
            alert('nhập email' + e.message);
        }
    });

    $(document).on('change','#category',function (e) {
        try {
            e.preventDefault();
            $("#invalid_category").addClass('display_view');

        } catch (e) {
            alert('nhập email' + e.message);
        }
    });
    
}

function validate() {
    if($('#product_name').val() == "" || $('#category').val() == 0){

        if($('#product_name').val() == ""){
            $("#invalid_product_name").removeClass('display_view');
            $("#invalid_product_name").html("Không được bỏ trống");
            $('#product_name').focus();
            result = _fail;
        }
        if($('#category').val() == 0){
            $("#div_category").removeClass('display_view');
            $("#invalid_category").removeClass('display_view');

            $("#invalid_category").html("Không được bỏ trống");
            result = _fail;
        }

    }else{
        result = _true;
    }
}


