<!DOCTYPE HTML>
<html>

<head>
    <title>
        Category List page
    </title>
</head>

<body>
    <form action="AddNewCategory.php" method="POST">
        <fieldset>
            <div>
                <input type="submit" name="ManageCategory" value="Manage Category">
                <input type="button" name="My Profile" value="My Profile">
                <input type="button" name="Log Out" value="Log Out">
            </div>
            <h1>Blog Category</h1>
            <div>
                <input type="submit" name="AddCategory" value="Add Category" onclick="document.forms['myform'].action='AddNewCategory.php'">
            </div>
        </fieldset>
    </form>
</body>