<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="card card-info">
    @component('components.card-header')
        @slot('title', 'Criando pessoa')
    @endcomponent
    <div class="card-body pb-2">
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Nome')
                @slot('name', 'nome')
                @slot('value', $pessoa->nome)
                @slot('required', true)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-12')
                @slot('label', 'Endereço')
                @slot('name', 'endereco')
                @slot('value', $pessoa->endereco)
                @slot('required', true)
            @endcomponent
        </div>
        <div class="form-row">
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'E-mail')
                @slot('name', 'email')
                @slot('value', $pessoa->email)
            @endcomponent
            @component('components.form-input')
                @slot('column_size', 'col-md-6')
                @slot('label', 'Telefone')
                @slot('name', 'telefone')
                @slot('value', $pessoa->telefone)
                @slot('input_class', 'phone-mask')
            @endcomponent
        </div>
    </div>
</div>

<div class="text-right mt-3">
    @include('components.submit-btn')
    @include('components.cancel-btn', ['href' => route('pessoa.pessoa.index')])
</div>
