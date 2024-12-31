<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./update.php" method="POST" class="mt-6">
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="lastname" class="block text-gray-700">Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">E-mail:</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700">Phone:</label>
                        <input type="number" name="phone" id="phone" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-700">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
