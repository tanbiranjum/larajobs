@if(session()->has('message'))
<div class="fixed top-0 transform bg-laravel text-white px-48 py-3 mx-auto">
    {{session('message')}}
</div>
@endif
