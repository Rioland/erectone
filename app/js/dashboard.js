
    $(document).ready(function () {
        $("input").keyup(function () {
            $('#results').html('');
            let searchString = $("#search_box").val();
            let data = 'search_text=' + searchString;
            if (searchString) {
                $.ajax({
                    type: "GET",
                    url: 'search.php',
                    data: data,
                    dataType: 'text',
                    async: false,
                    cache: false,
                    success: function (result) {
                        $('#results').html(result);
                        //window.location.reload();

                    }
                });
            }
        });
    });
  