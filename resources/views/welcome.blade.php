<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User System</title>
    @vite("./resources/css/app.css")
</head>
<body>
    <header class="flex justify-between px-3 py-4 bg-black">
        <div class="text-white"><a href="/">Logo</a></div>
        <nav>
          <ul class="flex gap-4 text-white">
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            
            <li><a href="#">About</a></li>
            <li class="bg-red-500 px-8 rounded"><a href="/users/create">New</a></li>
          </ul>
        </nav>
      </header>
    <main class="container flex justify-center">
        <div class="flex flex-col items-center p-3">
            <h1 class="text-red-400 text-4xl  m-3">User System</h1>
            <p>System of user data to learn Laravel.</p>
             <a class="text-blue-500 mt-4 px-8 rounded" href="/users/">Check users</a>
        </div>
    </main>
</body>
</html>