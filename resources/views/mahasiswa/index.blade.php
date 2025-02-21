<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>List Mahasiswi Kelas {{$kelas}}</h2>
     <ol>
    @foreach ($data as $nama)
        <li>{{$nama}}</li>
    @endforeach
     </ol>

     {{--<h2>List Mahasiswi Kelas <?php echo $kelas ?></h2>
     <ol>
    <?php
    foreach ($data as $nama) {
        echo "<li>$nama</li>";
    }
    ?>
    </ol>
    {{--
    <ol>
        <li> Putri Chantika </li>
        <li> Raihan Ramadhani </li>
        <li> Nabiilah Aula Safda </li>
        <li> Cut Putri Efrina </li>
        <li> Sri Maharani </li>
        <li> Penti Anggraini </li>
        <li> Kania Nabila Muntaz </li>
    </ol>
    --}}
</body>
</html>
