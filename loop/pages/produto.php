<section id="produtos">
    <h2 class="titulo">Produtos</h2>
    <main class="container">
        <div class="row">
            <?php foreach ($produtos as $key => $info) { ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <figure>
                        <img src="./img/<?= $info['poster'] ?>" alt="Poste do jogo Jedi Survivor" class="foto-produto">
                        <figcaption>
                            <h4>Star Wars Jedi Survivor</h4>
                            <span class="preco">R$ 139,00</span>
                            <span class="avaliacao">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>
                            </span>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </main>
</section>