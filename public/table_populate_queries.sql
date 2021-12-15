INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `user_name`, `email`, `email_verified_at`, `password`, `promotions`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Luiz Fernando', 'Claro', 'LFClaro', 'lfclaro@gmail.com', NULL, '$2y$10$LoBpR3KDdHii4zC1Ja1mW.2gvgdCDURYQye2OAIR6yzuPFH2MGq5m', 1, NULL, '2021-11-27 16:21:31', '2021-11-27 16:21:31'),
(2, 'admin', 'Tim', 'Burns', 'TB123456', 'Tim@mail.com', NULL, '$2y$10$8qbYoyXR55ijBdg5yTC6E.wgzBBhPprdmL6Z2EHs18i0gOrqB4H7O', 1, '9VPmW7JEFnM1DiDB00h1OKUKmOp5uhkW2fUVGmwmjxiDGwU93wdD390DwBZt', '2021-11-27 16:37:24', '2021-11-27 16:37:24'),
(3, 'admin', 'Cez', 'Ak', 'hello', 'hello@hello.com', NULL, '$2y$10$ryO5HUKr0OXxRTQqvTV7zuTGREyEaGE3.OzinEcg3KscwwB3ct2iG', 0, NULL, '2021-12-04 19:16:01', '2021-12-04 19:16:01');

