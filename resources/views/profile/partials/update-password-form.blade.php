<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>
    <div class="card-body">
        @if($errors)
        <ul>
            @foreach ($errors->all() as $error)
        <li> <div class="bg-danger"> {{ $error }} </div></li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password">__('Current Password')</label>
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password">
        </div>

        <div>
            <label for="update_password_password">__('New Password')</label>
            <input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password">

        </div>

        <div>
            <label for="update_password_password_confirmation">__('Confirm Password')</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password">
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
