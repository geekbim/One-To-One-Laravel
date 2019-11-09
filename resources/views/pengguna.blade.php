<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One To One Laravel</title>
    <link rel="stylesheet" href={{asset('/assets/css/bootstrap.css')}}>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3>One To One Laravel</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $p)
                            <tr>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->telepon->nomor_telepon}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>