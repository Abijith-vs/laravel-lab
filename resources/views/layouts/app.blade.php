<!doctype html>
<html>
<head><title>Students</title></head>
<body>
  @if (session('status'))
    <div style="background:#d4edda;padding:8px">{{ session('status') }}</div>
  @endif
  @yield('content')
</body>
</html>