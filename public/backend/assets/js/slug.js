// const title = document.querySelector('#title')
// const slug = document.querySelector('#slug')

// // sluggable
// title.addEventListener('change', function () {
//   fetch('/berita/checkSlug?title=' + title.value)
//     .then((response) => response.json())
//     .then((data) => (slug.value = data.slug))
// })

// // trix-editor
// document.addEventListener('trix-file-accept', function (f) {
//   f.preventDefault()
// })

// function previewImage() {
//   const image = document.querySelector('#image')
//   const previewImages = document.querySelector('.img-preview')

//   previewImages.style.display = 'block'

//   const ofReader = new FileReader()
//   ofReader.readAsDataURL(image.files[0])

//   ofReader.onload = function (oFREvent) {
//     previewImages.src = oFREvent.target.result
//   }
// }
