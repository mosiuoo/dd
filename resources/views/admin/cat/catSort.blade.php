@extends('admin.adminlayout')
@section('page_title')
    {{__("Product categories node")}}
    -
@endsection
@section('content')
    <div class="container">

        <h1>
                {{__('Sort product category')}}
        </h1>
        @include('starter-kit::component.err')
        <form method="post"
            action="#" >
            @csrf
            <ol class="menu-manage" id="cat-sort">
                {!!\Xmen\StarterKit\Helpers\showCatNode($cats) !!}
            </ol>
            <input type="hidden" id="sorted" value="[]"/>
            <input type="hidden" id="cat-sort-store" value="{{route('admin.cat.sortStore')}}"/>
            <div class="btn btn-primary" id="cat-sort-save">
                {{__("Save sort")}}
            </div>
        </form>
    </div>
@endsection
