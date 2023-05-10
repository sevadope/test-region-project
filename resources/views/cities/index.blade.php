<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container px-4 py-5">

        <div class="list-group">
            @if (isset($city)) 
            <a href="{{ route('cities.show', ['city' => $city->slug]) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="">
                            <h1>
                            <p class="text-decoration-underline">
                                {{ $city->name }}
                            </p>
                            </h1>
                        </div>
                    </div>
                </a>
            @endif

            @foreach ($cities->filter(fn($i) => isset($city) ? $i->id != $city->id : true) as $c)
            <a href="{{ route('cities.show', ['city' => $c->slug]) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div class="">
                        <h3>{{ $c->name }}</h3>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>