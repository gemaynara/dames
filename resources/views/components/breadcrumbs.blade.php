@unless ($breadcrumbs->isEmpty())
    <ol  class="breadcrumb bg-none px-0 mx-0">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item font-weight-bold "><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item font-weight-bold active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>
@endunless
