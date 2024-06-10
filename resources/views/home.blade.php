@extends('layout.app')
@section('title', 'Brand beans | Dashboard')
@section('content')
    @role('Designer')
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h1>Welcome To The Dashboard</h1>
                </div>
            </div>
        </div>
    @endrole


    @role('Writer')
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <h1>Welcome To The Dashboard</h1>
                </div>
            </div>
        </div>
    @endrole
@endsection
