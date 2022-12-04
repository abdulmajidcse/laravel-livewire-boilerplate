@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'invalid-feedback text-danger d-block', 'role' => 'alert']) }}>
        <strong>
            @foreach ((array) $messages as $message)
                {{ $message . ' ' }}
            @endforeach
        </strong>
    </div>
@endif
