<div>
  <div class="messages">
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
  <h4>Lista notatek</h4>
  <div style="font-weight: 600">
    <?php echo $params['resultList'] ?? "" ?>
  </div>
</div>