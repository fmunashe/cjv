<?php
/**
 * Author: Farai Zihove
 * Mobile: +263778234258
 * Email: zihovem@gmail.com
 * Date: 13/7/2023
 * Time: 15:04
 */
?>
@extends('layouts.app')
@section('content')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Sales Call Summary Details</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('salesCallSummary.index')}}">Sales Call Summary</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Sales Call Summary Details</a></li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-xl-3 col-xxl-4 col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <img class="img-fluid" src="{{asset('images/logo.jpeg')}}" alt="">
                    <div class="card-body">
                        <h4 class="mb-0">{{$salesCallSummary->company}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">About {{$salesCallSummary->company}} </h2>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Date</strong>
                                <span class="mb-0">{{$salesCallSummary->date}}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Contact Person</strong>
                                <span class="mb-0">{{$salesCallSummary->contact_person}}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Email Address</strong>
                                <span class="mb-0">{{$salesCallSummary->email_address}}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Phone Number</strong>
                                <span class="mb-0">{{$salesCallSummary->phone_number}}</span>
                            </li>
                            <li class="list-group-item d-flex px-0 justify-content-between">
                                <strong>Captured By</strong>
                                <span class="mb-0">{{$salesCallSummary->user->name??""}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer pt-0 pb-0 text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-xxl-8 col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="text-primary">Notes</h4>
                <ul class="list-group mb-3 list-group-flush">
                    <li class="list-group-item border-0 px-0">{{$salesCallSummary->notes}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
