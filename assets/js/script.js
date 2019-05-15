$("#slider").vegas({
  slides: [{
    src: "assets/img/avengers-post.jpg"
  },
  {
    src: "assets/img/sonic-post.jpg"
  },
  {
    src: "assets/img/spider-post.jpg"
  },
  {
    src: "assets/img/king-post.jpg"
  }
  ],
  delay: 7000,
  timer: false,
  cover: true,
  transition: ['slideDown', 'zoomIn', 'slideUp', 'slideUp'],
  slide: 1
});
