@props(['employer', 'width' => 100])

<img src="{{ asset($employer->logo) }}" alt="" width="{{ $width }}" class="rounded-xl" />
