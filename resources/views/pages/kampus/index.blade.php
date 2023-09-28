@extends('app')

@section('content')
    <section class="min-vh-100">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Informasi Kampusku</h1>
            </div>

            <div class="row">
                <div class="mx-auto col-md-12 col-lg-8">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama kampus</td>
                            <td>{{ $data['kampus']['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $data['kampus']['alamat'] }}</td>
                        </tr>
                        <tr>
                            <td>Website Resmi</td>
                            <td>{{ $data['kampus']['web'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
