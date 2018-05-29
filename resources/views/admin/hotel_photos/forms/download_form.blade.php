<form action="{{ route('hotels.photos.store', $hotel->id) }}" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <p>ВНИМАНИЕ! Для наиболлее корректного отображения страницы загружаемый файл должен иметь размеры:</p>
                    <p>Ширина: {{ $photo_type->width }} px</p>
                    <p>Высота: {{ $photo_type->height }} px</p>
                </div>
            </div>
        </div>
    </div>

    <div class="file-field input-field">
        <div class="btn">
            <span>Файл</span>
            <input type="file" name="photos">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>

    <input type="hidden" name="hotel_id" value="{{$hotel->id}}">
    <input type="hidden" name="type_id" value="{{$photo_type->id}}">

    <button class="btn waves-effect waves-light" type="submit">Готово
        <i class="material-icons right">send</i>
    </button>
    {{ csrf_field() }}

</form>