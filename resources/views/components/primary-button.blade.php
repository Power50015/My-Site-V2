<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg btn-primary waves-effect waves-light']) }}>
    {{ $slot }}
</button>
