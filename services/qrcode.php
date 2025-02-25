<?php
  // Attempting to target a generic Android camera app package (this may work on some devices)
  $intentUrl = 'intent://#Intent;action=android.media.action.IMAGE_CAPTURE;package=com.android.camera;end';
  $encodedText = urlencode($intentUrl);
  // Using QuickChart API to generate the QR code
  $url = "https://quickchart.io/qr?text={$encodedText}&size=300";
  $qrCode = file_get_contents($url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code to Open Camera</title>
  <style>
    .container {
      text-align: center;
      margin-top: 50px;
    }
    img {
      max-width: 300px;
      height: auto;
    }
  </style>
</head>
<body>
  <?php require '../includes/layout.php'; ?>
  <div class="container">
    <h2>Scan this QR Code to Open Your Camera</h2>
    <?php
      if ($qrCode === false) {
          echo "Error generating QR code.";
      } else {
          echo '<img src="data:image/png;base64,' . base64_encode($qrCode) . '" alt="Scan to open camera">';
      }
    ?>
    <p><em>Note: This will work only on Android devices with a QR scanner that supports intent URLs.</em></p>
  </div>
</body>
</html>
