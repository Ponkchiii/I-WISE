<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item List - Book Wise</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white flex flex-col p-4 space-y-6">
      <h1 class="text-2xl font-bold">BOOK WISE</h1>
      <nav class="space-y-4">
        <div class="flex items-center space-x-2 cursor-pointer">
          <span class="material-icons">home</span> <span>Home</span>
          <span>
                    <a href="index.php" target="_blank">
                    <button></button> </a> 
                    </span>
        </div>
        <div class="flex items-center space-x-2 cursor-pointer bg-blue-700 p-2 rounded">
          <span class="material-icons">inventory_2</span> <span>Item List</span>
        </div>
        <div class="flex items-center space-x-2 cursor-pointer">
          <span class="material-icons">assignment_returned</span> <span>Borrowed Items</span>
        </div>
        <div class="flex items-center space-x-2 cursor-pointer">
          <span class="material-icons">groups</span> <span>Admins</span>
        </div>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1">
      <!-- Top Bar -->
      <div class="bg-blue-800 text-white flex items-center justify-between p-4">
        <div class="flex items-center space-x-4">
          <button class="bg-white text-blue-800 p-1 rounded-full">☰</button>
          <input
            type="text"
            placeholder="search item.."
            class="rounded px-3 py-1 text-black"
          />
        </div>
        <div class="flex items-center space-x-4">
          <span class="material-icons">notifications</span>
          <span class="material-icons">account_circle</span>
        </div>
      </div>

      <!-- Item List Content -->
      <div class="p-6">
        <div class="flex items-center space-x-2 mb-6">
          <button class="bg-white text-black px-3 py-1 rounded-full shadow">←</button>
          <h2 class="text-3xl font-bold">Item List</h2>
        </div>

        <div class="space-y-4">
          <!-- Item Card -->
          <div class="bg-white p-4 rounded shadow flex items-center space-x-4">
            <div class="w-24 h-24 bg-gray-200 flex items-center justify-center">
              <span class="material-icons text-gray-500">image</span>
            </div>
            <div class="flex-1">
              <h3 class="text-lg font-semibold">Item 1</h3>
              <p class="text-sm text-gray-600">Item description</p>
            </div>
            <button class="bg-white border border-gray-400 px-4 py-1 rounded hover:bg-gray-100">Borrow</button>
          </div>

          <div class="bg-white p-4 rounded shadow flex items-center space-x-4">
            <div class="w-24 h-24 bg-gray-200 flex items-center justify-center">
              <span class="material-icons text-gray-500">image</span>
            </div>
            <div class="flex-1">
              <h3 class="text-lg font-semibold">Item 2</h3>
              <p class="text-sm text-gray-600">Item description</p>
            </div>
            <button class="bg-white border border-gray-400 px-4 py-1 rounded hover:bg-gray-100">Borrow</button>
          </div>

          <div class="bg-white p-4 rounded shadow flex items-center space-x-4">
            <div class="w-24 h-24 bg-gray-200 flex items-center justify-center">
              <span class="material-icons text-gray-500">image</span>
            </div>
            <div class="flex-1">
              <h3 class="text-lg font-semibold">Item 3</h3>
              <p class="text-sm text-gray-600">Item description</p>
            </div>
            <button class="bg-white border border-gray-400 px-4 py-1 rounded hover:bg-gray-100">Borrow</button>
          </div>
        </div>
      </div>
    </main>
  </div>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
