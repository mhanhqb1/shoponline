$(document).ready(function () {
    $(".btn-addnew").click(function () {
        location.href = baseUrl + '/admin/' + controller + '/update';
        return false;
    });
});