@switch($data['item_type'])

    @case('select')
    <li class="collection-item search-result__li"><span class="value-to-insert">{{ $data['address'] }}</span></li>
    @break

    @case('link')
    <a href="{{ route('hotels.show',$data['id']) }}">
        <li class="collection-item search-result__li">
            {{ $data['city'] }} - {{ $data['address'] }})
        </li>
    </a>
    @break

@endswitch