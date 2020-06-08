@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="">
        <div class="title m-b-md text-center py-2">
          {{-- Laravel --}}
          <img src="{{asset('images/logo-truequea.png')}}" class="img-fluid w-50">
        </div>
        <p class="text-center text-white">{{ __('Solo llena estos datos') }}</p>

        <div class="formregister">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">


              <div class="col-12">
                <input id="companyname" type="text" class="form-control @error('companyname') is-invalid @enderror"
                  name="companyname" value="{{ old('companyname') }}" required autocomplete="companyname" autofocus
                  placeholder="{{ __('Nombre de empresa*') }}">

                @error('companyname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">


              <div class="col-12">
                <select id="headcompanyname" class="form-control @error('headcompanyname') is-invalid @enderror"
                  placeholder="" name="headcompanyname" value="{{ old('headcompanyname') }}" required
                  autocomplete="headcompanyname" autofocus>
                  <option selected value="">{{ __('Rubro') }}</option>
                  @foreach($headcompany as $key => $data)
                  <option>{{$data->name}}</option>

                  @endforeach
                </select>
                {{-- @php
                echo Form::select('size', ['L' => 'Large', 'S' => 'Small']);
                @endphp --}}



                @error('headcompanyname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">


              <div class="col-12">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autocomplete="name" autofocus
                  placeholder="{{ __('Nombre y apellido del dueño*') }}">

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">


              <div class="col-12">
                <input id="cellnumber" type="text" class="form-control @error('cellnumber') is-invalid @enderror"
                  name="cellnumber" value="{{ old('cellnumber') }}" required autocomplete="cellnumber" autofocus
                  placeholder="{{ __('Celular') }}">

                @error('cellnumber')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">


              <div class="col-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Correo electronico') }}">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">


              <div class="col-12">
                <input placeholder="{{ __('Password') }}" id="password" type="password"
                  class="form-control @error('password') is-invalid @enderror" name="password" required
                  autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">


              <div class="col-12">
                <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password"
                  class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <p class="text-center text-white">
              {{ __('* Campos obligatorios') }}
            </p>

            <div class="form-group row mb-0">
              <div class="col-12">
                <button type="submit" class="btn text-white bg-yellow btn-block btn-lg">
                  {{ __('Crea tu cuenta') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection