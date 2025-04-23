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

      <!-- Item Detail Page -->
      <div class="p-6 space-y-6">
        <div class="flex items-center space-x-2 mb-4">
          <button class="bg-white text-black px-3 py-1 rounded-full shadow">←</button>
          <h2 class="text-3xl font-bold">Item Name</h2>
        </div>

        <div class="bg-white p-4 rounded shadow space-y-4">
          <div class="flex items-start space-x-4">
            <div class="w-32 h-32 bg-gray-200 flex items-center justify-center">
              <span class="material-icons text-gray-500">image</span>
            </div>
            <div class="flex-1">
              <p class="text-lg font-semibold">Item Quantity: <span class="font-normal">30</span></p>
              <p class="text-lg font-semibold">Location: <span class="font-normal">Room A</span></p>
            </div>
          </div>

          <div>
            <h3 class="text-xl font-semibold mb-2">Item Description:</h3>
            <p class="text-gray-700">Item description here..</p>
          </div>

          <div class="text-center">
            <button class="bg-white border border-gray-400 px-6 py-2 rounded hover:bg-gray-100">Borrow</button>
          </div>
        </div>

        <!-- Borrowing Popup Simulation -->
        <div class="bg-white p-6 rounded shadow max-w-2xl mx-auto">
          <div class="flex space-x-6 mb-6">
            <div class="w-28 h-28 bg-gray-200 flex items-center justify-center">
              <span class="material-icons text-gray-500">image</span>
            </div>
            <div class="flex-1 space-y-2">
              <h3 class="text-2xl font-bold">Item Name</h3>
              <p class="text-gray-700">Item Quantity: <span class="font-medium">30</span></p>
              <div class="flex items-center space-x-4">
                <label class="text-sm font-medium">Select Borrowing Date:</label>
                <input type="date" class="border border-gray-300 rounded px-2 py-1" />
              </div>
            </div>
          </div>

          <div class="space-y-4">
            <div class="flex items-center space-x-4">
              <label class="text-sm font-medium">Reason For Borrowing:</label>
              <input type="text" class="border border-gray-300 rounded px-2 py-1 flex-1" />
            </div>

            <div class="flex items-center space-x-4">
              <label class="text-sm font-medium">Select Return Date:</label>
              <input type="date" class="border border-gray-300 rounded px-2 py-1" />
            </div>

            <div class="flex items-center space-x-2">
              <input type="checkbox" id="terms" class="accent-blue-600" />
              <label for="terms" class="text-sm">I have read the <a href="#" class="text-purple-600 underline">Terms and Condition</a></label>
            </div>

            <div class="flex justify-end space-x-4 pt-4">
              <button class="bg-gray-200 text-black px-4 py-2 rounded hover:bg-gray-300">Borrow</button>
              <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
