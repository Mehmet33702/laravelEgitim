<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Girişi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color:gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Giriş Yapınız</h3>
                        @if($errors)
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">E-Posta</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-Posta adresinizi giriniz">
                            </div>
                            <div class="form-group">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi giriniz.">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Giriş</button>
                        </form>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('password.request') }}" class="text-decoration-none">
                                <i class="fas fa-unlock-alt"></i> Şifremi Unuttum
                            </a>
                            <a href="{{ route('register') }}" class="text-decoration-none">
                                <i class="fas fa-user-plus"></i> Yeni Hesap Oluştur
                            </a>
                        </div>
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
