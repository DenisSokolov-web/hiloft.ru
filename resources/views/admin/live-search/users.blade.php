@switch($data['item_type'])

    @case('select')
        <li class="collection-item search-result__li"><span class="value-to-insert">{{ $data['name'] }}</span> ({{ $data['email'] }})</li>
        @break

    @case('link')
        <a href="{{ route('users.show', $data['id']) }}"><li class="collection-item search-result__li"><span class="value-to-insert">{{ $data['name'] }}</span> ({{ $data['email'] }})</li></a>
        @break

@endswitch