<!DOCTYPE html>
<html lang="en">
{{--head--}}
@include('fixed.head')

<body>
{{--header--}}
@include('fixed.header')

{{--content--}}
@yield('content')

{{--footer--}}
@include('fixed.footer')

{{--scripts--}}
@include('fixed.scripts')

</body>

</html>
