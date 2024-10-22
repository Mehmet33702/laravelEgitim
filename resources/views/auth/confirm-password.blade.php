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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


