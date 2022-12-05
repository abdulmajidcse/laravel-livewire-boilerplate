@props(['status'])

@if ($status)
    <div
        {{ $attributes->merge(['class' => 'alert alert-info alert-dismissible fade show bg-purple', 'role' => 'alert']) }}>
        {{ $status }}
        <button type="button" class="close text-white" style="opacity: 1;" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
