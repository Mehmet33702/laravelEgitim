<div class="mb-4 text-sm text-gray-600">
    {{ __('Şifrenizi mi unuttunuz? Sorun değil. Sadece bize e-posta adresinizi bildirin, size yeni bir şifre seçmenize olanak sağlayacak bir şifre sıfırlama bağlantısı gönderelim.') }}
</div>

<!-- Session Status -->

@session('status')
    {{ 'e-mail gönderilmiştir. e-mail adresinizi kontrol ediniz.' }}
@endsession
@if($errors)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email">e-Mail</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
    </div>

    <div class="flex items-center justify-end mt-4">
        <button>
            {{ __('e-Posta Şifre Sıfırlama Bağlantısı') }}
        </button>
    </div>
</form>
