@if (session()->has("error"))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="flash-msg-wrap">
        <p class="flash-msg-text">
            {{session("error")}}
        </p>
    </div>
@endif