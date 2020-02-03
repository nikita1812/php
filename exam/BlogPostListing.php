<!DOCTYPE HTML>
<html>

<head>
    <title>
        Blog Post Page
    </title>
</head>

<body>
    <form id="myfrom" action="CategoryListPage.php" method="POST">
        <fieldset>
            <div>
                <input type="submit" name="ManageCategory" value="Manage Category">
                <input type="button" name="My Profile" value="My Profile">
                <input type="button" name="Log Out" value="Log Out">
            </div>
            <h1>Blog Posts</h1>
            <div>
                <input type="submit" name="AddBlogPost" value="Add Blog Post" onclick="document.forms['myform'].action='AddBlogPost.php'">
            </div>
        </fieldset>
    </form>
</body>