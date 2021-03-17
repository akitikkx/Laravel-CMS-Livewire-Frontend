<div class="px-2 pt-2 pb-3 space-y-1">
    @foreach ($topNavLinks as $item)
        <a href="{{ url('/'.$item->slug) }}"
           class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">{{ $item->label }}</a>
    @endforeach
</div>
