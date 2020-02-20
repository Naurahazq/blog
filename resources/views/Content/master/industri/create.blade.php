@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="pt-3 mb-3">
                            <h5 class="text-muted font-weight-bold">
                                Form Industri
                            </h5>
                        </div>
                        <form action="{{route('master.kirim.data.baru.industri')}}" method="post">
                            @csrf
                            <div class="form-group">
                                    <label for="nama_industri">
                                        Nama Industri
                                </label>
                                <input type="text" 
                                       name="nama_industri" 
                                       value="" 
                                       placeholder="nama industri" 
                                       class="form-control"  
                                       id="">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pimpinan">
                                        Nama Pimpinan
                                </label>
                                <input type="text" 
                                       name="nama_pimpinan" 
                                       value="" 
                                       placeholder="nama pimpinan" 
                                       class="form-control"  
                                       id="">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">
                                        Alamat
                                </label>
                                <input type="text" 
                                       name="alamat" 
                                       value="" 
                                       placeholder="alamat" 
                                       class="form-control"  
                                       id="">
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email
                                </label>
                                <input type="text" 
                                       name="email" 
                                       value="" 
                                       placeholder="email" 
                                       class="form-control"  
                                       id="">
                                </div>
                            <div class="pt-3 mb-3">
                                <button type="submit"
                                        class="btn btn-outline-info">
                                    Save
                                </button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection