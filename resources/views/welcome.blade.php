<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pico/css/pico.min.css">
    <title>Todo App</title>
</head>
<body>
    <main class="container">
        <nav>
            <ul>
              <li><strong>Todo app</strong></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li><button class="secondary">Products</button></li>
            </ul>
          </nav>
          <livewire:alert />
          <div class="grid">
            <div>
                <livewire:todos.create />
            </div>
            <div>
                <livewire:todos.index />
            </div>
            <div>
                <livewire:search />
            </div>
          </div>
    </main>
</body>
</html>
