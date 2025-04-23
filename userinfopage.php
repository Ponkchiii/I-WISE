<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Info - Book Wise</title>
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
        <div class="flex items-center space-x-2 cursor-pointer">
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

      <!-- User Info Page -->
      <div class="p-6 space-y-6">
        <div class="flex items-center space-x-2 mb-4">
          <button class="bg-white text-black px-3 py-1 rounded-full shadow">←</button>
          <h2 class="text-3xl font-bold">User Info</h2>
        </div>

        <div class="bg-white p-6 rounded shadow-md flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-6">
          <!-- Profile Placeholder -->
          <div class="w-32 h-32 bg-gray-200 rounded flex items-center justify-center">
            <span class="material-icons text-gray-500 text-4xl">image</span>
          </div>

          <!-- User Details -->
          <div class="flex-1 space-y-2 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <p class="text-lg font-semibold">User Name</p>
                <p class="text-gray-700">Contact Info:</p>
              </div>
              <div>
                <p class="text-lg font-semibold">Grade and Strand</p>
                <p class="text-gray-700">Email:</p>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
              <button class="bg-white border border-gray-400 px-6 py-2 rounded hover:bg-gray-100">Edit Account</button>
              <button class="bg-white border border-gray-400 px-6 py-2 rounded hover:bg-gray-100">Change Password</button>
              <button class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600">Logout</button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
