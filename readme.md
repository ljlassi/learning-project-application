CURRENT FUNCTIONALITY:

Is able to add products (saves them to a MySQL database) and display products.

BACKGROUND:

I haven't done enough stuff with plain PHP recently so I figured out I might as well do something now. The plan is to make an application here and then build a microservice and integrate this with the microservice. This is a very quickly done project too, one of my goals is to test my efficiency in producing plain-PHP back-end code.

DISCLAIMER:

This is a quickly done project so I would recommend going through the code before actually deploying this anywhere. I am confident that this is safe to use, however I would advise caution before deplyoing this into actual use in a public server. Also do not push config.php into a public repository if you are using this on a public server, you should first change the code by moving PROJECT_DIR and SITE_URL constants to env_local.php, for safety reasons.

HOW TO DEPLOY:

Make sure that you have PHP version 7.2 or above, have an up to date MySQL version installed and a database created. I used uft8_swedish_ci with the database. Download the code or clone the repository, add the code to your server.

Add your MySQL credentials to env_local.php (use env_local_example.txt to see what to do). After this edit config.php to add base directory and site url (sorry, I am yet to move these two things to env_local.php, please do that if you plan to use this with a public repository).

Afterwards run prepare_database.php and you are ready to go!
