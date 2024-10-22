<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Sıfırlama</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color:gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Şifrenizi mi unuttunuz?</h3>
                        <p style="text-align: justify;">Sorun değil. Sadece bize e-posta adresinizi bildirin, size yeni bir şifre seçmenize olanak sağlayacak bir şifre sıfırlama bağlantısı gönderelim.</p>
                            <!-- Session Status -->

                            @session('status')
                               <div class="card alert-success"> {{ ' e-Posta gönderilmiştir. e-Posta adresinizi kontrol ediniz.' }}</div>
                            @endsession
                            @if($errors)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                             <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label for="email">E-posta Adresi</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $request->email }}" required placeholder="E-Posta adresinizi giriniz">
                            </div>
                            <div class="form-group">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Yeni Şifrenizi giriniz">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Şifre Tekrar</label>
                                <input type="password" class="form-control" id="password_confirmation" required name="password_confirmation" placeholder="Yeni Şifreyi tekrar giriniz">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-lock"></i>   Şifre Sıfırla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



