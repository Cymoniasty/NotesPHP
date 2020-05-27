<div class="list">
  <section>
    <div class="message">
      <?php
      if (!empty($params['before'])) {
        switch ($params['before']) {
          case 'created':
            echo "Notatka została utworzonona!";
            break;
        }
      }
      ?>
    </div>
    <div class="message">
      <?php
      if (!empty($params['error'])) {
        switch ($params['error']) {
          case 'missingNoteId':
            echo 'Niepoprawny identyfikator notatki';
            break;
          case 'noteNotFound':
            echo 'Notatka nie została znaleziona!';
            break;
        }
      }
      ?>
    </div>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Tytuł</th>
            <th>Data</th>
            <th>Opcje</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table>
        <tbody cellpadding="0" cellspacing="0" border="0">

          <?php foreach ($params['notes'] ?? [] as $note) : ?>
            <tr>
              <td><?php echo (int) $note['id'] ?> </td>
              <td><?php echo htmlentities($note['title']) ?></td>
              <td> <?php echo htmlentities($note['created']) ?></td>
              <td>
                <a href="/?action=show&id=<?php echo $note['id'] ?>">
                  <button>Pokaż</button>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </section>
</div>