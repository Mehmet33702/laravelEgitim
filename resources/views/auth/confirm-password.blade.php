
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body" >
    <div class="mb-4 text-sm text-gray-600" style="text-align: justify;">
        {{ __('Bu uygulamanın güvenli bir alanıdır. Lütfen devam etmeden önce şifrenizi onaylayın.') }}
    </div>

    <div class="mt-4 flex items-center justify-between">
        @if($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <input type="text" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </input>
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas mail_outline"></i>  {{ __('Onayla') }}
                </button>
            </div>
        </form>

    </div>
</div>
</div>
</div>
</div>
</div>



