<div style="display: none" x-show="isVisible" x-collapse >
    <div {{ $attributes->merge(['class' => 'px-6 pb-4 pt-2']) }}>
        {{ $slot }}
    </div>
</div>
