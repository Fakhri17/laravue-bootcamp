<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test 1</title>
</head>
<body>
  
  <p> the name here</p>
  
  {{-- If first value --}}
  {{-- <p>{{ $page->first()->name }}</p> --}}
  
  @foreach ($page as $item)
      <p>{{ $item->name }}</p>
  @endforeach
  <p>the description</p>
  @foreach ($page as $item)
  <p>{{ $item->description }}</p>
@endforeach
</body>
</html>