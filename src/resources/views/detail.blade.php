<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <div>旅の記録システム_detail</div>
    </header>

    {{-- @foreach($pictures as $picture) --}}
        <div>{{$picture->pictureName}}</div>
        <div>{{$picture->StartDate}}</div>
        <div>{{$picture->EndDate}}</div>
        <img src="storage/{{$picture->picturePass}}" width="300" height="200">
    {{-- @endforeach --}}

</body>
</html>