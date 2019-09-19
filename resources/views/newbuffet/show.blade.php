@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">newbuffet {{ $newbuffet->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/newbuffet') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/newbuffet/' . $newbuffet->id . '/edit') }}" title="Edit newbuffet"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('newbuffet' . '/' . $newbuffet->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete newbuffet" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $newbuffet->id }}</td>
                                    </tr>
                                    <tr><th> NameBuffe </th><td> {{ $newbuffet->NameBuffe }} </td></tr><tr><th> Position </th><td> {{ $newbuffet->position }} </td></tr><tr><th> Price </th><td> {{ $newbuffet->price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
