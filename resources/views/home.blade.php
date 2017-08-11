@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      @include('admin.sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @if(Auth::user()->jabatan == 'ADMIN')
                    <div class="panel-body">
                      Halaman Admin<br>
                        Hello {{ Auth::user()->name }} You are logged in!<br>
                        Your Username :{{ Auth::user()->username }}<br>
                        Your Email :{{ Auth::user()->email }}
                      </div>
                @else
                    <div class="panel-body">
                      Halaman Member
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
