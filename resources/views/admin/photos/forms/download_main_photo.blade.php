<div class="row">
    <div class="col s12">

        <form action="{{ route('hotel_photos.store') }}" method="post" enctype="multipart/form-data">

            <div class="file-field input-field">
                <div class="btn">
                    <span>Файл</span>
                    <input type="file" name="photos[]">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
            <input type="hidden" name="type_name" value="main">

            <button class="btn waves-effect waves-light" type="submit">Готово
                <i class="material-icons right">send</i>
            </button>
            {{ csrf_field() }}

        </form>

    </div>
</div>