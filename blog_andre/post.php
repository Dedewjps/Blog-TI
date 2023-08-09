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
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati, odit illo quaerat eum ullam iusto. Ullam quas tempore dolore eius recusandae. Quas recusandae facere reiciendis minima, laudantium magni beatae?
            Assumenda quidem consequatur asperiores beatae ullam excepturi quaerat! Aliquid fugiat nisi quasi voluptatum, expedita similique officiis veniam assumenda mollitia sunt? Officia quia rem et doloremque excepturi optio veniam dolore quas.
            Eos ipsam quod vel ipsa sequi dolorem consectetur aperiam eligendi, necessitatibus nostrum, veniam, doloremque consequuntur eum quos accusantium. Maxime saepe debitis, necessitatibus sed quaerat blanditiis dolorem qui minima alias iure?
            Maiores voluptatum quae quidem libero odit doloribus exercitationem incidunt similique quia nobis molestiae iste, autem voluptas voluptatibus quam nulla necessitatibus doloremque id eaque voluptatem enim commodi? Rerum sit a quaerat.
            Consequuntur eos doloribus, delectus sequi a culpa vitae quis impedit veniam molestiae, velit aliquam nihil! Corporis veniam quibusdam, deserunt placeat corrupti quo error incidunt veritatis aspernatur, ducimus possimus eveniet velit!</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
              <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
              <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php")
?>