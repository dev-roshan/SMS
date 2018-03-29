<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $user->id }}</title>
  </head>
  <body>
    <h1>User {{ $user->id }}</h1>
    <ul>
      <li>Name: {{ $user->name }}</li>
      <li>Email: {{ $user->email }}</li>
      <li>Created on: {{ $user->created_at }}</li>
    </ul>
  </body>
</html>