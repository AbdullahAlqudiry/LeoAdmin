<div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">لوحة التحكم</a>
        </li>

        @foreach($links as $index => $link)
            <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                <a href="{{ $link['url'] }}">{{ $link['title'] }}</a>
            </li>
        @endforeach
    </ol>
</div>