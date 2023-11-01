// Obțineți toate elementele cu clasa "offices-flex-slide"
const officeSlides = document.querySelectorAll('.offices-flex-slide');

officeSlides.forEach(slide => {
  slide.addEventListener('mouseover', function() {
    // La mouseover, rotiți și schimbați poziția elementului .offices-flex-title
    const title = this.querySelector('.offices-flex-title');
    title.style.transform = 'rotate(0deg)';
    title.style.top = '10%';

    // Afișați elementul .offices-flex-about
    const about = this.querySelector('.offices-flex-about');
    about.style.opacity = '1';
  });

  slide.addEventListener('mouseout', function() {
    // La mouseout, rotiți și schimbați poziția elementului .offices-flex-title înapoi
    const title = this.querySelector('.offices-flex-title');
    title.style.transform = 'rotate(90deg)';
    title.style.top = '15%';

    // Ascundeți elementul .offices-flex-about
    const about = this.querySelector('.offices-flex-about');
    about.style.opacity = '0';
  });
});
