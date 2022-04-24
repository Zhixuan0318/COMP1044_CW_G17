# Library Management System (DBMS) | Coursework 2
![cover page (2)](https://user-images.githubusercontent.com/69501009/164965195-3638dace-a3c1-460f-b658-6f6c109befd9.png)

**Done by**: Group 17  
**Languages**: HTML, CSS, JS, PHP, SQL  
**Module**: COMP1044

##  Synopsis
A Library Management System (DBMS) which has a front-end user interface connecting to the database and perform queries using PHP and SQL. The functionalities of the system includes:
* User authentication
* Database insights
* Adding a book
* Adding a member
* Searching a book
* Searching a member
* Update borrow details
* Update member details
* Deleting a book
* Deleting a member

## Setup
1) Download the ZIP file and extract it 
2) Pull the entire 'LMS' file into htdocs (File hierachy is important)
3) Open XAMPP and start Apache and MySQL
4) Search in the browser: localhost/LMS/home.php

## Importing database
1) Download the 'library.sql' file
2) Create a new database: library
3) Import the 'library.sql' database records

## Reports
1) Coursework Report (Task A and Task B): Click [here](https://docs.google.com/document/d/17YUBVp7ML0-aaDV-ZwK_i96Khcvctph70sp4EUlh5nI/edit?usp=sharing) or link: https://docs.google.com/document/d/17YUBVp7ML0-aaDV-ZwK_i96Khcvctph70sp4EUlh5nI/edit?usp=sharing 
2) Work breakdown structure: Click [here](https://docs.google.com/document/d/1wIrDQAa_I3qw5v-DXFbgpf0RvWNjK-pkGTo-XezbcQ8/edit?usp=sharing) or link: https://docs.google.com/document/d/1wIrDQAa_I3qw5v-DXFbgpf0RvWNjK-pkGTo-XezbcQ8/edit?usp=sharing 

## Video Demo
We had prepared a 5 minutes video to demo all the function of the website. Cick [here](https://drive.google.com/file/d/1wmmtgNT_-8nMGBdfvpJeIJnrgXM2lqL4/view?usp=sharing) to view in google drive, OR copy and paste the link in browser: https://drive.google.com/file/d/1wmmtgNT_-8nMGBdfvpJeIJnrgXM2lqL4/view?usp=sharing

## Additional Info:

### Changes made to the database:
* Changed ‘type_id’ in ‘member’ table instead of ‘borrower_type’ to match Primary Keys. hence the data type changed from VARCHAR to INT.
* Corrected all the indexes of tables so they start from 1 instead of the default data given.
* To increase efficiency in running SQL statements, merged the table borrow details with borrow. As well as dropped the category table and added a category column in the book instead.
* Added ‘user_id’ and ‘book_id’ to the ‘member’ table in order to connect all the tables through ‘book’ and ‘member’ tables.
* Added 2 more personnel in the user table to expand the accessibility to the database.
* Added appropriate numbers to the contact column in the ‘member’ table.
* Added dates and time to the ‘date_received’ column in the ‘book’ table.
* Added dummy data for ‘book_id’ in ‘member’ and ‘borrow’ tables. As well as dummy data for ‘user_id’ in the ‘member’ table.
* Added ‘borrow_id’ in the ‘book’ table as well as dummy data to match Primary and Foreign keys.
* Deleted the ‘date_received’ column from the ‘book’ table as it is very similar to ‘date_added’.
* Made 10 users in user table to ensure no errors occur due to the ‘user_id’ being unique.

### Additional features for the website UI/UX (or code)
* Login form to authenticate user before accessing the admin panel.
* Error catching in the login form to prevent wrong credentials and blank form submission.
* SQL injection prevention by reformat the input (remove html special char) before passing the login info for query process.
* Database insight which fetch and display books, member, and borrower info, as well as the last updated time of the library database.
* Display borrow table and member table info as a simple list to let user choose which record to update by just clicking (UX Improvement)
* The chosen updated items previous record data will be fetch and display below at each field (let user know what they are updating currently).
* Scroll to anchor section after selecting items to update
* Search result status display after performing a search, green color ‘found’ and red color ‘not found’.
* Fetching more info for ‘id-type’ data (no useful information to user). For example, when member id is fetch and display, we also perform an additional query to fetch the member name and displayed it 
* Display a simple list for the items that can be deleted, user just have to click the delete icon to delete record. Fast and simple.
* Deletion confirmation popup
* Log out function 

### UI Design Prototype



