SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `users` (
  `email` varchar(20) NOT NULL PRIMARY KEY,
  `username` varchar(20) NOT NULL UNIQUE,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('abc@gmail.com', 'abc', '123456987'),
('pqr@gmail.com', 'pqr', '123456'),
('xyz@gmail.com', 'xyz1234', '12345678');


CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dishName` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `file1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `dishName`, `ingredients`, `instructions`, `email`, `file1`) VALUES
(1, 'Dosa', '1 ½ cups long-grain rice (such as basmati)\r\nBasmati rice\r\n½ cup urad dal (whole black gram, skinned)\r\n½ teaspoon fenugreek seeds\r\n¼ cup poha (flattened rice)\r\n2 tablespoons chana dal (split Bengal gram)', 'Soak the rice and lentils: Rinse 1 ½ cups of long-grain rice, ½ cup urad dal, and ½ teaspoon fenugreek seeds in water for 4-5 hours. You can also soak them overnight for a deeper fermentation.\r\nGrind the urad dal: Drain the soaked lentils and fenugreek seeds. In a blender, grind the urad dal with ¾ cup of water to a smooth and creamy batter.\r\nGrind the rice: Rinse the soaked rice again. Grind it with ½ cup of water (you may need a little more depending on your blender) to a slightly coarse batter.\r\nCombine and ferment: In a large bowl, mix the urad dal batter and rice batter together. Add salt to taste. If using, you can also add ¼ cup poha (flattened rice) and 2 tablespoons chana dal (split Bengal gram) at this point. Cover the bowl and let the batter ferment in a warm place for 8-12 hours, or until doubled in size.\r\n\r\nCooking the Dosa:\r\nHeat the griddle: Heat a flat griddle or tawa over medium heat. You can test if it\'s hot enough by sprinkling a few drops of water; if they sizzle and evaporate quickly, the griddle is ready.\r\nGrease the griddle: Using a ladle or spoon, spread a thin layer of oil on the hot griddle.\r\nCook the dosa: Pour a ladleful of batter onto the greased griddle, spreading it into a thin circle with the back of the ladle.\r\nCook until crispy: Drizzle a little oil around the edges of the dosa. Cook for 1-2 minutes, or until the bottom is golden brown and the edges start to crisp.\r\nServe: Fold the dosa in half or roll it up. Serve hot with coconut chutney and sambar.', 'abc@gmail.com', 'dosa.jpg'),
(2, 'Adobo', '2 lbs pork belly\r\n2 tablespoons garlic minced or crushed\r\n5 dried bay leaves\r\n4 tablespoons vinegar\r\n1/2 cup soy sauce\r\n1 tablespoon peppercorn\r\n2 cups water\r\nSalt to taste', '1. Combine the pork belly, soy sauce, and garlic then marinade for at least 1 hour\r\n2. Heat the pot and put-in the marinated pork belly then cook for a few minutes\r\n3. Pour remaining marinade including garlic.\r\n4. Add water, whole pepper corn, and dried bay leaves then bring to a boil. Simmer for 40 minutes to 1 hour\r\n5. Put-in the vinegar and simmer for 12 to 15 minutes\r\n6. Add salt to taste\r\n7. Serve hot. Share and enjoy!', 'pqr@gmail.com', 'noodles.jpg'),
(3, 'Sizzling Porkchop', '1 piece 8 oz pork loin chop\r\n1 cup beef broth\r\n1/4 teaspoon salt\r\n1/4 teaspoon ground black pepper\r\n1/4 teaspoon garlic powder\r\n3/4 cup mixed vegetables cooked\r\n3 tablespoons all-purpose flour\r\n4 tablespoons butter\r\n1 cup yellow rice', '1. Rub salt, ground black pepper, and garlic powder on the pork tenderloin chop. Let it stay for at least 30 minutes.\r\n2. Make the gravy by melting 1 tablespoon butter in a saucepan. When the butter melts, gradually add the flour and whisk until the color turns light brown. Pour-in the beef broth and stir. Add salt and pepper according to taste. Continue cooking until the texture becomes thick. Set aside.\r\n3. Heat a skillet of frying pan then put-in 2 tablespoons of butter and let melt.\r\n4. Pan-fry the pork loin chop in medium heat until the color of each side turns light brown (approximately 7 to 8 minutes per side). Set aside.\r\n5. Heat a sizzling plate or fajita plate then put-in 1 tablespoon butter.\r\n6. Distribute the butter around the plate then arrange rice, mixed vegetables, and pork loin chop.\r\n7. Pour gravy over the pork loin chop then turn-off heat.\r\n8. Serve. Share and enjoy!', 'xyz@gmail.com', 'Porkchop.webp'),
(4, 'Omelette', '3 eggs, beaten\r\n1 tsp sunflower oil\r\n1 tsp butter', '1. Beat the eggs: Use two or three eggs per omelette, depending on how hungry you are. Beat the eggs lightly with a fork.\r\n2. Melt the butter: Use an 8-inch nonstick skillet for a 2-egg omelette, a 9-inch skillet for 3 eggs. Melt the butter over medium-low heat, and keep the temperature low and slow when cooking the eggs so the bottom doesn\'t get too brown or overcooked.\r\n3. Add the eggs: Let the eggs sit for a minute, then use a heatproof silicone spatula to gently lift the cooked eggs from the edges of the pan. Tilt the pan to allow the uncooked eggs to flow to the edge of the pan.\r\n4. Fill the omelette: Add the filling—but don\'t overstuff the omelette—when the eggs begin to set. Cook for a few more seconds\r\n5. Fold and serve: Fold the omelette in half. Slide it onto a plate with the help of a silicone spatula.', 'abc@gmail.com', 'Omelette.webp'),
(5, 'Sinigang', '2 lbs pork belly or buto-buto\r\n1 bunch spinach or kang-kong\r\n3 tablespoons fish sauce\r\n12 pieces string beans sitaw, cut in 2 inch length\r\n2 pieces tomato quartered\r\n3 pieces chili or banana pepper\r\n1 tablespoons cooking oil\r\n2 quarts water\r\n1 piece onion sliced\r\n2 pieces taro gabi, quartered\r\n1 pack sinigang mix good for 2 liters water', '1. Heat the pot and put-in the cooking oil\r\n2. Sauté the onion until its layers separate from each other\r\n3.Add the pork belly and cook until outer part turns light brown\r\n4. Put-in the fish sauce and mix with the ingredients\r\n5. Pour the water and bring to a boil\r\n6. Add the taro and tomatoes then simmer for 40 minutes or until pork is tender\r\n7. Put-in the sinigang mix and chili\r\n8. Add the string beans (and other vegetables if there are any) and simmer for 5 to 8 minutes\r\n9. Put-in the spinach, turn off the heat, and cover the pot. Let the spinach cook using the remaining heat in the pot.\r\n10. Serve hot. Share and enjoy!', 'pqr@gmail.com', 'Sinigang.webp'),
(6, 'Lumpia', '50 pieces lumpia wrapper (Up to you how many pieces)\r\n3 cups cooking oil\r\n1 1/2 lbs ground pork\r\n2 pieces onion minced\r\n2 pieces carrots minced\r\n1 1/2 teaspoons garlic powder\r\n1/2 teaspoon ground black pepper\r\n1/2 cup parsley chopped\r\n1 1/2 teaspoons salt\r\n1 tablespoon sesame oil\r\n2 eggs', '1. Combine all filling ingredients in a bowl. Mix well.\r\n2. Scoop around 1 to 1 1/2 tablespoons of filling and place over a piece of lumpia wrapper. Spread the filling and then fold both sides of the wrapper. Fold the bottom. Brush beaten egg mixture on the top end of the wrapper. Roll-up until completely wrapped. Perform the same step until all mixture are consumed.\r\n3. Heat oil in a cooking pot. Deep fry lumpia in medium heat until it floats.\r\n4. Remove from the pot. Let excess oil drip. Serve. Share and enjoy', 'xyz@gmail.com', 'Lumpia.webp'),
(7, 'Longaniza', '1 ¾ lbs. ground pork\r\n9 tablespoons dark brown sugar\r\n1 tablespoon smoked paprika\r\n3 tablespoons vegetable oil\r\n1 ¼ tablespoons coarse salt\r\n1 teaspoon ground black pepper\r\n2 head garlic', '1. Peel the skin off the garlic cloves. Crush thoroughly using mortar and pestle. Mince the crushed garlic. Set aside.\r\n2. In a large mixing bowl, combine ground pork along with all of the ingredients. Mix well.\r\n3. Cover the bowl. Refrigerate for 2 hours.\r\n4. Shape the longganisa by laying a sheet of wax paper on a flat surface. Scoop around 3 tablespoons of mixture and put over the wax paper. Fold the wax paper from top to down until the mixture covered. Hold the edge of the paper with your fingers and then slide the card towards the mixture. Push a bit more until a sausage shape is formed. Do this step until the entire mixture is consumed.\r\n5. Refrigerate overnight.\r\n6. Cook and serve for breakfast. Share and enjoy!', 'abc@gmail.com', 'Longanisa.webp'),
(8, 'Chicken Burger', '3 boneless chicken breasts (around half a kg)\r\n1 tspn of pepper\r\n1 tspn of salt\r\n2 tblspns of worcestershire sauce\r\n1 tspn of Mustard powder or all spice powder\r\n2 tblspns of Flour\r\n1 Egg\r\n1 1/2 cups of Breadcrumbs\r\nSoft seeded burger buns\r\nMayonnaise or KFC Zinger Sauce', '1. If your chicken breasts are too big, slice them before cooking. Then, marinade the chicken breasts in the Worcestershire sauce, pepper, salt, mustard, or all-spice powder. Leave the chicken for at least four hours or over night.\r\n2. An egg and two tablespoons of water should be beaten together to make the batter, which should then be set aside.\r\n3. Chicken breasts that have been marinated should be heavily dusted in flour. They should be well coated after being dipped in both the egg and the breadcrumbs.\r\n4. The coated chicken breasts should be deep-fried in heated oil over a medium-high heat until they are crisp and golden brown.\r\n5. The finished burger should be stacked with the lettuce on top, followed by the chicken, and then the mayonnaise or KFC zinger sauce. The buns should be cut in half and lightly toasted. If you\'d like a cheesy kick, add some sliced American cheese.', 'pqr@gmail.com', 'Burger.webp'),
(9, 'Menudo', '1/4 cup cooking oil\r\n2 pcs potatoes, medium sized, cut in cubes\r\n1 pc carrot, medium sized, cut in cubes\r\n6 cloves garlic, minced\r\n1 pc onion, minced\r\n250 grams pork kasim, cut into small cubes\r\n250 grams pork liempo, cut into small cubes\r\n250 grams pork liver, cut in small cubes\r\n1 (250 g) pack tomato sauce\r\n2 pcs Knorr Pork Broth Cube\r\n1 1/2 cups water\r\n1 tsp sugar\r\nground black pepper to taste\r\n2 tbsp raisins\r\n1 cup cubed red and green bell pepper\r\nOptional: 2 bunches Bok-choi, sliced', 'Let\'s begin by sautéing the onion and garlic in hot oil until lightly browned.\r\nAdd the pork kasim and liempo next and fry until slightly brown in color before adding the liver. Cook for 2 minutes.\r\nDrop in the Knorr Pork Broth Cubes and give this a nice stir to dissolve completely before adding the tomato sauce, water, sugar and black pepper. Mix this well.\r\nNow, gently place the potatoes and carrots in the pan. Continue to cook over low heat until meat and potatoes are cooked through and the sauce has thickened.\r\nFinally, add raisins and bell peppers and just allow to cook for 2 minutes longer. If you\'re adding Bok-Choi, add at this point. Here\'s a dish that will bring the entire family together. Pork Menudo, just like home, is always close to your heart.', 'xyz@gmail.com', 'Menudo.webp');

commit;
