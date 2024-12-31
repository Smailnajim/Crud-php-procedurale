<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<form action="./update.php" method="POST" class="mt-6">
                <div class="space-y-4">
                    <div>
                    <?php 
                        include("../connexion.php");
                        $id=$_GET["updated"];
                        $query = "SELECT * FROM etudiant where id=$id ";
                        $resultat = mysqli_query($connexion, $query);

                        while($row = mysqli_fetch_assoc($resultat)) {
                    ?>
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input type="text" value=<?php echo $row["name"]; ?> name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="lastname" class="block text-gray-700">Lastname:</label>
                        <input type="text" value=<?php echo $row["lastname"]; ?> name="lastname" id="lastname" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">E-mail:</label>
                        <input type="email" name="email" value=<?php echo $row["Email"]; ?> id="email" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700">Phone:</label>
                        <input type="number" name="phone" value=<?php echo $row["numero"]; ?> id="phone" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                    <input type="hidden" name="IdUpdate" value=<?php echo $row["id"]; ?>  class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-700">

                        <input type="submit" value="Submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-700">
                    </div>
                </div>
                <?php }?>
            </form>
        </div>
    </main>
</body>
</html>
