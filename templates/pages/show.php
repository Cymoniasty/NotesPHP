<div class="show">
    <?php $note = $params['note'] ?? null ?>
    <?php if ($note) : ?>
        <ul>
            <li>ID: <?php echo (int) ($note['id']) ?></li>
            <li>Tytuł: <?php echo htmlentities($note['title']) ?></li>
            <li><?php echo htmlentities($note['description']) ?> </li>
            <li>Utworzono: <?php echo htmlentities($note['created']) ?> </li>
        </ul>
        <a href="/?action=edit&id="><?php $note['id'] ?>
            <button>Edytuj</button>
        </a>
    <?php else : ?>
        <div> Brak notatki do wyświetlenia </div>
    <?php endif ?>
    <a href="/">
        <button> Powrót do listy notatek </button>
    </a>
</div>