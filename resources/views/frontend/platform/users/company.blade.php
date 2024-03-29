@extends('frontend.platform.main')

@section('title', 'Company Profile')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-company-profile.css') }}">
@endsection

@section('content')
    <main class="company-profile">
        <div class="dashboard-header">
            <h1 class="dashboard-header-title">Company Profile</h1>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        @include('frontend.partials._messages')

        <div class="dashboard-company-content">
            <form action="{{ route('company.edit') }}" method="POST" class="dashboard-form dashboard-form-error">
                @csrf
                @method('PUT')
                <div class="form-all-content">
                    <div class="dashboard-form-block">
                        <label>Name</label>
                        <input type="text" name="name" value="{{  $user->company->name}}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('name') }}
                    </div>

                    <div class="dashboard-form-block">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $user->company->email }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('email') }}
                    </div>

                    <div class="dashboard-form-block">
                        <label>Business Phone</label>
                        <input type="text" name="business_phone" value="{{ $user->company->business_phone }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('business_phone') }}
                    </div>
                    <div class="dashboard-form-block">
                        <label>Mobile Phone</label>
                        <input type="text" name="mobile_phone" value="{{ $user->company->mobile_phone }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('mobile_phone') }}
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label>Date Format</label>
                        <select name="date_format">
                            @foreach($user->company->getDateFormats() as $formatKey => $formatVal)
                                <option value="{{ $formatKey }}" {{ $user->company->date_format == $formatVal ? 'selected' : '' }}>
                                    {{ $formatVal }}
                                </option>
                            @endforeach
                        </select>
                        <img class="first-img" src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('date_format') }}
                    </div>
                    <div class="dashboard-form-block">
                        <div class="base-select-block d-flex justify-content-between align-items-center">
{{--                            <div class="position-relative ">--}}
{{--                                <label>Base Currency</label>--}}
{{--                                <select name="base_currency" class="base-select">--}}
{{--                                    @foreach($countries->unique('currency')->sortBy('currency_code') as $country)--}}
{{--                                        <option value="{{ $country->id }}">                                            --}}
{{--                                            {{ $country->currency_code . ' - ' . $country->currency  }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                            </div>--}}
                            <div class="position-relative">
                                <label>Standard Rate<span class="standart-rate"> / hr</span></label>
                                <i class="symbol-currency">&euro;</i>
                                <input type="text" name="standard_rate" class="input-rate pl-3"  placeholder="0.00" value="{{ $user->company->standard_rate }}">
                                <span>/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('standard_rate') }}
                    </div>
                    <div class="dashboard-form-block">
                        <label>VAT Number</label>
                        <input type="text" name="vat" value="{{ $user->company->vat }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('vat') }}
                    </div>
                </div>
                <div class="form-all-content">
                    <div class="dashboard-form-block">
                        <label>Address</label>
                        <input type="text" name="street" placeholder="Street Address" value="{{ $user->company->street }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('street') }}
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <input type="text" name="city" placeholder="City" value="{{ $user->company->city }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('city') }}
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <input type="text" name="state" placeholder="State" value="{{ $user->company->state }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('state') }}
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        @include('frontend.platform.partials._countries', [
                                    'selectedCountry' => $user->company->country_id,
                                    'country' => 'country_id'
                                ])
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('country') }}
                    </div>
                    <div class="dashboard-form-block">
                        <label>ZIP Code</label>
                        <input type="text" name="zip" value="{{ $user->company->zip }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('zip') }}
                    </div>
                    <div class="dashboard-form-block">
                        <label>Bank Account</label>
                        <input type="text" name="bank_account" value="{{ $user->company->bank_account }}">
                    </div>
                    <div class="error-message text-danger">
                        {{ $errors->first('bank_account') }}
                    </div>
                    <div class="dashboard-form-block save-block">
                        <input type="submit" value="save" class="dashboard-save">
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection