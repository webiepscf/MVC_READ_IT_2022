<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
        <img src="assets/images/<?php echo $author['image']; ?>" alt="<?php echo $author['firstname']; ?> <?php echo $author['lastname']; ?>" class="img-fluid mb-4">
    </div>
    <div class="desc">
        <h3>
            <?php echo $author['firstname']; ?>
            <?php echo $author['lastname']; ?>
        </h3>
        <div>
            <?php echo $author['biography']; ?>
        </div>
    </div>
</div>