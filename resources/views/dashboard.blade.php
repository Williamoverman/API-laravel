<?php use \App\Http\Controllers\fetchAPIcontroller; ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">completed</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $request = fetchAPIcontroller::getRequest('http://127.0.0.1:8000/api/logs');
            if (is_array($request)) {
                foreach ($request as $val) {
                    echo "
                    <tr>
                        <th scope='row'>" . $val['id'] . "</th>
                        <td>" . $val['request'] . "</td>
                        <td>" . $val['log_message'] . "</td>
                        </tr>
                    <tr>
                    ";
                }
            }
            ?>
            </tbody>
        </table>
        </div>        
    </div>
</div>
@endsection
