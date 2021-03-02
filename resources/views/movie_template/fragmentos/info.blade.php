@if (Session::has('info'))
    <div class="alert alert-info">
        <button class="close" type="button" data-dismis="alert">
            &times;
        </button>
        {{ Session::get('info') }}
    </div>
@endif