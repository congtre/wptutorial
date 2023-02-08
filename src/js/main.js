$(function () {
    'use strict';

    const obj = {
        toTop: function () {
            const toTop = $('.totop');
            toTop.hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    toTop.fadeIn();
                } else {
                    toTop.fadeOut();
                }
            });
            toTop.click(function () {
                $('body,html').animate(
                    {
                        scrollTop: 0,
                    },
                    500
                );
                return false;
            });
        },
        smoothScroll: function () {
            $('a[href^="#"]').on('click', function () {
                if ($(this.hash).length) {
                    $('.nav, .menu__icon').removeClass('active');
                    loadAnchor(this.hash);
                }
            });

            $(window).on('load', function () {
                const hash = location.hash;
                if (hash !== '') {
                    loadAnchor(hash);
                }
            });

            const loadAnchor = function (element) {
                const pos = $(element).offset().top;
                const offsetY = $(window).width() > 767 ? 150 : 100;
                $('body,html').animate({ scrollTop: pos - offsetY }, 600);
            };
        },
        gnavi: function () {
            $('.hamburger').click(function () {
                $(this).toggleClass('active');
                $('.header__wrap').toggleClass('active');
            });

            $(window).on('scroll load', function () {
                if ($(this).scrollTop() > 200) {
                    $('.header').addClass('active');
                } else {
                    $('.header').removeClass('active');
                }
            });

            $(window).on('load', function () {
                $('.header__nav, .hamburger').removeClass('active');
            });
        },
        events: function () {
            const aboutMarquee = $('.about__marquee');
            const textAbout = aboutMarquee.text();
            aboutMarquee.text(textAbout.repeat(10));

            const faqQuestion = $('.faq__question');
            faqQuestion.click(function () {
                const self = $(this);
                self.toggleClass('active');
                self.next().slideToggle();
            });
        },
        animation: function () {
            const _this = this;
            const animateEles = $('.ani');

            $(window).on('load scroll', function () {
                animateEles.each(function (index, el) {
                    if (_this.inView(el)) {
                        $(el).addClass('animated');
                    }
                });
            });

            _this.splitStringHeading();
        },
        splitStringHeading: function () {
            const _this = this;
            const heading = $('.fadeText');
            heading.each(function (index, el) {
                $(el).html(_this.splitString($(el).text()));
            });
        },
        inView: function (el) {
            const distanceBelow = 100;
            const rect = el.getBoundingClientRect();
            const elementHeight = el.offsetHeight;

            return (
                rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) +
                    elementHeight -
                    distanceBelow
            );
        },
        splitString: function (str) {
            let speed = 0.1;
            if (str.length > 10) speed = 0.05;

            const strArray = str.split('');

            return strArray.map(
                (word, i) =>
                    `<span style="transition-delay: ${(speed * (i + 1)).toFixed(
                        1
                    )}s">${word}</span>`
            );
        },
        slideProjectDetail: function () {
            const slideProjecDetail = $('.js-slideProjecDetail');
            const slideCounter = $('.js-counterSlideProjectDetail');

            const updateSlideCounter = function (slick) {
                const currentSlide = slick.slickCurrentSlide() + 1;
                const slidesCount = slick.slideCount;
                slideCounter.text(currentSlide + '/' + slidesCount);
            };

            if (slideProjecDetail.length) {
                slideProjecDetail.on(
                    'init afterChange',
                    function (event, slick, currentSlide) {
                        updateSlideCounter(slick);
                    }
                );
                slideProjecDetail.slick({
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    variableWidth: true,
                    infinite: true,
                });
            }

            if ($('.js-relatedProjectDetail').length) {
                $('.js-relatedProjectDetail').slick({
                    dots: false,
                    arrows: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    variableWidth: true,
                    infinite: true,
                });
            }
        },
        search: function () {
            const searchSelectLabel = $('.js-searchSelectLabel');
            const searchOption = $('.js-searchOption');
            const searchOptionAll = $('.js-searchOptionAll');
            const searchTab = $('.js-searchTab');

            if (searchSelectLabel.length) {
                searchSelectLabel.click(function () {
                    const searchSelectList = $(this)
                        .parent()
                        .find('.js-searchSelectList');
                    searchSelectList.toggleClass('active');
                });

                searchOption.click(function () {
                    const self = $(this);
                    let cate = ['all'];

                    if (self.hasClass('js-searchOptionAll')) {
                        if (!self.hasClass('active')) {
                            searchOption.addClass('active');
                        } else {
                            searchOption.removeClass('active');
                        }
                    } else {
                        searchOptionAll.removeClass('active');
                        self.toggleClass('active');
                        cate = [];
                        searchOption.each(function (index, el) {
                            const elItem = $(el);
                            if (elItem.hasClass('active')) {
                                cate.push(elItem.data('cate'));
                            }
                        });

                        if (!searchOption.hasClass('active')) {
                            cate = ['all'];
                        }
                    }

                    $('input[name="cate"]').val(cate);
                });

                searchTab.click(function () {
                    searchTab.removeClass('active');
                    $(this).addClass('active');

                    const type = $(this).data('type');
                    $('input[name="type"]').val(type);
                });
            }
        },
        buttonLike: function () {
            const _this = this;
            const buttonLike = $('.js-buttonLike');

            buttonLike.click(function () {
                const self = $(this);
                const id = self.data('id');
                const title = self.data('title');
                _this.toggleProjectToLocalStorage(id, title);
                self.toggleClass('active');
            });
        },
        toggleProjectToLocalStorage: function (id, title) {
            const project = { id, title };
            let projectInLocalStorage =
                JSON.parse(localStorage.getItem('projectLike')) || [];
            let isExisted = false;
            let indexToRemove;

            projectInLocalStorage.forEach((item, index) => {
                if (item.id === id) {
                    isExisted = true;
                    indexToRemove = index;
                }
            });

            if (isExisted) {
                projectInLocalStorage.splice(indexToRemove, 1);
            } else {
                projectInLocalStorage.push(project);
            }

            localStorage.setItem(
                'projectLike',
                JSON.stringify(projectInLocalStorage)
            );
        },
        loadButtonLike: function () {
            $(window).on('load', function () {
                const projectInLocalStorage =
                    JSON.parse(localStorage.getItem('projectLike')) || [];
                projectInLocalStorage.forEach((item) => {
                    const element = $(`.js-buttonLike[data-id=${item.id}]`);
                    if (element) {
                        element.addClass('active');
                    }
                });
            });

            const projectInLocalStorage =
                JSON.stringify(localStorage.getItem('projectLike')) || [];

            $.ajax({
                type: 'POST',
                url: 'http://localhost:3000/00_jweb/00_dcyoung/wptutorial/wp-admin/admin-ajax.php',
                data: `objects_in_local_storage=${projectInLocalStorage}`,
                success: function (response) {
                    console.log(111);
                },
            });
        },
        init: function () {
            this.toTop();
            this.smoothScroll();
            this.gnavi();
            this.animation();
            this.events();
            this.slideProjectDetail();
            this.search();
            this.buttonLike();
            this.loadButtonLike();
        },
    };

    obj.init();
});
