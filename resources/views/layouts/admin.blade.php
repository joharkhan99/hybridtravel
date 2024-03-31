<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield("title", "Hybrid Travel - Admin")
  </title>
  @include("admin.components.head")
</head>

<body id="body">
  @include("admin.components.header")
  @yield("content")
  @include("admin.components.footer")
  @include("admin.components.scripts")
</body>

</html>