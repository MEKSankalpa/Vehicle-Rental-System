//sweet scroll js
document.addEventListener(
    'DOMContentLoaded',
    () => {
      const scroller = new SweetScroll({
      
        trigger: '[data-scroll]',
        header: '[data-scroll-header]',
        duration: 1000,
        easing: 'easeInOutQuart',
        offset: 0,
        vertical: true,
        horizontal: false,
        cancellable: true,
        updateURL: false,
        preventDefault: true,
        stopPropagation: true,
      });
    },
    false,
  );