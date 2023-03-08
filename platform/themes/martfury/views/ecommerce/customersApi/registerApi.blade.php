<div class="ps-my-account">
    <div class="container">
        <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('RegisterApi') }}">
            @csrf
            <div id="register-form" class="ps-form__content">
                <h4>{{ __('Đăng ký tài khoản') }}</h4>
                <div class="form-group">
                    <input class="form-control" name="name" id="txt-name" type="text" value="{{ old('name') }}" placeholder="{{ __('Họ tên ') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger small">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" id="txt-email" type="email" value="{{ old('email') }}" autocomplete="email" placeholder="{{ __(' Email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger small">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="txt-password" autocomplete="new-password" placeholder="{{ __('Mật khẩu') }}">
                    @if ($errors->has('password'))
                        <span class="text-danger small">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" id="txt-password-confirmation" autocomplete="new-password" placeholder="{{ __('Nhập lại mật khẩu') }}">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger small">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="hidden" name="/api/RegisterApi" value="http://localhost:8000/api/RegisterApi">
                </div>
                <div class="form-group submit">
                    <button class="ps-btn ps-btn--fullwidth" type="submit">{{ __('Đăng ký') }}</button>
                </div>

                <div class="form-group">
                    <p class="text-center">{{ __('Bạn đã có tài khoản?') }} <a href="{{ route('customer.login') }}" class="d-inline-block">{{ __('Đăng nhập') }}</a></p>
                </div>
            </div>
            <div class="ps-form__footer">
                {!! apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Botble\Ecommerce\Models\Customer::class) !!}
            </div>
        </form>
    </div>
</div>
