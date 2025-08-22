@if (session('message'))
<div class="alert alert-success bg-orange-5000 border border-orange-400 text-orange-700 px-4 py-3 rounded relative"
    role="alert">
    {{ session('message') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
    role="alert">
    {{ session('success') }}
</div>">
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
    {{ $error }}
</div>
@endforeach
@endif