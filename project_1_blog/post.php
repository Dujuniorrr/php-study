<?php
    include_once("templates/header.php");
    if(isset($_GET)){
        $post_id = $_GET['id'];
        $current_post;

        foreach($posts as $post){
            if($post['id'] == $post_id){
                $current_post = $post;
                break;
            }
        }
    }
?>

    <main id="post-container">
       <div class="content-container">
       <h2 id="main-title">
            <?= $current_post['title']; ?>
        </h2>
        <p id="post-description">
            <?= $current_post['description']; ?>
        </p>
        <div id="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $current_post['img'] ?>" alt="<?= $current_post['title']?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, voluptas. Quidem, nobis harum. Facilis quia doloribus totam, perferendis laudantium quasi neque, unde nobis ea asperiores adipisci dolorum alias in dolorem.
            Corrupti sequi ipsam doloremque, est ipsum possimus accusamus maiores inventore mollitia, vitae at, vero quo nulla voluptatibus? Exercitationem quam nemo deleniti quos architecto neque culpa enim facere reiciendis corporis? Totam.
            Nihil, vero quis. Modi iure quidem eveniet inventore maxime delectus, error et nam tempora distinctio repudiandae? Nisi rerum nobis quidem, vel totam voluptates non. Explicabo, commodi. Possimus, vero repellat? Numquam!
            Saepe maxime rem non ipsa, necessitatibus obcaecati eligendi, minus labore libero incidunt minima illum voluptatibus veritatis hic in totam nostrum. Soluta officia fuga asperiores, expedita corporis cupiditate exercitationem minima vel.
            Sint magni eaque placeat, odio reprehenderit nobis asperiores, enim culpa incidunt amet, modi rerum architecto ipsam dicta voluptas facilis cupiditate sequi sunt qui? Ex vero, earum minima officia enim nisi.

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, voluptas. Quidem, nobis harum. Facilis quia doloribus totam, perferendis laudantium quasi neque, unde nobis ea asperiores adipisci dolorum alias in dolorem.
            Corrupti sequi ipsam doloremque, est ipsum possimus accusamus maiores inventore mollitia, vitae at, vero quo nulla voluptatibus? Exercitationem quam nemo deleniti quos architecto neque culpa enim facere reiciendis corporis? Totam.
            Nihil, vero quis. Modi iure quidem eveniet inventore maxime delectus, error et nam tempora distinctio repudiandae? Nisi rerum nobis quidem, vel totam voluptates non. Explicabo, commodi. Possimus, vero repellat? Numquam!
            Saepe maxime rem non ipsa, necessitatibus obcaecati eligendi, minus labore libero incidunt minima illum voluptatibus veritatis hic in totam nostrum. Soluta officia fuga asperiores, expedita corporis cupiditate exercitationem minima vel.
            Sint magni eaque placeat, odio reprehenderit nobis asperiores, enim culpa incidunt amet, modi rerum architecto ipsam dicta voluptas facilis cupiditate sequi sunt qui? Ex vero, earum minima officia enim nisi.
        </p>
       </div>
       <aside>
        <div id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <div class="tags-container">
                <ul id="tags-list">
                    <?php
                        foreach($current_post['tags'] as $tag):
                    ?>
                        <li>
                            <a href=""><?= $tag; ?></a>
                        </li>
                    <?php
                        endforeach;
                    ?>
                </ul>  
            </div>
            <h3 id="categories-title">Categorias</h3>
            <div class="categories-container">
                <ul id="categories-list">
                    <?php
                        foreach($categories as $categorie):
                    ?>
                        <li>
                            <a href=""><?= $categorie; ?></a>
                        </li>
                    <?php
                        endforeach;
                    ?>
                </ul>  
            </div>
        </div>
     </aside>
    </main>
   
<?php
    include_once("templates/footer.php");
?>