<form action="{{ route('hotels.photos.update', [$hotel->id, $photo->id]) }}" method="post" enctype="multipart/form-data">

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

    <button class="btn waves-effect waves-light" type="submit">Готово
        <i class="material-icons right">send</i>
    </button>

    <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}

</form>