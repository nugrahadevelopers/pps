@unless ($breadcrumbs->isEmpty())
    <nav class="container mx-auto">
        <ol class="p-4 rounded flex flex-wrap text-sm text-gray-800">
            <li class="text-sm text-gray-500 duration-200 hover:text-gray-700">
                <i class="fa-solid fa-house h-4 w-4 mr-4"></i>
            </li>
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}"
                            class="inline-flex items-center text-sm font-medium text-gray-500 duration-200 hover:text-gray-700 hover:scale-95">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li>
                        <button type="button"
                            class="inline-flex items-center text-sm font-medium text-gray-500 duration-200 hover:text-gray-700 hover:scale-95 cursor-default">
                            {{ $breadcrumb->title }}
                        </button>
                    </li>
                @endif

                @unless ($loop->last)
                    <li class="text-gray-500 px-2">
                        /
                    </li>
                @endif
                @endforeach
            </ol>
        </nav>
    @endunless
