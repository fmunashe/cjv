<?php
/**
 * Author: Farai Zihove
 * Mobile: +263778234258
 * Email: zihovem@gmail.com
 * Date: 13/7/2023
 * Time: 15:03
 */
?>
@extends('layouts.app')
@section('content')

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Sales Call Summary</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Sales Call Summary</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Sales Call Summary</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-white">All Sales Call Summary </h4>
                            <a href="{{route('salesCallSummary.create')}}" class="btn btn-primary">+ Add new</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Captured By</th>
                                        <th>Date</th>
                                        <th>Company</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sales as $sale)
                                        <tr>
                                            <td>{{$sale->id}}</td>
                                            <td>{{$sale->user->name??""}}</td>
                                            <td>{{$sale->date}}</td>
                                            <td>{{$sale->company}}</td>
                                            <td>{{$sale->contact_person}}</td>
                                            <td>{{$sale->email_address}}</td>
                                            <td>{{$sale->phone_number}}</td>
                                            <td>
                                                <a href="{{route('salesCallSummary.show',$sale->id)}}"
                                                   class="btn btn-sm btn-success"><i
                                                        class="la la-eye"></i></a>
                                                <a href="{{route('salesCallSummary.edit',$sale->id)}}"
                                                   class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                   data-target="#confirmModal_{{$sale->id}}"><i
                                                        class="la la-trash-o"></i></a>
                                                @include('salesCallSummary.confirm')
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
