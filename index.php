<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FlavorVault - Complete Recipe Portal</title>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary: #f97316;
      --primary-hover: #ea580c;
      --dark-bg: #0f172a;
      --body-bg: #f8fafc;
      --card-bg: #ffffff;
      --text-main: #1e293b;
      --text-muted: #64748b;
      --border-color: #e2e8f0;
      --radius: 16px;
      --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    * { 
      box-sizing: border-box; 
      margin: 0; 
      padding: 0; 
      font-family: 'Plus Jakarta Sans', sans-serif; 
    }
    
    html { 
      scroll-behavior: smooth; 
    }
    
    body { 
      background-color: var(--body-bg); 
      color: var(--text-main); 
      display: flex; 
      flex-direction: column; 
      min-height: 100vh; 
    }
    
    header { 
      background-color: var(--dark-bg); 
      position: sticky; 
      top: 0; 
      z-index: 1000; 
      border-bottom: 1px solid rgba(255,255,255,0.1); 
    }
    
    nav { 
      max-width: 1200px; 
      margin: 0 auto; 
      padding: 1rem 1.5rem; 
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
      flex-wrap: wrap; 
      gap: 1rem; 
    }
    
    .logo { 
      font-size: 1.5rem; 
      font-weight: 800; 
      color: #ffffff; 
      text-decoration: none; 
      display: flex; 
      align-items: center; 
      gap: 0.5rem; 
    }
    
    .logo span { 
      color: var(--primary); 
    }

    .nav-links { 
      display: flex; 
      list-style: none; 
      gap: 0.5rem; 
      flex-wrap: wrap; 
      margin: 0;
      padding: 0;
    }
    
    .nav-links a { 
      color: #cbd5e1; 
      text-decoration: none; 
      font-weight: 500; 
      font-size: 0.9rem; 
      padding: 0.5rem 0.8rem; 
      border-radius: 8px; 
      transition: all 0.3s; 
    }
    
    .nav-links a:hover, .nav-links a.active { 
      color: white; 
      background-color: rgba(249, 115, 22, 0.2); 
    }

    .container { 
      max-width: 1200px; 
      margin: 2rem auto; 
      padding: 0 1.5rem; 
      flex: 1; 
      width: 100%; 
    }

    .hero { 
      position: relative; 
      height: 35vh; 
      min-height: 250px; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      text-align: center; 
      color: white; 
      border-radius: var(--radius); 
      overflow: hidden; 
      margin-bottom: 3rem; 
    }
    
    .hero-bg { 
      position: absolute; 
      top: 0; 
      left: 0; 
      width: 100%; 
      height: 100%; 
      background: linear-gradient(180deg, rgba(15, 23, 42, 0.6) 0%, rgba(15, 23, 42, 0.85) 100%), url('https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; 
      z-index: 1; 
    }
    
    .hero-content { 
      position: relative; 
      z-index: 2; 
      max-width: 700px; 
      padding: 0 1rem; 
    }
    
    .hero h1 { 
      font-family: 'Playfair Display', serif; 
      font-size: 2.2rem; 
      margin-bottom: 0.5rem; 
    }

    section { 
      margin-bottom: 4rem; 
      scroll-margin-top: 100px; 
    }
    
    .section-title { 
      font-family: 'Playfair Display', serif; 
      font-size: 2rem; 
      margin-bottom: 0.5rem; 
    }
    
    .section-subtitle { 
      color: var(--text-muted); 
      margin-bottom: 2rem; 
    }

    .divider { 
      margin: 4rem 0; 
      border: 0; 
      height: 1px; 
      background: var(--border-color); 
    }

    .grid { 
      display: grid; 
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); 
      gap: 1.5rem; 
    } 
    
    .card-item { 
      background: var(--card-bg); 
      border-radius: var(--radius); 
      overflow: hidden; 
      border: 1px solid var(--border-color); 
      box-shadow: var(--shadow); 
      transition: 0.3s ease; 
      cursor: pointer; 
    }
    
    .card-item:hover { 
      transform: translateY(-5px); 
      border-color: var(--primary); 
    }
    
    .card-item img { 
      width: 100%; 
      height: 200px; 
      object-fit: cover; 
    }
    
    .card-body-custom { 
      padding: 1.25rem; 
    }
    
    .card-tag { 
      color: var(--primary); 
      font-size: 0.75rem; 
      font-weight: 700; 
      text-transform: uppercase; 
      background: #fff7ed; 
      padding: 0.2rem 0.6rem; 
      border-radius: 20px; 
      display: inline-block; 
      margin-bottom: 0.5rem; 
    }
    
    .card-title { 
      font-size: 1.15rem; 
      font-weight: 700; 
      margin-bottom: 0.4rem; 
      color: var(--text-main); 
    }

    .filter-btn-group { 
      display: flex; 
      gap: 0.5rem; 
      margin-bottom: 1.5rem; 
      flex-wrap: wrap; 
    }
    
    .filter-btn { 
      padding: 0.5rem 1rem; 
      border-radius: 20px; 
      border: 1px solid var(--border-color); 
      background: white; 
      cursor: pointer; 
      font-weight: 600; 
      font-size: 0.85rem; 
      color: var(--text-muted); 
      transition: 0.2s; 
    }
    
    .filter-btn.active, .filter-btn:hover { 
      background: var(--primary); 
      color: white; 
      border-color: var(--primary); 
    }

    .recipe-header { 
      display: flex; 
      gap: 2rem; 
      flex-wrap: wrap; 
      background: var(--card-bg); 
      padding: 1.5rem; 
      border-radius: var(--radius); 
      border: 1px solid var(--border-color); 
      margin-bottom: 2rem; 
    }
    
    .recipe-header img { 
      width: 100%; 
      max-width: 450px; 
      height: 300px; 
      border-radius: 12px; 
      object-fit: cover; 
    }
    
    .recipe-meta { 
      flex: 1; 
      min-width: 280px; 
    }
    
    .recipe-details-grid { 
      display: grid; 
      grid-template-columns: 1fr 2fr; 
      gap: 2rem; 
    }
    
    .ingredients-list, .steps-list { 
      background: var(--card-bg); 
      padding: 1.75rem; 
      border-radius: var(--radius); 
      border: 1px solid var(--border-color); 
    }

    .custom-card { 
      background: var(--card-bg); 
      padding: 2.5rem; 
      border-radius: var(--radius); 
      border: 1px solid var(--border-color); 
      box-shadow: var(--shadow); 
    }
    
    .btn-custom { 
      background: var(--primary); 
      color: white; 
      border: none; 
      padding: 0.85rem 1.5rem; 
      border-radius: 10px; 
      font-weight: 700; 
      font-size: 0.95rem; 
      transition: background 0.2s ease; 
      width: 100%; 
    }
    
    .btn-custom:hover { 
      background: var(--primary-hover); 
      color: white; 
    }

    footer { 
      background: var(--dark-bg); 
      color: #94a3b8; 
      text-align: center; 
      padding: 2rem 1.5rem; 
      font-size: 0.85rem; 
      margin-top: 3rem; 
    }

    @media (max-width: 768px) { 
      .recipe-details-grid { grid-template-columns: 1fr; } 
    }
  </style>
