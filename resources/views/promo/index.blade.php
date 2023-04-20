@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row end-0 align-items-end">
            <form class="row g-3 justify-content-end">
                <div class="col-auto ">
                    {{-- <label for="promo_code" class="sr-only">Promo Code</label> --}}
                    <input type="text" class="form-control" id="promo_code" placeholder="Promo Code">
                </div>
                <div class="col-auto">
                    {{-- <label for="plu_code" class="sr-only">Plu Code</label> --}}
                    <input type="text" class="form-control" id="plu_code" placeholder="Plu Code">
                </div>
                <div class="col-auto">
                    {{-- <label for="name" class="sr-only">Name</label> --}}
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger mb-3">Submit</button>
                </div>
            </form>
        </div>
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">PROMO CODE</th>
                        <th scope="col">PLU CODE</th>
                        <th scope="col">NAME</th>
                        <th scope="col">START DATE</th>
                        <th scope="col">END DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>99999</td>
                        <td>3456789</td>
                        <td>PROMO BULANAN</td>
                        <td>07-08-97</td>
                        <td>07-08-97</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
