<div @class([
    "flex items-center justify-between",
    "border-t border-white border-opacity-10 pt-6 text-white" => $isLastDiv ?? false,
    ])>
    <dt class="{{ $itemTitleClass ?? 'text-primary-200' }}">{{ $title }}</dt>
    <dt class="{{ $itemValueClass ?? 'text-secondary-300' }}">R$ {{ $value }}</dt>
</div>
