

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Kaydolduğunuz için teşekkürler! Başlamadan önce, size az önce e-postayla gönderdiğimiz bağlantıya tıklayarak e-posta adresinizi doğrulayabilir misiniz? E-postayı almadıysanız, size memnuniyetle başka bir tane göndereceğiz.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Kayıt sırasında verdiğiniz e-posta adresine yeni bir doğrulama bağlantısı gönderildi.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Doğrulama E-postasını Yeniden Gönder') }}
                </button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Çıkış') }}
            </button>
        </form>
    </div>