</head>
<body>


  <header>
    <nav>
      <a href="#home" class="logo">
        <i class="fa-solid fa-utensils"></i> Flavor<span>Vault</span>
      </a>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#categories">Categories</a></li>
        <li><a href="#recipe-details">Recipe Details</a></li>
        <li><a href="#add-recipe">Add Recipe</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="auth/login.php" style="background-color: var(--primary); color: white; border-radius: 8px;">Login</a></li>
        <li><a href="auth/register.php">Register</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">


    <section id="home">
      <div class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
          <h1>Welcome to FlavorVault</h1>
          <p>Scroll down to explore categories or click any recipe to view its details!</p>
        </div>
      </div>

      <h2 class="section-title">Featured Recipes</h2>
      <p class="section-subtitle">Hand-picked delicious dishes for you.</p>

      <div class="grid" id="home-recipe-grid"></div>
    </section>

    <hr class="divider">

    <section id="categories">
      <h2 class="section-title">Browse Recipes by Category</h2>
      <p class="section-subtitle">Filter dishes by meal type.</p>
      
      <div class="filter-btn-group">
        <button class="filter-btn active" onclick="filterCategory('All', this)">All</button>
        <button class="filter-btn" onclick="filterCategory('Breakfast', this)">Breakfast</button>
        <button class="filter-btn" onclick="filterCategory('Lunch', this)">Lunch</button>
        <button class="filter-btn" onclick="filterCategory('Dinner', this)">Dinner</button>
        <button class="filter-btn" onclick="filterCategory('Dessert', this)">Dessert</button>
      </div>

      <div class="grid" id="categories-recipe-grid"></div>
    </section>

    <hr class="divider">

    <section id="recipe-details">
      <h2 class="section-title">Selected Recipe Details</h2>
      <p class="section-subtitle">Detailed ingredients and cooking instructions.</p>
      
      <div class="recipe-header">
        <img id="view-img" src="" alt="Recipe">
        <div class="recipe-meta">
          <span class="card-tag" id="view-tag">Tag</span>
          <h1 class="section-title" id="view-title" style="margin-top: 0.5rem;">Recipe Title</h1>
          <p id="view-desc" style="color: var(--text-muted); margin: 1rem 0; line-height: 1.6;">Description</p>
          <p style="font-size: 0.95rem;">
            <strong><i class="fa-regular fa-clock"></i> Prep Time:</strong> <span id="view-time">15 mins</span> &nbsp;|&nbsp; 
            <strong><i class="fa-solid fa-user-group"></i> Servings:</strong> <span id="view-servings">2 Portions</span>
          </p>
        </div>
      </div>

      <div class="recipe-details-grid">
        <div class="ingredients-list">
          <h3 style="margin-bottom: 1rem;">Ingredients</h3>
          <ul id="view-ingredients" style="padding-left: 1.2rem; color: var(--text-muted); line-height: 1.8;"></ul>
        </div>
        <div class="steps-list">
          <h3 style="margin-bottom: 1rem;">Preparation Steps</h3>
          <ol id="view-steps" style="padding-left: 1.2rem; color: var(--text-muted); line-height: 1.8;"></ol>
        </div>
      </div>
    </section>

    <hr class="divider">

    <section id="add-recipe">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="custom-card">
            <h2 class="section-title text-center">Submit a Recipe</h2>
            <p class="section-subtitle text-center">Share your favorite home recipes with the community.</p>
            
            <form id="recipeForm" onsubmit="handleRecipeSubmit(event)">
              <div class="mb-3">
                <label class="form-label fw-semibold">Recipe Name</label>
                <input type="text" id="newRecipeName" class="form-control form-control-lg" placeholder="e.g., Creamy Garlic Pasta" required />
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Category</label>
                <select id="newRecipeCategory" class="form-select form-select-lg">
                  <option>Breakfast</option>
                  <option>Lunch</option>
                  <option>Dinner</option>
                  <option>Dessert</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Ingredients (comma separated)</label>
                <textarea id="newRecipeIngredients" class="form-control" rows="3" placeholder="Pasta, Garlic, Olive oil, Parmesan..." required></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Instructions (comma or newline separated)</label>
                <textarea id="newRecipeSteps" class="form-control" rows="4" placeholder="Boil pasta, Mix garlic and oil, Serve hot..." required></textarea>
              </div>
              <button type="submit" class="btn btn-custom mt-2">Save & Publish Recipe</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <hr class="divider">

    <section id="contact">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="custom-card">
            <h2 class="section-title text-center">Contact Us</h2>
            <p class="section-subtitle text-center">Have questions or feedback? Send us a message below.</p>
            
            <form id="contactForm" class="needs-validation" novalidate onsubmit="handleContactSubmit(event)">
              <div class="mb-3">
                <label for="contactName" class="form-label fw-semibold">Name</label>
                <input type="text" class="form-control form-control-lg" id="contactName" placeholder="Enter your full name" required />
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="mb-3">
                <label for="contactEmail" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control form-control-lg" id="contactEmail" placeholder="Enter your email address" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>

              <div class="mb-3">
                <label for="contactMessage" class="form-label fw-semibold">Message</label>
                <textarea class="form-control" id="contactMessage" rows="5" placeholder="Write your message here..." required></textarea>
                <div class="invalid-feedback">Please write your message.</div>
              </div>

              <button type="submit" class="btn btn-custom mt-2">SUBMIT</button>
            </form>

            <div id="thankYouMessage" class="alert alert-success mt-4 text-center d-none" role="alert">
              <i class="fa-solid fa-circle-check me-2"></i> Thank you for contacting us!
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <footer>&copy; 2026 FlavorVault Inc. All rights reserved.</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    var recipes = [
      {
        id: "med-bowl",
        category: "Lunch",
        title: "Fresh Mediterranean Bowl",
        tag: "Healthy Choice",
        time: "15 mins",
        servings: "2 Portions",
        image: "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80",
        description: "A clean, vibrant meal composed of high-protein greens, fresh organic vegetables, and olive oil dressing.",
        ingredients: ["1 cup Mixed Organic Greens", "1/2 cup Fresh Cherry Tomatoes", "1/2 Ripe Avocado", "2 tbsp Extra Virgin Olive Oil", "Feta Cheese & Fava Beans"],
        steps: ["Rinse and gently dry all fresh produce.", "Arrange greens in a large serving container.", "Slice avocado and tomatoes neatly on top.", "Drizzle olive oil, season with salt and pepper, serve immediately."]
      },
      {
        id: "pizza",
        category: "Dinner",
        title: "Artisan Woodfired Pizza",
        tag: "Italian Gourmet",
        time: "30 mins",
        servings: "3 Portions",
        image: "https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=600&q=80",
        description: "Classic Italian thin-crust pizza topped with rich tomato basil sauce and melted fresh mozzarella.",
        ingredients: ["1 Pizza Dough base", "1/2 cup Tomato Sauce", "1 cup Fresh Mozzarella Cheese", "Fresh Basil leaves", "1 tbsp Olive Oil"],
        steps: ["Preheat your oven to 250°C (480°F).", "Roll out the pizza dough evenly into a circle.", "Spread tomato sauce and layer fresh mozzarella on top.", "Bake for 10-12 minutes until crust is crispy and cheese is bubbly. Garnish with fresh basil."]
      },
      {
        id: "ice-cream",
        category: "Dessert",
        title: "Berry Ice Cream Sundae",
        tag: "Sweet Dessert",
        time: "10 mins",
        servings: "1 Portion",
        image: "https://images.unsplash.com/photo-1563805042-7684c019e1cb?auto=format&fit=crop&w=600&q=80",
        description: "A refreshing rich vanilla bean ice cream loaded with sweet berries and homemade chocolate drizzle.",
        ingredients: ["2 scoops Vanilla Bean Ice Cream", "1/2 cup Fresh Strawberries & Blueberries", "2 tbsp Chocolate Syrup", "Crushed Waffle Cone"],
        steps: ["Scoop vanilla ice cream into a chilled glass bowl.", "Top generously with mixed fresh berries.", "Drizzle chocolate syrup over the top and sprinkle crushed waffle cone."]
      },
      {
        id: "pancakes",
        category: "Breakfast",
        title: "Fluffy Maple Pancakes",
        tag: "Morning Favorite",
        time: "20 mins",
        servings: "2 Portions",
        image: "https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?auto=format&fit=crop&w=600&q=80",
        description: "Golden stack of fluffy pancakes drizzled with pure maple syrup and topped with fresh butter.",
        ingredients: ["1 cup All-Purpose Flour", "1 cup Milk", "1 Egg", "2 tbsp Butter", "Pure Maple Syrup"],
        steps: ["Whisk flour, milk, egg, and melted butter together.", "Heat a pan and pour small batters to make circles.", "Flip when bubbles appear and cook until golden brown.", "Serve warm with maple syrup and butter."]
      }
    ];

    function loadCards(cat) {
      var homeGrid = document.getElementById('home-recipe-grid');
      var catGrid = document.getElementById('categories-recipe-grid');

      if (!cat) {
        cat = "All";
      }

      if (cat === "All") {
        homeGrid.innerHTML = "";
        for (var i = 0; i < recipes.length; i++) {
          homeGrid.innerHTML += makeCard(recipes[i]);
        }
      }

      catGrid.innerHTML = "";
      for (var j = 0; j < recipes.length; j++) {
        if (cat === "All" || recipes[j].category === cat) {
          catGrid.innerHTML += makeCard(recipes[j]);
        }
      }
    }

    function makeCard(item) {
      var cardHtml = '<div class="card-item" onclick="showDetails(\'' + item.id + '\')">' +
        '<img src="' + item.image + '" alt="' + item.title + '">' +
        '<div class="card-body-custom">' +
          '<span class="card-tag">' + item.tag + '</span>' +
          '<h3 class="card-title">' + item.title + '</h3>' +
          '<p style="color: var(--text-muted); font-size: 0.85rem;"><i class="fa-regular fa-clock"></i> ' + item.time + ' prep</p>' +
        '</div>' +
      '</div>';
      
      return cardHtml;
    }

    function filterCategory(catName, btn) {
      var buttons = document.querySelectorAll('.filter-btn');
      for (var k = 0; k < buttons.length; k++) {
        buttons[k].classList.remove('active');
      }
      if (btn) {
        btn.classList.add('active');
      }
      loadCards(catName);
    }

    function showDetails(id) {
      var selected = null;
      for (var x = 0; x < recipes.length; x++) {
        if (recipes[x].id === id) {
          selected = recipes[x];
          break;
        }
      }

      if (selected == null) return;

      document.getElementById('view-img').src = selected.image;
      document.getElementById('view-tag').innerHTML = selected.tag;
      document.getElementById('view-title').innerHTML = selected.title;
      document.getElementById('view-desc').innerHTML = selected.description;
      document.getElementById('view-time').innerHTML = selected.time;
      document.getElementById('view-servings').innerHTML = selected.servings;

      var ingList = "";
      for (var a = 0; a < selected.ingredients.length; a++) {
        ingList += "<li>" + selected.ingredients[a] + "</li>";
      }
      document.getElementById('view-ingredients').innerHTML = ingList;

      var stepList = "";
      for (var b = 0; b < selected.steps.length; b++) {
        stepList += "<li>" + selected.steps[b] + "</li>";
      }
      document.getElementById('view-steps').innerHTML = stepList;

      document.getElementById('recipe-details').scrollIntoView({ behavior: 'smooth' });
    }

    function handleRecipeSubmit(event) {
      event.preventDefault();
      
      var name = document.getElementById('newRecipeName').value;
      var category = document.getElementById('newRecipeCategory').value;
      var ingredientsInput = document.getElementById('newRecipeIngredients').value;
      var stepsInput = document.getElementById('newRecipeSteps').value;

      var newRecipe = {
        id: "recipe-" + Date.now(),
        category: category,
        title: name,
        tag: "Community",
        time: "20 mins",
        servings: "2 Portions",
        image: "https://images.unsplash.com/photo-1495521821757-a1efb6729352?auto=format&fit=crop&w=600&q=80",
        description: "A wonderful new recipe shared by a community member.",
        ingredients: ingredientsInput.split(',').map(item => item.trim()),
        steps: stepsInput.split('\n').filter(item => item.trim() !== "")
      };

      recipes.push(newRecipe);
      loadCards("All");
      alert('Recipe saved and published successfully!');
      document.getElementById('recipeForm').reset();
      showDetails(newRecipe.id);
    }

    function handleContactSubmit(event) {
      event.preventDefault();
      var form = document.getElementById('contactForm');
      var thankYouMsg = document.getElementById('thankYouMessage');

      if (!form.checkValidity()) {
        event.stopPropagation();
        form.classList.add('was-validated');
      } else {
        form.classList.remove('was-validated');
        form.reset();
        
        thankYouMsg.classList.remove('d-none');
        
        setTimeout(() => {
          thankYouMsg.classList.add('d-none');
        }, 5000);
      }
    }

    window.onload = function() {
      loadCards("All");
      showDetails('med-bowl');
    };
  </script>
</body>
</html>