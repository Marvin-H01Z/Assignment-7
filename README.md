# Assignment-6 MySQL Fundamentals
# Installation of the database in your university server
Because we are using the same PHPMyadmin for all users in the university server, there are some
changes to the SQL script. Please make sure that you follow this part before doing the exercise
below.
  1. Open file create_db_template.sql in Visual Studio Code
  2. Replace xxxx with your student ID (Your username for login to the PhPMyAdmin)
     
      To prevent mistake, please use the function Replace in your editor
      *in Visual Studio Code (Edit → Replace, or CTRL+h)
     
      ![image](https://github.com/Shibaura-WebDesign-2024/Assignment-6/assets/167336534/fec09381-ab08-4959-88ce-ad66204f7be7)
     
      Figure 1 Replacing the word in VS Code using Replace function

  3.	Save the mysql code as “create_db.sql” in your computer. Please do not delete this file as you can always return to restore this 
  database when something goes wrong.
  4.	Import the code in PHPMyadmin in the server. 
  5.	Please refer to the demo in the class how to access PHPMyadmin in the server and how to import the SQL file to generate the database.
  The link to access PHPMyadmin: (require VPN connection to SIT)

        http://172.21.82.208/shared/phpMyAdmin/

        ![image](https://github.com/Shibaura-WebDesign-2024/Assignment-6/assets/167336534/52dbd09b-48aa-459f-a121-2f49b7d6198c)

        Figure 2 Login to phpMyAdmin in the university server

# Part 1: Enhance the Guitar Shop application
Change the name of your database
1.	Open part1/model/database.php in VS Code
2.	Replace the database name with your database name (xxxxxx). 
3.	Change the value of $username and $password to your username and password for SSH
4.	Save the file

Test the Guitar Shop application 

1.	Start the Chrome browser and run the application in part1 directory. This should display a menu that lets you navigate to the Product Manager application or the Product Catalog application.
2.	Use the Product Manager application to add a new product to the database with Guitars as the category, test1 as the code, Test Product 2211 as the name, and 550.00 as the list price.
3.	Go to the Product Catalog application. To do that, you can use the Back button or run the application again. Then, view the product that you just added. Note that it doesn’t display an image for the product. To fix that, go to the images directory and change the name of the test.png file to test1.png.
4.	Go to the Product Manager application again. Then, click on the List Categories link at the bottom of the page. Note that this link doesn’t display a page, even though it is coded correctly. You’ll fix this later when you enhance the index.php page for this application. Now, click the Back button. 

Enhance the Product Manager application 

5.	Now, you’ll add a page to the Product Manager application that lets you add or delete categories. Using the MVC pattern. The new page should look like figure 3.

