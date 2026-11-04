@extends('layouts.admin')

@section('title', 'Scoxe - Chartjs')

@section('content')
<div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Chartjs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Chartjs</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Line Chart</h4>
                                    <p class="card-subtitle mb-4">Example of line chart chart js.</p>

                                    <canvas id="lineChart"></canvas>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Bar Chart</h4>
                                    <p class="card-subtitle mb-4">Example of bar chart chart js.</p>

                                    <canvas id="barChart"></canvas>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Area chart</h4>
                                    <p class="card-subtitle mb-4">Example of line area chart js.</p>

                                    <canvas id="areaChart"></canvas>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Pie chart</h4>
                                    <p class="card-subtitle mb-4">Example of line pie chart js.</p>

                                    <canvas id="pieChart"></canvas>
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection

@section('scripts')
<!-- Chart Js-->
<script src="{{ asset('admin-assets/plugins/chart-js/chart.min.js') }}"></script>
<!-- Chart Custom Js-->
<script src="{{ asset('admin-assets/pages/chartjs-demo.js') }}"></script>
@endsection
