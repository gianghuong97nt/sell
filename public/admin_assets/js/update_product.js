
'use strict';
$(document).ready(function () {
    init();
    initEvents();
});
var result = '';
var _fail = "fail";
var _true = "ok";

function init() {
    $('#product_name_update').focus();
}

function initEvents() {
    $(document).on('click','#btn-update',function (e) {
        try {
            
        } catch (e) {
            alert('Detail' + e.message);
        }

    });
    $(document).on('click','#product_name_update',function (e) {
        try {
            e.preventDefault();
            $("input").keypress(function(){
                $("#invalid_product_name").addClass('display_view');
            });

        } catch (e) {
            alert('nhập email' + e.message);
        }
    });

    $(document).on('change','#category_update',function (e) {
        try {
            e.preventDefault();
            $("#invalid_category").addClass('display_view');

        } catch (e) {
            alert('nhập email' + e.message);
        }
    });

    

    $(document).on('keypress','.form-control', function (e) {
        if(e.which === 13){
            validate();
            if(result == _true){
                $.dialogUpdate({
                    contents: JSMESSAGE.save_confirm,
                    callback: function (confirm) {
                        if (confirm) {
                            updateProduct();
                        }
                    }
                });
            }
        }
    });

}

function validate() {
    if($('#product_name_update').val() == "" || $('#category_update').val() == 0){

        if($('#product_name_update').val() == ""){
            $("#invalid_product_name").removeClass('display_view');
            $("#invalid_product_name").html("Không được bỏ trống");
            $('#product_name_update').focus();
            result = _fail;
        }
        if($('#category_update').val() == 0){
            $("#invalid_category").removeClass('display_view');
            $("#invalid_category").html("Không được bỏ trống");
            result = _fail;
        }

    }else{
        result = _true;
    }
}




