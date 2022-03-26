<div class="actions">
    <form action="" method="post">
        <input type="hidden" name="action" value="update">
        <div class="input-group">
            <label for="about-title">About Title</label>
            <input type="text" name="about-title" value="<?= $data['about']['title'] ?>">
        </div>
        <div class="input-group">
            <label for="about-text">About Text</label>
            <textarea name="about-text" cols="30" rows="10"><?= $data['about']['text'] ?></textarea>
        </div>
        <button>submit</button>
    </form>
</div>

