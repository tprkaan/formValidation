<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-4">
        @if(Session::has('success'))
        <div class="alert alert-success mt-3">
            {{Session::get('success')}}
        </div>
        @endif

        {{--@if(Session::has('errors'))
        <ul>
            @foreach(Session::get('errors')->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif--}}

        <form action="{{route('msg.store')}}" method="POST" class="mt-5">
            @csrf
        <div class="form-group">
                <label for="exampleFormControlInput1">Ad Soyad</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name">
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>{{$message}}</strong>
            </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">E-Posta Adresi</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email">
                @error('email')
                <div class="alert alert-danger" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Telefon</label>
                <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="5XXXXXXXXX">
                @error('phone')
                <div class="alert alert-danger" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Başlık</label>
                <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title">
                @error('title')
                <div class="alert alert-danger" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Mesaj</label>
                <textarea class="form-control" name="message" id="message" rows="3">{{ old('message') }}</textarea>
                @error('message')
                <div class="alert alert-danger" role="alert">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="submit" value="Kaydet" class="btn btn-success">
        </div>
        </form>
        </div>
    </div>
</body>

</html>
