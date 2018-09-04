<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Phonebook</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    <div class="container">
      <My-Header></My-Header>
      <router-view></router-view>
      <My-Footer></My-Footer>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>