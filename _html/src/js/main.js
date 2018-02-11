import jQuery from "jquery";
window.jQuery = jQuery;
import "slick-carousel";
import PerfectScrollbar from 'perfect-scrollbar';

(function ($) {
  require("selectric")();
  require("rangeslider.js");

  function sliderIt(slider) {
    slider.on("init", () => {
      $(".slider__arrows").insertAfter($(".slick-dots"));
    });

    slider.slick({
      arrows: true,
      nextArrow:
        '<span class="slider__btn"><span class="flaticon-next"></span></span>',
      prevArrow:
        '<span class="slider__btn"><span class="flaticon-back"></span></span>',
      fade: true,
      dots: true,
      appendArrows: $(".slider__arrows")
    });
  }

  function tabsIt(wrapper) {
    const btns = wrapper.find(".tabs__btn");
    const tabs = wrapper.find(".tab");

    btns.stop().on("click", evt => {
      evt.preventDefault();
      if ($(evt.target).closest(".tabs__btn_active").length) {
      } else {
        btns.removeClass("tabs__btn_active");
        $(evt.target).addClass("tabs__btn_active");
        tabs.stop().slideUp("fast", function () {
          tabs.eq($(evt.target).index()).slideDown("fast");
        });
      }
    });
  }

  function filterIt(wrapper) {
    const slider = wrapper.find(".shares__list");
    const filters = wrapper.find("input, select");

    const filterNow = () => {
      const country = wrapper.find(".selectric .label").text();
      const category = wrapper.find("input:checked").attr("id");

      slider.slick("slickUnfilter").slick("slickFilter", function (i, val) {
        return (
          $(val)
            .attr("data-country")
            .indexOf(country) !== -1 &&
          $(val)
            .attr("data-type")
            .indexOf(category) !== -1
        );
      });
      console.log(country, category);
    };

    slider.slick({
      slidesToShow: 4,
      nextArrow:
        '<span class="shares__arr shares__arr_next"><span class="flaticon-next"></span></span>',
      prevArrow:
        '<span class="shares__arr"><span class="flaticon-back"></span></span>',
      infinite: true,
      responsive: [
        {
          breakpoint: 1230,
          settings: {
            slidesToShow: 3,
            infinite: true
          }
        },
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    filters.on("change", filterNow);
    filters.eq(0).trigger("change");
  }

  function stepsIt(form) {
    var slidesCount = form.find(".step").length;
    form
      .on("init", function () {
        form.append('<div class="slick-ui"></div>');
        form
          .find(".slick-prev")
          .css("opacity", 0)
          .prependTo(form.find(".slick-ui"));
        form.find(".slick-dots").appendTo(form.find(".slick-ui"));
        form.find(".slick-next").appendTo(form.find(".slick-ui"));
      })
      .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        if (nextSlide === 0) {
          form.find(".slick-prev").css("opacity", 0);
          form.find(".slick-next").css("opacity", 1);
        } else if (nextSlide === slidesCount - 1) {
          form.find(".slick-prev").css("opacity", 1);
          form.find(".slick-next").css("opacity", 0);
        } else {
          form.find(".slick-prev").css("opacity", 1);
          form.find(".slick-next").css("opacity", 1);
        }
      })
      .slick({
        dots: true,
        infinite: false,
        draggable: false
      });
  }

  $("select").selectric();
  $('input[type="range"]').rangeslider({
    polyfill: false,
    rangeClass: "rangeslider",
    disabledClass: "rangeslider--disabled",
    horizontalClass: "rangeslider--horizontal",
    verticalClass: "rangeslider--vertical",
    fillClass: "rangeslider__fill",
    handleClass: "rangeslider__handle",
    onSlide: function (position, value) {
      $(".range__current").text(value);
    }
  });

  sliderIt($(".slider"));
  tabsIt($(".tabs__wrap"));
  filterIt($(".shares"));
  stepsIt($(".steps"));
  new PerfectScrollbar('.content__scrollable');
})(jQuery);
