var Home = Home || {};


Home.initialize=function(){
  $('.bxslider').bxSlider({
    auto: true,
    captions: true
  });
};

$(document).ready(function(){
	Home.initialize();
	
});
