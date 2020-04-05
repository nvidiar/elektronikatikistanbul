<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div>
        <h3 style="text-align: center">Hoş geldin, hayırlı işler HÇ</h3>
    </div>
    <br> <br> <br>
    <div>
        <div class="row">
            <h3>Yeni kayıt oluştur</h3>
        </div>
        <div class="row">



            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <td>
                            <input type="text" name="product" placeholder="Ürün adı"></td>
                        <td>
                            <input type="text" name="price" placeholder="Fiyat"></td>
                        <td>
                        <button class="btn btn-primary" type="submit">Oluştur</button></td>
                    </form>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <h3>Fiyatlandırma</h3>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ürün Adı</th>
                <th scope="col">Fiyat</th>
                <th>Oluşturulma Zamanı</th>
                <th>Düzenleme Zamanı</th>
                <th>Operasyon</th>
            </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td> {{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->created_at->diffForHumans()}}</td>
                        <td>{{$product->updated_at->diffForHumans()}}</td>
                        <td><a class="btn btn-primary" href="{{route('fiyatDuzenle',$product->id)}}" role="button">Düzenle</a></td>
                        <td><a class="btn btn-primary" href="{{route('sil',$product->id)}}" role="button">Sil</a></td>
                    </tr>
            @empty
                <tr>
                    <th style="text-align:center" colspan="7" scope="row">Yeni bir kayıt yapmadın HÇ</th>

                </tr>
                    @endforelse
            </tbody>
        </table>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
