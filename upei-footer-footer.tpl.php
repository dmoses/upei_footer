<div class="upei-footer">
  <?php
    $request = drupal_http_request('http://students.upei.ca/files/misc/footer.php');
    $data = $request->data;
    if (isset($data)) {
      print $data;
    }
  ?>
</div>