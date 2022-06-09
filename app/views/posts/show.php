<?php
/*
    Variables disponibles:
        $post: ARRAY(id, title, content, image, created_at, ...)
*/
?>
<p class="mb-5">
    <img src="assets/images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>

<div>
    <?php echo $post['content']; ?>
</div>

<!-- TAGS -->
<?php
include_once '../app/models/tagsModel.php';
$tags = \App\Models\TagsModel\findAllByPostId($connexion, $post['id']);
include '../app/views/tags/_indexByPostId.php';
?>


<!-- AUTHOR -->
<?php
include_once '../app/models/authorsModel.php';
$author = \App\Models\AuthorsModel\findOneById($connexion, $post['author_id']);
include '../app/views/authors/_show.php';
?>


<div class="pt-5 mt-5">
    <!-- COMMENTS -->
    <?php
    include '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connexion, $post['id']);
    include '../app/views/comments/_indexByPostId.php';
    ?>

    <?php include '../app/views/comments/_form.php'; ?>

</div>