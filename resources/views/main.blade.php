<!--include voegt een partial view toe in je weergave, met extends kun je een template verlengen, een template die je kunt uitbreiden definieert zijn eigen secties met yield,
hier kun je content in plaatsten-->

<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
<body>
@include('layouts.navigation')
<div class="content">
    @yield('content')
</div>
</body>
</html>

