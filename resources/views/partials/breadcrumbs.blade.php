@php
  $items = $items ?? [];
  $lastIndex = count($items) - 1;
@endphp

<nav class="mb-6" aria-label="Breadcrumb">
  <ol class="flex flex-wrap items-center gap-1 text-sm text-slate-500">
    @foreach ($items as $index => $item)
      @php $isLast = $index === $lastIndex; @endphp
      @if (!$isLast && isset($item['url']) && $item['url'])
        <li>
          <a href="{{ $item['url'] }}" class="hover:text-teal-700 hover:underline">{{ $item['label'] }}</a>
        </li>
      @else
        <li class="text-slate-700 font-medium">{{ $item['label'] }}</li>
      @endif

      @if (!$isLast)
        <li aria-hidden="true" class="px-1 text-slate-400">/</li>
      @endif
    @endforeach
  </ol>
</nav>
