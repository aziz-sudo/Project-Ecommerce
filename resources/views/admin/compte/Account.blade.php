
@extends('layouts.admin.admin')
@section('content')
<style>
    .table-striped  th:nth-child(1), .table-striped  td:nth-child(1) {
        width: 100px;
    }
    .table-striped  th:nth-child(2), .table-striped  td:nth-child(2) {
        width: 250px;
    }
</style>
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>My Account</h3>
            <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                <li>
                    <a href="{{route('admin.index')}}">
                        <div class="text-tiny">Dashboard</div>
                    </a>
                </li>
                <li>
                    <i class="icon-chevron-right"></i>
                </li>
                <li>
                    <div class="text-tiny">my account</div>
                </li>
            </ul>
        </div>
        <div class="wg-box">
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ Auth::user()->id }}</td>
                                <td class="pname">
                                    <a href="#" class="body-title-2">{{ Auth::user()->name }}</a>
                                </td>
                                <td>{{ Auth::user()->email }}</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
        

        </div>
    </div>
</div>
@endsection


