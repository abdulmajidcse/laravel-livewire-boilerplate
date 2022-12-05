@props(['bgColor', 'text' => 'Please wait...', 'preloader' => false])
<div>
    <style>
        #loadingSpinner {
            height: 100vh;
            width: 100%;
            transition: height .2s linear;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 9999;
        }
    </style>
    <div id="loadingSpinner"
        class="{{ $preloader ? 'preloader' : '' }} d-flex flex-column justify-content-center align-items-center"
        style="background: {{ $bgColor ?? 'rgb(144 147 153 / 42%)' }}">
        <button class="btn btn-danger" type="button">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            {{ $text }}
        </button>
    </div>
</div>