INSERT INTO `countries` (`id`, `name`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Canada', 'North America', NULL, NULL),
(2, 'Japan', 'Asian', NULL, NULL),
(3, 'Turkey', 'Europe', NULL, NULL),
(4, 'Brazil', 'South America', NULL, NULL),
(5, 'France', 'Europe', NULL, NULL),
(6, 'France', NULL, NULL, NULL),
(7, 'United States', NULL, NULL, NULL),
(8, 'China', NULL, NULL, NULL),
(9, 'Spain', NULL, NULL, NULL),
(10, 'Italy', NULL, NULL, NULL),
(11, 'United Kingdoms', NULL, NULL, NULL),
(12, 'Germany', NULL, NULL, NULL),
(13, 'Russia', NULL, NULL, NULL),
(14, 'Malaysia', NULL, NULL, NULL),
(15, 'Mexico', NULL, NULL, NULL),
(16, 'Austria', NULL, NULL, NULL),
(17, 'Hong Kong', NULL, NULL, NULL),
(18, 'Ukraine', NULL, NULL, NULL),
(19, 'Thialand', NULL, NULL, NULL),
(20, 'Saudi Arabia', NULL, NULL, NULL),
(21, 'Greece', NULL, NULL, NULL),
(22, 'Poland', NULL, NULL, NULL),
(23, 'Netherlands', NULL, NULL, NULL),
(24, 'Singapore', NULL, NULL, NULL),
(25, 'Czech Republic', NULL, NULL, NULL),
(26, 'Switzerland', NULL, NULL, NULL),
(27, 'South Africa', NULL, NULL, NULL),
(28, 'Indonesia', NULL, NULL, NULL),
(29, 'Ireland', NULL, NULL, NULL),
(30, 'Romania', NULL, NULL, NULL),
(31, 'Belgium', NULL, NULL, NULL),
(32, 'Denmark', NULL, NULL, NULL),
(33, 'Portugal', NULL, NULL, NULL),
(34, 'Bahrain', NULL, NULL, NULL),
(35, 'India', NULL, NULL, NULL),
(36, 'Australia', NULL, NULL, NULL),
(37, 'Argentina', NULL, NULL, NULL),
(38, 'Sweden', NULL, NULL, NULL),
(39, 'Norway', NULL, NULL, NULL),
(40, 'Tunsia', NULL, NULL, NULL),
(41, 'Domincan Republic', NULL, NULL, NULL),
(42, 'Isreal', NULL, NULL, NULL),
(43, 'Vietnam', NULL, NULL, NULL),
(44, 'Cuba', NULL, NULL, NULL),
(45, 'Nicaragua', NULL, NULL, NULL),
(46, 'Guyana', NULL, NULL, NULL),
(47, 'Egypt', NULL, NULL, NULL),
(48, 'Philippines', NULL, NULL, NULL),
(49, 'Sri Lanka', NULL, NULL, NULL),
(50, 'Honduras ', NULL, NULL, NULL),
(51, 'Georgia', NULL, NULL, NULL),
(52, 'Taiwan', NULL, NULL, NULL),
(53, 'Morocco', NULL, NULL, NULL),
(54, 'Korea', NULL, NULL, NULL);

INSERT INTO `recipes` (`id`, `name`, `description`, `ingredients`, `calories`, `steps`, `rating`, `country_id`, `user_id`, `restaurant_id`, `comments`, `website`, `servings`) VALUES
(1, 'Ratatouille', 'A classic French dish that brings together our favorite vegetables', 'INGREDIENTS\r\n1 large globe or Rosa Bianca eggplant (about 14 ounces), peeled and cut into 1-inch pieces\r\n\r\n1½ teaspoons kosher salt, divided, plus more to taste\r\n\r\n½ cup olive oil, divided\r\n\r\n1 large zucchini, sliced into ¼-inch-thick rounds\r\n\r\n2 pints Sun Gold or cherry tomatoes, divided\r\n\r\n4 thyme sprigs\r\n\r\n3 summer savory sprigs (optional)\r\n\r\n1 bay leaf\r\n\r\n2 medium yellow onions, cut into ½-inch dice\r\n\r\n1 red bell pepper—stemmed, seeded and coarsely chopped\r\n\r\n2 garlic cloves, thinly sliced\r\n\r\nPinch crushed red pepper flakes\r\n\r\n1 cup loosely packed basil leaves, torn\r\n\r\n1 tablespoon finely chopped flat-leaf parsley', NULL, 'DIRECTIONS\r\n1. Toss the eggplant with 1 teaspoon of the salt and allow to drain in a colander for 30 minutes. Pat dry with a paper towel and set aside.\r\n\r\n2. In a large Dutch oven or heavy-bottomed pot over medium-high heat, add 2 tablespoons of the olive oil. When the oil is hot but not smoking, add the eggplant and cook, stirring often, until golden, 8 to 10 minutes. If the eggplant absorbs all the oil and begins to stick to the bottom, add more oil as needed. Remove the eggplant and set aside in a medium bowl. Add 2 more tablespoons of the olive oil to the pot and cook the zucchini until golden but not completely tender, 2 to 4 minutes. Remove and transfer to the bowl with the eggplant. Do not wash out the pot.\r\n\r\n3. Using your hands, crush half of the tomatoes and season them with ½ teaspoon of the salt and set aside.\r\n\r\n4. Using kitchen twine, tie the thyme, savory and bay leaf sprigs together. In the same pot, heat the remaining ¼ cup of the oil. Add the onions and herb bundle, and cook until soft and translucent, 8 to 10 minutes. Add the bell pepper and cook, stirring occasionally, until the onions and red pepper are very soft, 14 to 16 minutes. Add the garlic and red pepper flakes and cook until fragrant, 1 to 2 minutes. Add the crushed tomatoes, then reduce the heat to medium low and cook until the tomatoes are very soft and the flavors have melded together, 8 to 10 minutes. Add the reserved eggplant and zucchini and the remaining tomatoes, and stir 2 to 3 times to combine. Season with salt, cover and reduce the heat to low. Cook until all the vegetables have softened, 12 to 15 minutes. Remove from the heat, adjust the seasoning as needed and discard the herb bundle. Top with the basil and parsley, and serve.', 5, 5, NULL, NULL, 'This Provençal stew doesn\'t allow for any fuss—and it shouldn\'t, seeing as it uses up all those beautiful eggplants, tomatoes and peppers from the market (or your garden). The trick is to salt the eggplants ahead of time to extract any excess water, then pat them dry.', 'https://www.tastingtable.com/cook/recipes/how-to-make-ratatouille-french-ratatouille-recipe-eggplant-ratatouille-recipe', 4),
(2, 'Feijoada, Brazilian Black Bean Stew', 'A hearty black bean and mixed meat stew that is often called the national dish of Brazil.', 'Ingredients\r\n1 pound (450 grams) dry black beans\r\n4 tablespoons extra virgin olive oil\r\n1 pound (450 grams) pork shoulder, cut into chunks\r\n2 large onions, sliced\r\n1 head of garlic, peeled and chopped\r\n1 pound (450 grams) carne seca or corned beef, cut into chunks\r\n1/2 pound (225 grams) fresh sausages, such as chorizo or Italian sausage\r\n1 pound (450 grams) smoked sausage, such as linguica or kielbasa\r\n1 smoked ham hock or shank\r\n3-4 bay leaves\r\nWater\r\n1 14.5 ounce can (411 grams) of crushed tomatoes\r\nSalt', NULL, 'Method\r\nSoak beans in hot water\r\nPour boiling water over the black beans and let them sit while you prepare the rest of the stew.\r\n\r\nBrown the pork shoulder\r\nHeat the olive oil in a large pot over medium-high heat and brown the pork shoulder. When the meat has browned, remove the meat from the pot, set aside.\r\n\r\nBrown the onions, add garlic\r\nAdd the onions to the pot. Brown them, stirring occasionally, scraping up any browned bits from the bottom of the pot.\r\n\r\nSprinkle a little salt over the onions and add the garlic. Stir well and sauté 2 more minutes.\r\n\r\nAdd meat, bay leaves, cover with water, simmer\r\nAdd back the pork shoulder, and the other meats and add enough water to cover. Add the bay leaves, cover and bring to a simmer. Cook gently for 1 hour.\r\n\r\nAdd soaked black beans, simmer\r\nDrain the black beans from their soaking liquid and add them to the stew. Simmer gently, covered, until the beans are tender, about an hour and a half.\r\n\r\nAdd tomatoes and simmer\r\nAdd the tomatoes, stir well and taste for salt, adding if it\'s needed. Simmer this, uncovered, until the meat begins to fall off the ham hock, which will probably take 2-3 hours.\r\n\r\nServe with white rice and hot sauce. A classic side dish would be sautéed collard greens.', 5, 4, NULL, NULL, 'Black beans are a must in this recipe if you want it to be authentically Brazilian. A Portuguese version uses white beans, however.', 'https://www.simplyrecipes.com/recipes/feijoada_brazilian_black_bean_stew/', 10),
(3, 'Authentic Canadian Poutine Recipe', 'Authentic Canadian Poutine featuring deep-fried fries, poutine gravy and white cheddar cheese curds all tossed together. Do be careful with deep frying. A proper deep fryer is recommended.', 'Ingredients\r\n\r\nPoutine Gravy:\r\n3 Tbsp cornstarch\r\n2 Tbsp water\r\n6 Tbsp unsalted butter\r\n1/4 cup unbleached all purpose flour\r\n20 oz beef broth\r\n10 oz chicken broth\r\nPepper, to taste\r\nFor Deep Fried Fries:\r\n2 lbs Russet potatoes, (3-4 medium potatoes)\r\nPeanut or other frying oil\r\nToppings:\r\n1 - 1 1/2 cups white cheddar cheese curds, (Or torn chunks of mozzarella cheese would be the closest substitution)', NULL, 'Instructions\r\n \r\nPrepare the gravy: In a small bowl, dissolve the cornstarch in the water and set aside.\r\nIn a large saucepan, melt the butter. Add the flour and cook, stirring regularly, for about 5 minutes, until the mixture turns golden brown.\r\nAdd the beef and chicken broth and bring to a boil, stirring with a whisk. Stir in about HALF the cornstarch mixture and simmer for a minute or so. If you\'d like your gravy thicker, add a more of the cornstarch mixture, in small increments, as needed, to thicken. Season with pepper. Taste and add additional salt, if necessary, to taste. Make ahead and re-warm or keep warm until your fries are ready.\r\nFor Deep-Fried Fries: Prepare your potatoes and cut into 1/2-inch thick sticks. Place into a large bowl and cover completely with cold water. Allow to stand at least one hour or several hours. When ready to cook, heat your oil in your deep fryer or large, wide, heavy cooking pot to 300° F.\r\nRemove the potatoes from the water and place onto a sheet of paper towel. Blot to remove as much excess moisture as possible.\r\nAdd your fries to the 300°F oil and cook for 5-8 minutes, just until potatoes are starting to cook but are not yet browned. Remove potatoes from oil and scatter on a wire rack. Increase oil temperature to 375°F Once oil is heated to that temperature, return the potatoes to the fryer and cook until potatoes are golden brown. Remove to a paper towel-lined bowl.\r\nTo Prepare Poutine: Add your fried or baked fries to a large, clean bowl. Season lightly with salt while still warm. Add a ladle of hot poutine gravy to the bowl and using tongs, toss the fries in the gravy. Add more gravy, as needed to mostly coat the fries.\r\nAdd the cheese curds and toss with the hot fries and gravy. Serve with freshly ground pepper. Serve immediately.', 5, 1, NULL, NULL, 'Notes\r\nBe sure to read the \"Cook\'s Notes\" in the original post, for more tips, options, substitutions and variations for this recipe!', 'https://www.seasonsandsuppers.ca/authentic-canadian-poutine-recipe/', 3),
(4, 'Japanese Deviled Eggs', 'A great twist on an old favourite.', 'Ingredients\r\n\r\n9 eggs\r\n\r\n2 tablespoons sesame seeds\r\n\r\n½ cup mayonnaise\r\n\r\n2 teaspoons soy sauce\r\n\r\n2 teaspoons wasabi paste\r\n\r\n2 teaspoons rice wine vinegar\r\n\r\n2 tablespoons thinly sliced green onions\r\n\r\n4 tablespoons panko bread crumbs', 91, 'DirectionsInstructions Checklist\r\nStep 1\r\nPlace eggs in a saucepan; cover with water. Bring to a boil, remove from heat, and let eggs stand in hot water for 15 minutes. Remove eggs from hot water, cool under cold running water, and peel.\r\n\r\nStep 2\r\nPlace sesame seeds in a dry skillet over medium heat; cook and stir until lightly browned, about 3 minutes. Remove to cool on a plate lined with a paper towel.\r\n\r\nStep 3\r\nCut each egg in half lengthwise; place egg yolks into a food processor with mayonnaise, soy sauce, wasabi paste, and rice vinegar. Process until smooth; place green onion and panko bread crumbs into yolk mixture and pulse just enough to mix evenly.\r\n\r\nStep 4\r\nArrange egg white halves on a serving platter; spoon yolk mixture into whites. Sprinkle with toasted sesame seeds.', 5, 2, NULL, NULL, 'Per Serving: 91 calories; protein 3.6g; carbohydrates 2.1g; fat 7.9g; cholesterol 95.3mg; sodium', 'https://www.allrecipes.com/recipe/236525/japanese-deviled-eggs/', 18),
(5, 'TURKISH-STYLE BEEF KÖFTE KEBAB RECIPE', 'This Turkish-style beef köfte kebab recipe is a perfect grilled dish to make on a hot summer afternoon. ', 'Ingredients\r\n½ onion\r\n1 pound grass-fed ground beef\r\n2-3 cloves garlic\r\n¾ teaspoon fine sea salt\r\nFreshly ground black pepper, 4 grinds\r\n3 Tablespoons freshly chopped parsley\r\nSpice Blend\r\n2 teaspoons Turkish Grill Spice*', NULL, 'Instructions\r\nGrate onion on a box grater or in a food processor. Press through a strainer and squeeze with your hands to get out as much liquid as possible.\r\nPut squeezed onion pulp in a bowl with beef, garlic, salt, pepper, parsley, and your choice of spice mix.\r\nUsing your hands, mix all ingredients together well, squeezing mixture to help break beef into smaller pieces.\r\nPrepare a charcoal grill. Alternatively, and a little later, heat a griddle or large pan over medium high heat. If cooking in a pan or on a griddle, add a small amount of olive oil before cooking kebabs.\r\nThere are two options for forming the beef. If you have wide metal skewers, squeeze about 1/5th of the mixture onto each skewer, using your hands, and flattening as you go. Sometimes this method doesn’t work, and the meat just won’t stick to the skewer. If this is the case, or you don’t have wide metal skewers, form the meat into oval shapes that are about 3 inches long by 1 ½ inches wide. These will grill up just fine. Grill over medium-high heat, getting nice grill marks, for 3-4 minutes per side.\r\nGrill up some tomato, onion, and peppers while cooking the meat. They will add a nice aroma.\r\nServe everything up on a platter and sprinkle with chopped parsley and Aleppo pepper.', 5, 3, NULL, NULL, 'Notes\r\n*If you don’t have Turkish Grill Spice on hand, use 1 teaspoon Aleppo pepper, 1/2 teaspoon ground sumac, and 1/2 teaspoon ground cumin in its place.', 'https://agoodcarrot.com/turkish-style-beef-kofte-kebab-recipe/', 4);

INSERT INTO `recipe_reviews` (`id`, `comment`, `user_id`, `recipe_id`) VALUES
(1, 'This recipe is so good; it\'s now one of my favourites in my arsenal.\r\n\r\nDelicious, healthy, good value, easy to make and stores really well. In fact, the flavour improves over time.\r\n\r\nMy favourite thing is that (if you use fresh vegetables) you can really detect the distinct flavours of the aubergine (egg plant), courgette (zuchini) and tomatoes.\r\n\r\nMerci beaucoup!', 4, 1),
(2, 'Loved the taste！ Easy eggs to prepare they look great on a platter!', 3, 4),
(3, 'Hi, really nice recipe, a bit different from the original and the way we do it in Brazil.\r\nI\'m sorry but I have to tell ya, NO, a big NO for tomatoes, if you like them you can make a \"vinagrete\" that is like a pico de Gallo and put on top in your own plate, don\'t throw it in the feijoada.', 2, 2),
(4, 'Best kebabs I have ever had ', 1, 5),
(5, 'Never liked poutine before, glad I found one I do like!', 4, 3);

INSERT INTO `restaurants` (`id`, `name`, `address`, `rating`, `menu_options`, `phone`, `email`, `website`, `country_id`, `comments`) VALUES
(6, 'Kasa Moto', '115 Yorkville Ave, Toronto, ON M5R 1C1', 5, NULL, '6473487000', NULL, 'https://www.kasamoto.ca/', 2, 'Fine dining for Japanese style foods '),
(7, 'Rio 40 Degrees', '1256 St Clair Ave W, Toronto, ON M6E 1B9', 5, NULL, '4166546363', NULL, 'https://www.rio40restaurant.com', 4, 'Traditional style Brazilain cuisine '),
(8, 'Istanbul Charcoal Grill', '10165 Yonge St #3, Richmond Hill, ON L4C 1T5', 5, NULL, '6478693434', 'info@istanbulgrill.ca', 'https://istanbulgrill.ca', 3, 'One of the best places to have kebab'),
(9, '416 Snack Bar', '181 Bathurst St, Toronto, ON M5T 2R7', 5, NULL, '4163649320', NULL, 'https://www.416snackbar.com', 1, 'Great place to have Canadian (multi-cultural) style snack-size dishes '),
(10, 'Alo', '163 Spadina Ave., Toronto, ON M5V 2L6', 5, NULL, '4162602222', 'info@alorestaurant.com', '', 5, 'https://alorestaurant.com/');

INSERT INTO `restaurant_reviews` (`id`, `comment`, `restaurant_id`, `user_id`) VALUES
(1, 'Very tasty food, great service and amazing drinks', 6, 4),
(2, 'lively staff, great-tasting food, cool atmosphere at the right price.', 7, 2),
(3, 'amazing place, loved all the food we got. the place is small but is decorated nicely.  ', 6, 3),
(4, 'best store-bought kebabs ever!', 8, 1);