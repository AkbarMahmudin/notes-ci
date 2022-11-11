<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <title>Notes App</title>
</head>

<body>
  <!-- START: NAVBAR -->
  <nav class="navbar">
    <h1 class="app_name">Notes APP</h1>
  </nav>
  <!-- END: NAVBAR -->

  <!-- START: MAIN CONTENT -->
  <main class="container">
    <?= $this->renderSection('content') ?>
  </main>
  <!-- END: MAIN CONTENT -->

  <!-- START: FOOTER -->
  <footer>
    &copy; Akbar Mahmudin - 2010115
  </footer>
  <!-- END: FOOTER -->

  <!-- SCRIPT -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script>
    const quill = new Quill('#form_content', {
      module: {
        toolbar: []
      },
      placeholder: 'Ketikkan catatan disini...',
      theme: 'bubble'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
      document.querySelector("input[name='content']").value = quill.root.innerHTML;
    });
  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/dom.js"></script>
</body>

</html>