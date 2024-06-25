document.addEventListener("DOMContentLoaded", function () {
  let menu = document.querySelectorAll('.menu');
  if (menu.length > 0) {
    let offset = menu[0].offsetHeight;
    window.onscroll = function() {
      if (window.scrollY > offset - 100) {
        menu[0].classList.add("homepage-fixed-menu");
      } else if (window.scrollY < offset - 20) {
        menu[0].classList.remove("homepage-fixed-menu");
      }
    }
  }

  if(document.querySelector("footer")) {
    var footer = document.querySelector("footer");
    if (footer) {
        var footerInnerDiv = footer.querySelector("div");
        if (footerInnerDiv) {
            var htmlContent = `
                <div style="color: #fff; margin-block-start: var(--wp--preset--spacing--40) !important;">
                    <small>
                        Celestium Wordpress Theme. Designed by: 
                        <a style="color: #fff;" href="https://effethemes.com/" data-type="link" data-id="https://effethemes.com/" target="_blank" rel="noreferrer noopener">
                            Effe Themes
                        </a>
                    </small>
                </div>
            `;
            footerInnerDiv.innerHTML += htmlContent;
        }
    }
}
});