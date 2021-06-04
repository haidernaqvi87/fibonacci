REQUIREMENTS:

PHP 7.2 or higher

Apache


HOW TO RUN:

Go to the root of the folder and run the following commands

composer update

php -S localhost:8000

go to the browser and hit the url http://localhost:8000?number=10


MY THOUGHTS:

To be honest, I started with the typical developer approach using the 
recursive way but on the course I realized that there is a depth limit
for the recursion and fibonacci nth number grows dramatically. So I decided  
to go with the classic while loop approach!.

I implemented the interface and set the return type to float. I could not 
go with the integer because php int limit is 2147483647 in 32 bit systems,
and 9223372036854775807 in 64 bit systems.

Moreover, I tried to follow SOLID design principles and open the URL for a 
get request.


