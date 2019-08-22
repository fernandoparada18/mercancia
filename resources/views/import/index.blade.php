@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('import.excel.commodities') !!}">Importar Excel</a>
      </li>
      <li class="breadcrumb-item active">Mercancia</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Importar excel de mercacia</strong>
                            </div>
                            <div class="card-body">
                                @include('flash::message')
                                <form action="{{ route('commodities.import.excel') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file">
                                    <button class="btn btn-primary">Importar Mercancia</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection