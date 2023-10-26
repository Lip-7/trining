@extends('layouts.app')
@section('content')
    <h1 class="text-center">Modifica il tuo appartamento: {{ $apartment->name }}</h1>
    <div class="container">
        <form action="{{ route('apartments.update', $apartment) }}" method="POST" class="editForm">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" value="{{ old('name', $apartment->name) }}" placeholder="Inserisci il nome del tuo annuncio" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" >
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rooms" class="form-label">Camere</label>
                <input type="number" value="{{ old('rooms', $apartment->rooms) }}" placeholder="Inserisci il numero di stanze" class="form-control @error('rooms') is-invalid @enderror" id="rooms" name="rooms">
                @error('rooms')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="beds" class="form-label">Letti</label>
                <input type="number" value="{{ old('beds', $apartment->beds) }}" placeholder="Inserisci il numero di posti letto" class="form-control @error('beds') is-invalid @enderror" id="beds" name="beds">
                @error('beds')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bathrooms" class="form-label">Bagni</label>
                <input type="number" value="{{ old('bathrooms', $apartment->bathrooms) }}" placeholder="Inserisci il numeri di bagni" class="form-control @error('bathrooms') is-invalid @enderror" id="bathrooms" name="bathrooms">
                @error('bathrooms')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mq" class="form-label">Mq</label>
                <input type="text" value="{{ old('mq', $apartment->mq) }}" placeholder="Inserisci la grandezza dell'abitazione in metri quadri" class="form-control @error('mq') is-invalid @enderror" id="mq" name="mq">
                @error('mq')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 position-relative">
                <label for="address" class="form-label">Indirizzo</label>
                <input type="text" value="{{ old('address', $apartment->address) }}" placeholder="Inserisci l'indirizzo dell'appartamento" class="userAddressInput form-control @error('address') is-invalid @enderror" id="address" name="address">
                <input type="hidden" name="coordinates" id="coordinates" value="">
                <ul class="w-100 userAddressHints p-1"></ul>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="text" value="{{ old('photo', $apartment->photo) }}" placeholder="Inserisci il nome del tuo annuncio" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="visible" class="form-label">Visibile</label>
                <input type="text" value="{{ old('visible', $apartment->visible) }}" placeholder="Inserisci il nome del tuo annuncio" class="form-control @error('visible') is-invalid @enderror" id="visible" name="visible">
                @error('visible')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 services d-flex gap-3 flex-wrap btn-group">
                @foreach ($services as $service)
                <div class="d-flex justify-content-center flex-column border border-2 p-2 rounded form-check">
                    <input type="checkbox" class="" id="{{$service->id}}" value="{{$service->id}}" name="services[]" {{in_array($service->id, $checkedServices) ? 'checked' : ''}} >
                    <label for="{{$service->id}}">{{$service->name}}</label>
                </div>
                @endforeach
            </div>
            <div class="button d-flex justify-content-end py-3">
                <input type="submit" class="btn btn-primary" value="Modifica">
            </div>
        </form>
    </div>
    {{-- <script type="module" src="{{ asset('js/tomseach.js') }}"></script> --}}
@endsection
