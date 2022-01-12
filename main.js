fetch("http://127.0.0.1:5500/save.php", {
  method: "POST",
  headers: {
    "Content-type": "application/json",
  },
  body: JSON.stringify({
    name: exam_id,
    email: userId,
    password: window.question_id,
  }),
})
  .then((res) => res.json())
  .then(() => location.reload);
