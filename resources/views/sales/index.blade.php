@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h2>SALES BY SBU</h2>
            <table class="table table-light table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SBU</th>
                        <th scope="col">TRX</th>
                        <th scope="col">SALES</th>
                        <th scope="col">QUATITY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>99999</td>
                        <td>3456789</td>
                        <td>Rp. 100</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-5">
            <h2>SALES BY HOURS</h2>
            <table class="table table-light table-bordered">
                <thead>
                    <tr>
                        <th scope="col">JAM</th>
                        <th scope="col">TRX</th>
                        <th scope="col">SALES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>99999</td>
                        <td>3456789</td>
                        <td>Rp. 100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
