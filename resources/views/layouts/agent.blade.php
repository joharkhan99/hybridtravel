<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
    @yield("title", "Hybrid Travel - Agent")
  </title>
  @include("agent.components.head")
</head>

<body id="body">
  @include("agent.components.header")
  @yield("content")
  @include("agent.components.footer")
  @include("agent.components.scripts")
</body>

</html>