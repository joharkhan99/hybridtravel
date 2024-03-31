<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield("title", "Hybrid Travel - User")
  </title>
  @include("user.components.head")
</head>

<body id="body">
  @include("user.components.header")
  @yield("content")
  @include("user.components.footer")
  @include("user.components.scripts")
</body>

</html>