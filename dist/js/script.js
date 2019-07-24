jQuery(document).ready(function($) {
  const menuButton = $(".menu-button");
  const overlay = $(".dark-overlay");
  const menu = $(".mobile-menu");
  const links = menu.find(".has-submenu a");

  links.on("click", function() {
    const $this = $(this);
    $this.parent(".has-submenu").toggleClass("opened");
    $this.next("ul").slideToggle(600, function() {
      const $this = $(this);
      if ($this.is(":hidden")) {
        $this.find("ul").hide();
        $this.find("li.has-submenu").removeClass("opened");
      }
    });
  });

  menuButton.click(function(e) {
    e.preventDefault();
    overlay.toggleClass("visible");
    menu.toggleClass("visible");
  });
  $("[data-fancybox]").fancybox({
    protect: true,
    buttons: ["zoom", "thumbs", "close"]
  });

  $(".tour-list").slick({
    autoplay: true,
    slidesToShow: 3,
    speed: 1500,
    appendArrows: ".arrows",
    prevArrow: '<span class="arrows__item arrows__item_prev"></span>',
    nextArrow: '<span class="arrows__item arrows__item_next"></span>',
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 460,
        settings: {
          slidesToShow: 1,

          centerMode: true,
          centerPadding: "40px"
        }
      }
    ]
  });
  $(".testimonial-list").slick({
    autoplay: true,
    slidesToShow: 3,

    arrows: false,
    dots: true,
    speed: 1500,
    appendDots: ".mydotts",
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 460,
        settings: {
          slidesToShow: 1,
          dots: false,
          centerMode: true,
          centerPadding: "40px"
        }
      }
    ]
  });
  new SmoothScroll('a[href*="#"]', {
    speed: 1000
  });

  /* const f = document.querySelector(".myForm");
  const els = f.elements;

  const pre = document.querySelector(".preorder");

  f.addEventListener("submit", handleSubmit, false);
  document.addEventListener("input", handleInput, false);

  function handleInput(e) {
    const item = e.target;
    if (item.dataset.validate === "1") {
      const cls = ".error_" + item.name;
      const cls1 = ".error_" + item.email;
      const err = document.querySelector(cls, cls1);

      err.textContent = "";
      item.classList.remove("is-invalid");
    }
  }

  function handleSubmit(e) {
    [...els].forEach(item => {
      if (item.dataset.validate === "1") {
        if (!item.value.trim()) {
          e.preventDefault();
          const cls = ".error_" + item.name;
          const cls1 = ".error_" + item.email;
          const err = document.querySelector(cls, cls1);
          err.textContent = "Fill this field";
          item.classList.add("is-invalid");
        } else {
          e.preventDefault();
          pre.classList.remove("preorder");
          pre.classList.add("success");
        }
      }
    });
  } */

  function initMobile() {
    console.log("is-mobile");
  }

  function initTablet() {
    console.log("is-tablet");
  }

  function initDesktop() {
    overlay.removeClass("visible");
    menu.removeClass("visible");

    menu
      .find("li.has-submenu")
      .removeClass("opened")
      .find("ul")
      .hide();
    console.log("is-desktop");
  }

  /* ssm.addStates([
    {
      id: "mobile",
      query: "(max-width: 640px)",
      onEnter: function() {
        initMobile();
      }
    },
    {
      id: "tablet",
      query: "(min-width: 641px) and (max-width: 992px)",
      onEnter: function() {
        initTablet();
      }
    },
    {
      id: "desktop",
      query: "(min-width: 993px)",
      onEnter: function() {
        initDesktop();
      }
    }
  ]); */
});
