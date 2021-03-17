<div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
    @foreach ($topNavLinks as $item)
        <a href="{{ url('/'.$item->slug) }}"
           class="font-medium text-gray-500 hover:text-gray-900">{{ $item->label }}</a>
    @endforeach
</div>
