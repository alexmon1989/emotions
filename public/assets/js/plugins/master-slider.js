var MasterSliderShowcase2 = function () {

    return {

        //Master Slider
        initMasterSliderShowcase2: function () {
		    var slider = new MasterSlider();
		     
		    slider.control('arrows');  
		    slider.control('thumblist' , {autohide:false ,dir:'h',arrows:false, align:'bottom', width:180, height:140, margin:5, space:5});
		 
		    slider.setup('masterslider' , {
		        width:973,
		        height:615,
		        space:5,
		        view:'fade'
		    });
        }

    };

}();        