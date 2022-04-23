@extends('layouts.basic')

@section('content-index')

<body>
    <form action={{ route('admin.store.store') }} method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $store->id ?? '' }}">
        @csrf

        <nav class="manager">
            <ul>
                <li><a href="{{ route('admin.store.index') }}">Cadastro de Lojas</a></li>

                <li><a href="{{route ('admin.shop.index')}}">Cadastros de Cashback</a></li>

                <li><a href="{{ route ('admin.store.show') }}">Lojas Cadastradas</a></li>

                <li><a href="{{ route ('admin.shop.show') }}">Cashbacks Cadastrados</a></li>
            </ul>
        </nav>

        <div class="main-login">

            <div class="right-login">

                <div class="textfield">
                    <input type="text" name="name" value="{{ $stores->name ?? old('name') }}" placeholder="Loja">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>

                <div class="textfield">
                    <input type="text" name="link" value="{{ $stores->cashback ?? old('cashback') }}" placeholder="cashback">
                    {{ $errors->has('link') ? $errors->first('cashback') : '' }}
                </div>

                <button type="submit" class="btn-login">Cadastrar</button>

                @if (session('success'))
                <p class="message">{{ session('success') }}</p>
                @endif
            </div>
        </div>
        </div>
    </form>
</body>
@endsection