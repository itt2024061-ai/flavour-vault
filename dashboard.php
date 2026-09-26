<?php
require_once 'includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_recipe'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO recipes (title, category, ingredients, instructions, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $category, $ingredients, $instructions, $user_id]);
    $success = "Recipe added successfully!";
}

$stmt = $pdo->prepare("SELECT * FROM recipes WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user_recipes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - FlavorVault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">FlavorVault Dashboard</a>
        <span class="text-white">Welcome, <?= htmlspecialchars($_SESSION['username']); ?> | <a href="auth/logout.php" class="btn btn-sm btn-danger">Logout</a></span>
    </nav>

    <div class="container mt-4">
        <?php if($success): ?>
            <div class="alert alert-success"><?= $success; ?></div>
        <?php endif; ?>

        <h2>Add a New Recipe</h2>
        <form method="POST" class="mb-5">
            <div class="mb-3">
                <label>Recipe Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="category" class="form-control">
                    <option>Breakfast</option>
                    <option>Lunch</option>
                    <option>Dinner</option>
                    <option>Dessert</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Ingredients</label>
                <textarea name="ingredients" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label>Instructions</label>
                <textarea name="instructions" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" name="add_recipe" class="btn btn-primary">Save Recipe</button>
        </form>

        <h2>My Recipes</h2>
        <ul class="list-group">
            <?php foreach($user_recipes as $recipe): ?>
                <li class="list-group-item">
                    <strong><?= htmlspecialchars($recipe['title']); ?></strong> (<?= htmlspecialchars($recipe['category']); ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>