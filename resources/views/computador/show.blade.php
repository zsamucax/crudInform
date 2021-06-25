@extends('layouts.app')

@section('template_title')
    {{ $computador->name ?? 'Show Computador' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Computador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $computador->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Preço:</strong>
                            {{ $computador->preço }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
