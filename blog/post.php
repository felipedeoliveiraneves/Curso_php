<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }

?>
 <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, rem dolorum velit autem sit quia possimus, repellendus dolorem esse deleniti delectus alias id, nesciunt officiis nostrum aut odit labore qui?
        Provident itaque dolores animi, sint perferendis architecto at doloremque atque modi quibusdam reiciendis sunt excepturi vitae suscipit omnis perspiciatis deleniti eligendi neque, dolorum laudantium explicabo iste in doloribus quam! Vitae.
        Nihil dolore consectetur commodi, quibusdam a rerum aliquam sequi minima expedita. Porro asperiores tenetur, ratione dignissimos repellat optio, suscipit praesentium eaque soluta illo delectus nam nobis quidem beatae a ea!
        Laboriosam accusantium voluptatem hic temporibus, incidunt at ipsam ducimus est corporis excepturi, quisquam eveniet consequuntur aliquid nihil voluptatibus iure dolores magnam error, delectus veniam quo debitis accusamus. Inventore, labore ad.
        Accusamus, exercitationem! Hic esse nobis dolores, placeat dicta distinctio nemo, quos possimus, voluptatibus officiis inventore. Iure reprehenderit quasi doloribus ipsam cupiditate quia sit natus quos ad culpa! Provident, ipsam ab.</p>
    
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, rem dolorum velit autem sit quia possimus, repellendus dolorem esse deleniti delectus alias id, nesciunt officiis nostrum aut odit labore qui?
        Provident itaque dolores animi, sint perferendis architecto at doloremque atque modi quibusdam reiciendis sunt excepturi vitae suscipit omnis perspiciatis deleniti eligendi neque, dolorum laudantium explicabo iste in doloribus quam! Vitae.
        Nihil dolore consectetur commodi, quibusdam a rerum aliquam sequi minima expedita. Porro asperiores tenetur, ratione dignissimos repellat optio, suscipit praesentium eaque soluta illo delectus nam nobis quidem beatae a ea!
        Laboriosam accusantium voluptatem hic temporibus, incidunt at ipsam ducimus est corporis excepturi, quisquam eveniet consequuntur aliquid nihil voluptatibus iure dolores magnam error, delectus veniam quo debitis accusamus. Inventore, labore ad.
        Accusamus, exercitationem! Hic esse nobis dolores, placeat dicta distinctio nemo, quos possimus, voluptatibus officiis inventore. Iure reprehenderit quasi doloribus ipsam cupiditate quia sit natus quos ad culpa! Provident, ipsam ab.</p>
    </div>

    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul class="tags-list">
         <?php foreach($currentPost['tags'] as $tag): ?> 
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
       </ul>
       <h3 id="categories-title">Categorias</h3>
        <ul id="categories_list"> 
        <?php foreach($categories as $category): ?> 
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
 </aside>
   
 </main>
<?php
    include_once("templates/footer.php");
?>