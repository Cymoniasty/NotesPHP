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
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Tytuł</th>
            <th>Opcje</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table>
        <tbody cellpadding="0" cellspacing="0" border="0">

        </tbody>
      </table>
    </div>
  </section>
</div>