@extends('admins.layout')
@section('section')
<h1 class="pt-title-subpages noborder">{{ $page_name }}</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <livewire:admin.sizes.edit-size  :size_id='$size->id'>
    </div>
</div>

@endsection
