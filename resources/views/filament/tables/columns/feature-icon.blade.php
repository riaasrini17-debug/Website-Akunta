@php
    $record = $getRecord();

    $icon = $record->icon ?: 'bi-receipt';

    $color = preg_match('/^#[0-9a-fA-F]{6}$/', $record->icon_color ?? '')
        ? $record->icon_color
        : '#FF4B12';
@endphp

<div style="
    display: flex;
    align-items: center;
    justify-content: center;
">
    <div style="
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: {{ $color }}15;
        color: {{ $color }};
        font-size: 21px;
    ">
        <i class="bi {{ $icon }}"></i>
    </div>
</div>