<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <main class="flex justify-between p-6">
        <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left text-gray-600">Name</th>
                        <th class="px-4 py-2 border-b text-left text-gray-600">Lastname</th>
                        <th class="px-4 py-2 border-b text-left text-gray-600">Email</th>
                        <th class="px-4 py-2 border-b text-left text-gray-600">Telephone</th>
                        <th class="px-4 py-2 border-b text-left text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include("./connexion.php");
                        $query = "SELECT * FROM etudiant";
                        $resultat = mysqli_query($connexion, $query);

                        while($row = mysqli_fetch_assoc($resultat)) {
                    ?>
                    <tr class="border-b">
                        <td class="px-4 py-2"><?php echo $row["name"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["lastname"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["Email"]; ?></td>
                        <td class="px-4 py-2"><?php echo $row["numero"]; ?></td>
                        <td class="px-4 py-2">
                            <a href="./crud/supprimer.php?deleted=<?php echo $row["id"]; ?>" class="inline-block mr-2">
                                <button type="button" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Supprimer</button>
                            </a>
                            <a href="./crud/UpdateForm.php?updated=<?php echo $row["id"]; ?>" class="inline-block mr-2">
                                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <form action="./crud/Ajouter.php" method="POST" class="mt-6">
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
