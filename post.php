<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }

    }

}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost['title'] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?php $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis molestiae autem illum,
            distinctio natus ab totam delectus. Dolores perferendis modi nostrum, saepe illum pariatur beatae, eligendi
            earum quasi, velit nulla!
            Necessitatibus blanditiis quae soluta sunt obcaecati fuga odio. Corrupti sint maiores soluta corporis,
            inventore ab doloremque hic ducimus saepe veritatis, nemo officia neque, porro deserunt eaque quia maxime
            ullam facere.
            Placeat odit, reiciendis amet, dolore aliquam porro similique tempora autem dolores inventore atque ratione
            eos unde? Similique, libero. Similique nisi aperiam, praesentium repellendus hic vitae voluptatem
            necessitatibus incidunt excepturi nesciunt?
            Quibusdam illum deleniti, nisi officia et deserunt omnis totam vel ullam libero exercitationem cumque
            possimus vitae laudantium esse ab saepe. Numquam voluptatem atque repudiandae, impedit maiores hic quasi
            libero blanditiis!
        </p>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis molestiae autem illum,
            distinctio natus ab totam delectus. Dolores perferendis modi nostrum, saepe illum pariatur beatae, eligendi
            earum quasi, velit nulla!
            Necessitatibus blanditiis quae soluta sunt obcaecati fuga odio. Corrupti sint maiores soluta corporis,
            inventore ab doloremque hic ducimus saepe veritatis, nemo officia neque, porro deserunt eaque quia maxime
            ullam facere.
            Placeat odit, reiciendis amet, dolore aliquam porro similique tempora autem dolores inventore atque ratione
            eos unde? Similique, libero. Similique nisi aperiam, praesentium repellendus hic vitae voluptatem
            necessitatibus incidunt excepturi nesciunt?
            Quibusdam illum deleniti, nisi officia et deserunt omnis totam vel ullam libero exercitationem cumque
            possimus vitae laudantium esse ab saepe. Numquam voluptatem atque repudiandae, impedit maiores hic quasi
            libero blanditiis!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php");
?>