# voting_webApp
School Voting App in PHP and MySQL
## Start
Download and install XAMPP,WAMPP or LAMP [ Dowload here ](https://bitnami.com/stacks/installer)
+ Unzip and Install the respective  Stack for your OS
+ Setup and note the password of mysql
+ Navigate to /apache2/htdocs folder 
+ Clone the repo
 `git clone https://github.com/BizBons/voting_webApp.git voting`
+ Start MySql and Apache servers
+ Open your browser and navigate to 
  `localhost:8080 or the port available in your server`
+ Login to phpMyadmin and create a database 
   name the database `olvoting_db`
+ open the cloned repo navigate to [ `voting/DB`  ](https://github.com/BizBons/voting_webApp/blob/master/DB) folder import [ `olvoting_db.sql` ](https://github.com/BizBons/voting_webApp/blob/master/DB/olvoting_db.sql) file to the database.
+ open [`dbconnect.php` ](https://github.com/BizBons/voting_webApp/blob/master/dbconnect.php) file on the editor and update the database credentials
`define("HOST", "localhost");
// Database user
define("DBUSER", "root");
// Database password
define("PASS", "");
// Database name
define("DB", "olvoting_db");`

+ if the database is imported well then navigate to `localhost:8080/voting` and login to use that app.You can edit and change values in the database to suite your uses
