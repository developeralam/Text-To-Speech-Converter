<?php
  if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $text = htmlspecialchars($text);
    $text = rawurlencode($text);
    $output = file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$text.'&tl=en-IN');
    $player = '<audio controls="controls" autoplay><source src="data:audio/mpeg;base64,'.base64_encode($output).'"></source></audio> <a class=" btn btn-info" href="data:audio/mpeg;base64,'.base64_encode($output).'" download>Download</a>';
    echo $player;

  }