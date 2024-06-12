@extends('layouts.pages-layout')
@section('pageTitle', @isset($pageTitle) ? $pageTitle : 'Booking App')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="row">
            <div class="col">
                <h4 class=" h4 text-primary">Registered clients</h4>
            </div>
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">
                    <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline  text-center"
                        role="grid">
                        <thead>
                            <tr>
                                <th class="thead ">Name</th>
                                <th class="thead ">Phone</th>
                                <th class="thead ">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                                    <td>{{ $client->mobile_num }}</td>
                                    <td>{{ $client->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
