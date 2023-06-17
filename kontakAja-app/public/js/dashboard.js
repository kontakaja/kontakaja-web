document.addEventListener("DOMContentLoaded", function() {
  var welcomeMessages = [
    "Yuk, cek kegiatanmu hari ini!",
    "Ada kegiatan menarik apa hari ini?",
    "Jangan lupa cek agenda harianmu!",
    "Ada proyek menarik yang harus kamu kerjakan hari ini!",
    "Apa kabar? Jangan lupa cek kegiatanmu ya!",
    "Semangat untuk hari ini!",
    "Ayo, raih prestasi hari ini!",
    "Ada hal menarik yang sedang kamu kerjakan?",
    "Bagaimana rencanamu hari ini?",
    "Ada kegiatan spesial apa yang akan kamu lakukan?"
  ];

  var emojis = ["😊", "🎉", "💪", "🌟", "🥳", "🚀", "🌈", "🔥", "💼"];

  var welcomeMessageElement = document.getElementById("welcomeMessage");
  var randomIndex = Math.floor(Math.random() * welcomeMessages.length);
  var message = welcomeMessages[randomIndex];
  var words = message.split(" ");

  var formattedMessage =
    "<h2 id=\"welcomeMessage\"><br>" +
    words.slice(0, 3).join(" ") +
    "<br>" +
    words.slice(3).join(" ") +
    " " +
    emojis[Math.floor(Math.random() * emojis.length)] +
    "</h2>";

  welcomeMessageElement.outerHTML = formattedMessage;
});
