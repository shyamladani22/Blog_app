$(document).ready(function () {
    $('#sort_date').on('change', function () {
        var sort_value = $(this).val();
        $.ajax({
            url: 'sort.php',
            method: 'GET',
            data: { sort_date: sort_value },
            success: function (response) {
                $('#article_list').html(response);
            }
        });
    });
});
