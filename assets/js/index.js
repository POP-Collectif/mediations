// Lightbox
// Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
//   element.onclick = (e) => {
//     e.preventDefault();
//     basicLightbox.create(`<img src="${element.href}">`).show();
//   };
// });

var navScreenContainer  = document.getElementById('nav-screen-container');
var navScreenButton     = document.getElementById('nav-screen-button');

// if (navScreenButton) {
//   navScreenButton.addEventListener("click", toggleNavScreen);
// }
//
// function toggleNavScreen(event){
//   navScreenContainer.classList.toggle('display')
//   // document.body.classList.toggle('no-scroll')
//
// }

const navbar = document.getElementById("navbar")




// const summaryArticle = document.querySelector('.summary-article')
//
// if (summaryArticle) {
//   window.addEventListener('scroll', function(event){ updateSummaryProgress() })
//   window.addEventListener('resize', function(event){ updateSummaryProgress() })
// }
//
// function updateSummaryProgress() {
//   let elementInViewport = false
//
//   document.querySelectorAll('.summary-article').forEach((item) => {
//
//     let articleId = item.dataset.article
//
//     if (isInViewport(item.querySelector('.article-thumbnail-title span[id]'))) {
//
//       document.body.querySelector('li[data-article="'+articleId+'"]')
//
//       document.body.querySelectorAll('.summary-progress li').forEach((li) => { li.classList.remove('active')});
//
//       document.body.querySelector('li[data-article="'+articleId+'"]').classList.add('active')
//       document.body.querySelector('div.label').textContent = item.dataset.label
//
//       elementInViewport = true;
//     }
//
//   })
//
//   document.body.querySelector('.summary-progress').classList[elementInViewport ? 'add' : 'remove']('display')
// }


/* INTERSECTION OBSERVER */

function updateSummaryProgress(entries) {
  entries.forEach(entry => {

    if (entry.isIntersecting) {
      let articleId = entry.target.dataset.article;
            document.body.querySelector('li[data-article="'+articleId+'"]')

            document.body.querySelectorAll('.summary-progress div.item').forEach((item) => { item.classList.remove('active')});

            document.body.querySelector('.summary-progress div.item[data-article="'+articleId+'"]').classList.add('active')
            document.body.querySelector('.summary-progress div.label').textContent = entry.target.dataset.label

            document.body.querySelector('.summary-progress').classList.add('display')
    } else {
      entry.target.classList.remove('active')
    }
  })

  if (!entries.length) {
      document.body.querySelector('.summary-progress').classList.remove('display')
  }
}

function fadeInOnScroll(entries) {
  entries.forEach(entry => {

    if (entry.isIntersecting) {
      entry.target.classList.add('fadeIn')
    }
  })
}

let options = {
  threshold: .1,
}

let observer = new IntersectionObserver(updateSummaryProgress, options)
let observer1 = new IntersectionObserver(fadeInOnScroll, options)

let summaryArticleElements = document.querySelectorAll('.summary-article')
let layouts = document.querySelectorAll('.layout')

Array.prototype.forEach.call(summaryArticleElements, (target) => {
  observer.observe(target)
});

Array.prototype.forEach.call(layouts, (target) => {
  observer1.observe(target)
});
