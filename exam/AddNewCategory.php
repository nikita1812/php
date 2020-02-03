<!DOCTYPE HTML>
<html>

<head>
    <title>
        Add New Category
    </title>
</head>

<body>
    <?php
    require_once 'session.php';
    setSession('category');
    ?>
    <form id="myfom" action="CategoryListPage.php" method="POST">
        <fieldset>
            <h1 align='center'>Add New Category</h1>
            <div>
                <label>Title</label>
                <input type="text" name="category[Title]" value="<?php echo getValue("category", "Title"); ?>" require>
            </div>
            <div>
                <label>Content</label>
                <input type="Content" name="category[Content]" value="<?php echo getValue("category", "Content"); ?>" require>
            </div>
            <div>
                <label>URL</label>
                <input type="url" name="category[URL]" value="<?php echo getValue("category", "URL"); ?>" require>
            </div>
            <div>
                <label>Meta Title</label>
                <input type="text" name="category[MetaTitle]" value="<?php echo getValue("category", "MetaTitle"); ?>" require>
            </div>
            <div>
                <label]>Parent Category</label>
                    <select name="category[ParentCategory]" require><?php echo getValue("category", "ParentCategory"); ?>
                        <option disabled>Choose one</option>
                        <?php $ParentCategory = array('Education', 'Lifestyle', 'Health'); ?>
                        <?php foreach ($ParentCategory as $value) : ?>
                            <?php $selected = $value == getValue("category", "ParentCategory") ? 'selected' : ''; ?>
                            <option value="<?php echo $value; ?>" <?php echo $selected; ?>>
                                <?php echo $value; ?></option>
                        <?php endforeach ?>
                    </select>
            </div>
            <div>
                <label>Image</label>
                <input type="image" name="Iamge" value="<?php echo getValue("category", "Image"); ?>" require>
            </div>
            <div>
                <input type="submit" value="SUBMIT">
            </div>
        </fieldset>
    </form>
</body>

</html>