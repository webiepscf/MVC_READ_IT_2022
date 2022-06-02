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



    <!-- FORM COMMENTS -->
    <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Leave a comment</h3>
        <form action="#" class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="postId" value="4" />
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
    </div>
</div>