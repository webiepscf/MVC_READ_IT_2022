<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

    <!-- SEARCHBAR -->
    <?php include '../app/views/templates/partials/_search.php'; ?>

    <!-- LISTE DES CATÉGORIES -->
    <?php
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    include '../app/views/categories/_index.php';
    ?>

    <!-- RECENT BLOG -->
    <?php
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findRecents($connexion);
    include '../app/views/posts/_recents.php';
    ?>

    <div class="sidebar-box ftco-animate">
        <h3>Tag Cloud</h3>
        <div class="tagcloud">
            <a href="#" class="tag-cloud-link">cat</a>
            <a href="#" class="tag-cloud-link">abstract</a>
            <a href="#" class="tag-cloud-link">people</a>
            <a href="#" class="tag-cloud-link">person</a>
            <a href="#" class="tag-cloud-link">model</a>
            <a href="#" class="tag-cloud-link">delicious</a>
            <a href="#" class="tag-cloud-link">desserts</a>
            <a href="#" class="tag-cloud-link">drinks</a>
        </div>
    </div>

</div>