@extends('layouts.app')

@section('content')
    @push('style')
        @include('components.styles.datatables')
    @endpush
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Produk</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Eweuh Home</a></li>
                <li class="breadcrumb-item">Produk</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Produk</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                @can('create_product')
                    <button type="button" class="btn btn-primary my-3" onclick="create()" >Tambah Produk</button>
                @endcan
                <table class="table table-hover table-striped table-border" id="table">
                    <thead>
                        @if(Auth::user()->getRoleNames()[0] == 'User')
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>harga</th>
                    </thead>
                    @else
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Tindakan</th>
                    </thead>
                @endif

                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <!-- /.card -->
        @include('components.modals.product.create')
        @include('components.modals.product.edit')
      </section>
      <!-- /.content -->
      @push('script')
        @include('components.scripts.datatables')
        @include('components.scripts.sweetalert')
        @include($script)
      @endpush
@endsection
