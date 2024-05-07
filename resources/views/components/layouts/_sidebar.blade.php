@foreach (menu(getJabatanRole()) as $item)
@if (cekChild($item->menu->id))
<li class="">
    <a class="has-arrow waves-effect waves-dark" href="{{ url($item->menu->url) }}" aria-expanded="false">
        <i class="{{ $item->menu->icon }}"></i><span class="hide-menu">{{ $item->menu->menu }}</span>
    </a>
    <ul aria-expanded="false" class="collapse top_ul">
        @foreach (menuChild($item->menu->id, getJabatanRole()) as $value)

        @if ($value->menu->is_counter==1)
        <li><a href="{{ url($value->menu->url) }}">{{ $value->menu->menu}} <span
                    class="badge bg-success badge-xs float-end"
                    wire:poll.3s>{{ getTotalStatistik($value->menu->menu,"is_read",0,Auth::user()->id) }}</span></a>
        </li>
        @else
        <li><a href="{{ url($value->menu->url) }}">{{ $value->menu->menu}}</a></li>
        @endif

        @endforeach
    </ul>
</li>
@else
<li class="">
    <a class="waves-effect waves-dark" href="{{ url($item->menu->url) }}" aria-expanded="false">
        <i class="{{ $item->menu->icon }}"></i><span class="hide-menu">{{ $item->menu->menu }}</span>
    </a>
</li>
@endif
@endforeach