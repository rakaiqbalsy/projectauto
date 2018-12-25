<!DOCTYPE html>
<html>
<head>
  @include('user/layout/head')
</head>
<body>
  @include('user/layout/nav')
  @include('user/layout/header')

  @section('content')
    @show()

  @include('user/layout/footer')

</body>
</html>

