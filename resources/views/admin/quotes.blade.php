@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                <h4 class="heading">Quotes</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                            
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                            <th style="width:5%">#</th>
                                            <th style="width:20%">Name</th>
                                            <th style="width:15%">Address</th>
                                            <th style="width:20%">Email</th>
                                            <th style="width:15%">Phone</th>
                                            <th style="width:20%"></th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Saphal Ghimire</td>
                                                <td>Dholahity</td>
                                                <td>gsaphal99@gmail.com</td>
                                                <td>9810124917</td>
                                                <td><button class="btn btn-success btn-view"><i class="fas fa-eye"></i> View</button></td>

                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
                
            </div>

@endsection