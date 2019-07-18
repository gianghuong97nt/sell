
'use strict';
$(document).ready(function () {
    init();
    initEvents();

});
function init() {
    $(document).ready(function(){
        $('#password_current').focus();
    });
}
function initEvents() {
    $(document).on('click','.btn-back',function (e) {
        try {
            window.location.href = '/';

        } catch (e) {
            alert('Back home' + e.message);
        }
    });

    $(document).on('click','.change_password',function (e) {
        try {
            // window.location.href = '/';

        } catch (e) {
            alert('Save password' + e.message);
        }
    });

}



