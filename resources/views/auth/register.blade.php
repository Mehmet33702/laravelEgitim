<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelik Kayıt Formu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color:gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Üye Ol</h3>
                    </div>
                    <div class="card-body">
                        @if($errors)
                        <ul>
                            @foreach ($errors->all() as $error)
                           <li> <div class="bg-danger"> {{ $error }} </div></li>
                            @endforeach
                        </ul>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name">Ad Soyad</label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Adınız ve Soyadınızı giriniz">
                            </div>
                            <div class="form-group">
                                <label for="email">E-Posta Adresi</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="E-Posta adresinizi giriniz">
                            </div>
                            <div class="form-group">
                                <label for="password">Şifre</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Şifrenizi giriniz">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Şifreyi Onayla</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Şifrenizi tekrar giriniz">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Kayıt</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="d-block"><i class="fas fa-user-alt"></i> Zaten Hesabınız Var Mı? Giriş Yapınız.</a>
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
