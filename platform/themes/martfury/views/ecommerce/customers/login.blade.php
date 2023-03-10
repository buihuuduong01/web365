<div class="ps-my-account">
    <div class="container">
        <form class="ps-form--account ps-tab-root" method="POST" action="{{ route('customer.login.post') }}">
            @csrf
            <div class="ps-form__content">
                <h4>{{ __('Đăng nhập tài khoản') }}</h4>
                @if (isset($errors) && $errors->has('confirmation'))
                    <div class="alert alert-danger">
                        <span>{!! $errors->first('confirmation') !!}</span>
                    </div>
                    <br>
                @endif
                <div class="form-group">
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __(' Email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group form-forgot">
                    <input class="form-control" type="password" name="password" placeholder="{{ __('Mật khẩu') }}"><a href="{{ route('customer.password.reset') }}">{{ __('Quyên MK?') }}</a>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="ps-checkbox">
                        <input class="form-control" type="checkbox" name="remember" id="remember-me">
                        <label for="remember-me">{{ __('Lưu') }}</label>
                    </div>
                </div>
                <div class="form-group submit">
                    <button class="ps-btn ps-btn--fullwidth" type="submit">{{ __('Đăng Nhập') }}</button>
                </div>

                <div class="form-group">
                    <p class="text-center">{{ __("Bạn đã có tài khoản?") }} <a href="{{ route('customer.register') }}" class="d-inline-block">{{ __('Đăng nhập ngay') }}</a></p>
                </div>
            </div>
            <div class="ps-form__footer">
                {!! apply_filters(BASE_FILTER_AFTER_LOGIN_OR_REGISTER_FORM, null, \Botble\Ecommerce\Models\Customer::class) !!}
            </div>
        </form>
    </div>
</div>
