$(document).ready(function () {
    var $input = $('.live-search-input');

    /*
    AJAX

    /* из формы берём атрибуты 'db_table', 'db_column', 'value'(от input), по которым соотвественно формируется запрос типа 'SELECT * FROM db_table WHERE LOCATE (:value, db_column)'
    /* в результате выдаётся список значений свойств резултирующих объетов по ключу 'db_column'
     */
    $input.on("keyup", function() {

        $result = $(this).siblings('.search-result');
        $params = $(this).siblings('.live-search_params');
        $table = $params.attr('db_table');
        $name = $params.attr('db_column');
        $item_type = $params.attr('item_type');

        // проверка на кол-во столбцов, в которых ведётся поиск
        if($input !== 'undefined')
        {
            var arr = $name.split(' ');
            if(arr.length > 1)
            {
                db_columns = arr;
            } else {
                db_columns = $name;
            }
        }

        if(this.value.length >= 2){
            $.ajax({
                type: 'post',
                url: "/ajax/live_search",
                data: {
                    'value': this.value,
                    'db_table': $table,
                    'db_columns': db_columns
                },
                success: function(data){
                    $result.html('').fadeIn();

                   data.forEach(function (item) {

                       switch ($table)
                       {
                           case 'city':
                               $result.prepend("<li class='collection-item search-result__li'><span class='value-to-insert'>" + item.name + "</span></li>");
                               break;
                           case 'users':
                               $.post(
                                   //'http://localhost/hiloft.ru/ajax/live_search_result',
                                   '/ajax/live_search_result',
                                   {
                                       'template': 'admin.live-search.users',
                                       'obj': item,
                                       'item_type': $item_type
                                   },
                                   function (data) {
                                       $result.prepend(data);
                                   }
                               );
                               break;
                           case 'hotels':
                               $.post(
                                   '/ajax/live_search_result',
                                   {
                                       'template': 'admin.live-search.hotels',
                                       'obj': item,
                                       'item_type': $item_type
                                   },
                                   function (data) {
                                       $result.prepend(data);
                                   }
                               );
                               break;
                       }
                   })
                }
            })
        }
    });

    // убираем фокус с input
    $input.siblings('.search-result').hover(function(){
        $input.blur(); //Убираем фокус с input
    });

    //При выборе результата поиска, прячем список и заносим выбранный результат в input
    $input.siblings('.search-result').on("click", "li" ,function(){
        var text = $(this).find('.value-to-insert').text();
        $(this).parent().siblings('.live-search-input').val(text);
        $result.fadeOut();
    })
});