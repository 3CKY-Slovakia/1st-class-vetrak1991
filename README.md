# HTML5 & Responsive Web

Hey guys, and welcome to your first STI Labs lesson on Introduction to Web Technologies.

##Where you find power point presentations?
Just take a look into presentation folder in the repository.

##What's your homework?
Use your creativity and change the HTML template in repository. Your goals is to focus on responsiveness, using TWBS and custom made CSS (append to the assets/css/master.css file). You can seek for some inspiration on http://getbootstrap.com/getting-started/#examples.

##How to work with GitHub version control system?
Whole idea of using VCS is to effectively manage parallel programming and handle sub versions of information system.
GitHub will provide us with additional services, as Distribution of starter codece, interface to give students feedback, or to collect assignments. During whole process, I'll be able to see your code and progress.

###How to use GitHub?
1. Send me your GitHub account name to my e-mail address (given during classes)
2. I'll send you the invitation link
3. After accepting the invitation, the copy of starter code will be created for you
4. You'll be redirected to your new repository named ClassName-YourGitHubName
5. Open PhpStorm
6. Choose Checkout from version control > GitHub
7. Click Test button
8. Choose particular repository in Git Repository URL
9. Set up parent directory
10. Click Clone button
11. Your project is ready to use


## How to use Twitter Bootstrap?
For your 1st lesson, you'll need to import Bootstrap into your project:

1. Download latest stable source version of Twitter Bootstrap (TWBS) from http://getbootstrap.com/getting-started/#download
2. Download latest stable jQuery source version from https://jquery.com/download/
3. Copy paste bootstrap files in to your preferable assets folder (eg. assets/vendor/bootstrap/)
4. Link TWBS CSS files in the head of the HTML file:
```
    <!-- Twitter Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-3.3.5/css/bootstrap-theme.css"/>
```
5. Link jQuery and TWBS JS files just before the end of body tag:
```
    <!-- JS Files -->
    <script src="assets/vendor/jQuery/js/jquery-1.11.3.js"></script>
    <script src="assets/vendor/bootstrap-3.3.5/js/bootstrap.js"></script>
```
