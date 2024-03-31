<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield("title", "Hybrid Travel - Website")
  </title>
  @include("front.components.head")
</head>

<body id="body">
  @include("front.components.header")
  @yield("content")
  @include("front.components.footer")
  @include("front.components.scripts")
</body>

</html>