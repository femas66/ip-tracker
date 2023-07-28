<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks To ipgeolocation.io</title>
</head>
<body>
    <div style="width: 150px; height: 150px; text-align: center; justify-content: center; background-color: rgb(214, 214, 214);">
        <h1>Logonya femas</h1>
    </div>
    <form action="">
        <label for="ip">Masukan ip : </label>
        <input type="text" name="ip" id="ip" placeholder="186.123.125.153" autofocus>
    </form>
    <hr>
    @if (!@empty($result))
        @if (!empty($result->message))
            <h3>IP tidak ditemukan</h3>
        @else
        <table border="1">
            <tr>
                <th>Ip</th>
                <td>{{$result->ip}}</td>
            </tr>
            <tr>
                <th>Bendera negara</th>
                <td><img src="{{$result->country_flag}}" alt="" srcset="" style="border: 1px solid black;"></td>
            </tr>
            <tr>
                <th>Negara</th>
                <td>{{$result->country_name}}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{$result->state_prov}}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>{{$result->city}}</td>
            </tr>
            <tr>
                <th>ZIP code</th>
                <td>{{$result->zipcode}}</td>
            </tr>
            <tr>
                <th>Kode telepon</th>
                <td>{{$result->calling_code}}</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>{{$result->longitude}}</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>{{$result->latitude}}</td>
            </tr>
            <tr>
                <th>ISP</th>
                <td>{{$result->isp}}</td>
            </tr>
        </table>
        @endif
    @endif
    <center style="margin-bottom: 1px;">
        <small>Terima kasih : https://ipgeolocation.io/</small>
    </center>
</body>
</html>
