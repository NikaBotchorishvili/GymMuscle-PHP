<header>
    <div class="container">
        <div class="left">
            <h1>MuscleGym</h1>
        </div>
        <div class="right">
            <ul>
                <?php foreach($this->data['menu'] as $key => $value): ?>

                    <li><a href="<?= $value['path'] ?>"><?= $value['name'] ?></a></li>
                    
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</header>