<!-- {{$clientes}} -->
<!-- @forelse ($clientes as $cliente)
    {{$cliente->nombre}}
    <p> ....</p>
    {{$cliente->email}}
@empty
    <p>No hay clientes registrados.</p>
@endforelse -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

  <body>
    
  <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    <h1>Hello, world!</h1>

    
<!-- <button type="button" class="btn-solid theme-primary">Primary</button>
<button type="button" class="btn-outline theme-primary">Primary</button>
<button type="button" class="btn-subtle theme-primary">Primary</button>
<button type="button" class="btn-text theme-primary">Primary</button>
<button type="button" class="btn-solid theme-accent">Accent</button>
<button type="button" class="btn-outline theme-accent">Accent</button>
<button type="button" class="btn-subtle theme-accent">Accent</button>
<button type="button" class="btn-text theme-accent">Accent</button>
<button type="button" class="btn-solid theme-success">Success</button>
<button type="button" class="btn-outline theme-success">Success</button>
<button type="button" class="btn-subtle theme-success">Success</button>
<button type="button" class="btn-text theme-success">Success</button>
<button type="button" class="btn-solid theme-danger">Danger</button>
<button type="button" class="btn-outline theme-danger">Danger</button>
<button type="button" class="btn-subtle theme-danger">Danger</button>
<button type="button" class="btn-text theme-danger">Danger</button>
<button type="button" class="btn-solid theme-warning">Warning</button>
<button type="button" class="btn-outline theme-warning">Warning</button>
<button type="button" class="btn-subtle theme-warning">Warning</button>
<button type="button" class="btn-text theme-warning">Warning</button>
<button type="button" class="btn-solid theme-info">Info</button>
<button type="button" class="btn-outline theme-info">Info</button>
<button type="button" class="btn-subtle theme-info">Info</button>
<button type="button" class="btn-text theme-info">Info</button>
<button type="button" class="btn-solid theme-inverse">Inverse</button>
<button type="button" class="btn-outline theme-inverse">Inverse</button>
<button type="button" class="btn-subtle theme-inverse">Inverse</button>
<button type="button" class="btn-text theme-inverse">Inverse</button>
<button type="button" class="btn-solid theme-secondary">Secondary</button>
<button type="button" class="btn-outline theme-secondary">Secondary</button>
<button type="button" class="btn-subtle theme-secondary">Secondary</button>
<button type="button" class="btn-text theme-secondary">Secondary</button> -->

@forelse ($clientes as $cliente)
    <!-- {{$cliente->nombre}}
    <p> ....</p>
    {{$cliente->email}} -->
    <button type="button" class="btn-solid theme-primary">{{$cliente->nombre}}</button>
@empty
    <p>No hay clientes registrados.</p>
@endforelse
  </body>
</html>