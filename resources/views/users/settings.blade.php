@extends('users.layout')
@section('section')

<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <livewire:user.settings />
    </div>
</div>

@endsection
