const noteItem = document.querySelectorAll('.note_item')

function toDetailPage(elm) {
  const { id } = elm.dataset
  window.location = `/${id}`
}

function autoResize(elm) {
  elm.style.height = "auto";
  elm.style.height = (elm.scrollHeight)+"px";
}

function confirmDelete(elm) {
  Swal.fire({
    title: 'Catatan ini akan dihapus?',
    showDenyButton: false,
    showCancelButton: true,
    confirmButtonText: 'Hapus',
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Catatan sedang dihapus...',
        html: 'Tunggu selama <b></b> millidetik.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
        }
      })
      setTimeout(() => {
        document.querySelector('#confirm_delete').click()
      }, 2000)
    }
  })
  console.log(elm.parentElement);
}