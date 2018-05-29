$(document).ready(function() {
   $('select').material_select();

   /*
    var $crop = $('.img-crop-container__crop');

    var img = new Image();
    img.src = $('.img').attr('src');

    var originalWidth = img.width;
    var originalHeight = img.height;
    var imgWidth = $('.img').width();
    var ratio = originalWidth / imgWidth;
    var cropOriginalWidth = $crop.width();
    var cropOriginalHeight = $crop.height();

    $crop.css({'width': cropOriginalWidth / ratio});
    $crop.css({'height': cropOriginalHeight / ratio});

    function getCropData(crop) {
        var data = [];

        var width = crop.css('width');
        data['sw'] = width.replace('px', '') * ratio;

        var height = crop.css('height');
        data['sh'] = height.replace('px', '') * ratio;

        var sx = crop.css('left');
        data['sx'] = sx.replace('px', '') * ratio;

        var sy = crop.css('top');
        data['sy'] = sy.replace('px', '') * ratio;

        console.log(data);
    }

    $crop.draggable({
        cursor: 'crosshair',
        containment: '.img-crop-container',
        scroll: false,
        stop: function () {
            var sx = $(this).css('left');
            sx = sx.replace('px', '') * ratio;

            var sy = $(this).css('top');
            sy = sy.replace('px', '') * ratio;

            var dw = $crop.css('width');
            dw = dw.replace('px', '') * ratio;

            var dh = $crop.css('height');
            dh = dh.replace('px', '') * ratio;

            var $form = $('form');

            $form.find('.input_sx').val(sx);
            $form.find('.input_sy').val(sy);
            $form.find('.input_dw').val(dw);
            $form.find('.input_dh').val(dh);

            getCropData($crop)
        }
    });

    $crop.css({'position': 'absolute'});

    $('.select_type-id li').on('click', function () {
        var typeName = $(this).find('span').html();

        $.ajax({
            type: 'post',
            url: "http://localhost/hiloft.ru/ajax/make_img_crop",
            data: {
                'type_name': typeName
            },
            success: function (data) {
                width = data.width;
                height = data.height;

                $crop.css({'width': width / ratio, 'height': height / ratio});
                $crop.resizable({
                    aspectRatio: width / height,
                    containment: '.img-crop-container',
                    stop: function () {
                        getCropData($crop)
                    }
                });
            }
        });
    });*/

    /*
    Превью изображения перед загрузкой
     */
    $('.input__img').change(function () {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.input-img-preview').attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log('ошибка, не изображение');
            }
        } else {
            console.log('хьюстон у нас проблема');
        }

        var form = $(this).parents().find('.form-photos');
        formData = new FormData(form);
        var inputFile = $('input[type=file]');
        inputFile.each(function (i) {
            formData.append('image', i);
        });
        //formData.append('image', $('input[type=file]').files[0]);

        $.ajax({
            type: 'post',
            url: 'http://localhost/hiloft.ru/ajax/photo_store',
            dataType: 'text',
            data: formData,
            contentType: false, // важно - убираем форматирование данных по умолчанию
            processData: false, // важно - убираем преобразование строк по умолчанию
            success: function (data) {
                console.log(data);
            }
        })

        /*$.ajax({
            type: 'post',
            url: 'http://localhost/hiloft.ru/ajax/photo_store',
            data:
                {
                    'photo': photo
                },
            success: function (data) {
                console.log(photo);
            }
        });*/
    });

});