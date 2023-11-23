@extends('template.main')
@section('title', 'Edit Hotel')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/barang">Hotel</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/hotel" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/hotel/{{ $hotel->id_hotel }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="name">Nom</label>
                                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name Barang" value="{{old('name')}}" required>
                                      @error('name')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="description">Description</label>
                                      <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="10" rows="5" placeholder="description">{{old('description')}}</textarea>
                                      @error('description')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="bedroom_name">Nom de la chambre</label>
                                      <input type="text" name="bedroom_name" class="form-control @error('bedroom_name') is-invalid @enderror" id="bedroom_name" placeholder="Nom de la chambre" value="{{old('bedroom_name')}}" required>
                                      @error('bedroom_name')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="price">Prix</label>
                                      <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" value="{{old('price')}}" required>
                                      @error('price')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="beds">Nombre de lits</label>
                                      <input type="number" min="1" name="beds" class="form-control @error('beds') is-invalid @enderror" id="beds" placeholder="beds" value="{{old('beds')}}" required>
                                      @error('beds')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="max_adult">Nombre d'adultes</label>
                                      <input type="number" min="1" name="max_adult" class="form-control @error('max_adult') is-invalid @enderror" id="max_adult" placeholder="max_adult" value="{{old('max_adult')}}" required>
                                      @error('max_adult')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="child_number">Nombre d'enfants</label>
                                      <input type="number" min="1" name="child_number" class="form-control @error('child_number') is-invalid @enderror" id="child_number" placeholder="child_number" value="{{old('child_number')}}" required>
                                      @error('child_number')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label for="attributes">Attributs</label>
                                      {{-- <textarea name="attributes" id="attributes" class="form-control @error('attributes') is-invalid @enderror" cols="10" rows="5" placeholder="attributes">{{old('attributes')}}</textarea> --}}
                                      <select name="attributes" id="attributes" class="form-control @error('attributes') is-invalid @enderror">
                                        <option value="service_de_réveil">Service de réveil</option>
                                        <option value="service_de_néttoyage">Service de néttoyage</option>
                                        <option value="petit_déjeuner">Petit déjeuner</option>
                                      </select>
                                      @error('attributes')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="statut">Statut</label>
                                      <select name="statut" id="statut" class="form-control @error('statut') is-invalid @enderror">
                                        <option value="disponible">Disponible</option>
                                        <option value="non_disponible">Non disponible</option>
                                      </select>
                                      @error('statut')
                                      <span class="invalid-feedback text-danger">{{ $message }}</span>
                                      @enderror
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                    Reset</button>
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection