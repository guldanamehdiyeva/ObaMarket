/*Modal*/
MicroModal.init({
    onShow: modal => console.info(`${modal.id} is shown`), // [1]
    onClose: modal => console.info(`${modal.id} is hidden`), // [2]
    openTrigger: 'data-custom-open', // [3]
    closeTrigger: 'data-custom-close', // [4]
    openClass: 'is-open', // [5]
    disableScroll: true, // [6]
    disableFocus: false, // [7]
    awaitOpenAnimation: false, // [8]
    awaitCloseAnimation: false, // [9]
    debugMode: true // [10]
  });


/*Menu*/
menuToggleMobile();


/*Swiper sliders*/

const sliderCardOptions = {
    breakpoints: {
        567:{
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992:{
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1200:{
            slidesPerView: 5,
            spaceBetween: 15,
        },
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction:false
    },

    slidesPerView: 1,
    spaceBetween: 15,

    navigation: {
        disabledClass:'swiper-button-disabled'
    },
    
}

const sliderSameOptions = {
   
    breakpoints: {
        567:{
            slidesPerView: 2,
            spaceBetween: 15,
        },
        
    },
    loop: true,

    autoplay: {
        delay: 6000,
        disableOnInteraction:false
    },
    slidesPerView: 1,
    spaceBetween: 15,

};

slider('#js-swiper-basic' , {
        direction: 'vertical',
        loop: true,

        pagination: {
            el: '.swiper-pagination-my',
            type:'bullets',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-my-active'
        },

        autoplay: {
            delay: 5000,
            disableOnInteraction:false
        },
      
})

slider('#js-swiper-basic2', {
    breakpoints: {
        992:{
            direction: 'vertical',
        },
    },

    pagination: {
        el: '.swiper-pagination-my2',
        type: 'bullets',
        clickable: true,
        bulletClass: 'swiper-pagination-bullet2',
        bulletActiveClass: 'swiper-pagination-bullet2-my2-active'
    },

    navigation: {
        nextEl: '.swiper-button-next-my',
        prevEl: '.swiper-button-prev-my',
        disabledClass:'swiper-button-disabled'
    },

    autoplay: {
        delay: 6000,
        disableOnInteraction:false
    }
})

slider('#js-swiper-basic3' , {...sliderCardOptions,
    ...{
        pagination: {
            el: '.swiper-pagination-my3',
            type: 'bullets',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet3',
            bulletActiveClass: 'swiper-pagination-bullet3-my3-active'
        },

        navigation: {
            nextEl: '.swiper-button-next-my3',
            prevEl: '.swiper-button-prev-my3',
        },
            
    }
})

slider('#js-swiper-basic5' , {...sliderCardOptions,
    ...{
        pagination: {
            el: '.swiper-pagination-my5',
            type: 'bullets',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet5',
            bulletActiveClass: 'swiper-pagination-bullet5-my5-active'
        },

        navigation: {
            nextEl: '.swiper-button-next-my5',
            prevEl: '.swiper-button-prev-my5',
        },
            
    }
})

slider('.js-swiper' ,{...sliderSameOptions})




/*Selectric*/
selectBox('.selectric-custom');

/*Parsley*/
formValidation('.js-parsley-validate');

/*Add input*/
addRows({
    onAdd: ($cloned, $parent, $lastChild) => {
        const rowContainer = $parent[0].dataset.rowContainer;
        mask('.js-mask-letter', 'Z', {translation:  {'Z': {pattern: /^[a-zA-ZİÇÖÜçöüĞ-ğıŞ-şƏə\s]*$/, recursive: true}}});

        if(rowContainer === 'tel') {
            // do something only for education row
        }
        $cloned.find('.input-delete').removeClass('d-none').addClass('d-flex-xy');
    },
    onDelete: (rowName, $deletedRow) => {}
});


/*Dropzone*/
//Dropzone.autoDiscover = false;
const dropZoneConfig = {
  previewsContainer: '.js-preview',
  previewTemplate: $('.js-preview-template').html() ,
  dictDefaultMessage: '',
  maxFilesize: 2, // MB
  acceptedFiles: 'image/*, .mp4, .mkv, .avi',
  url: '../_AJAX.php',
};

const myDropzone = dropZone('.js-dropzone',{
    ...dropZoneConfig,
    error: (file, message) => {
        if(file && message) {
            const uploaded = $('.'+ file.upload.uuid);
            //uploaded.find('.dz-error-message').text('spesifik error hele lazim deyil');
            uploaded.find('.dz-upload').text('');
            uploaded.find('.dz-error-message').removeClass('d-none');
            uploaded.find('.dz-delete').remove();
            setTimeout(() => { uploaded.remove() }, 2000);
            return false;
        }
    },
    addedfile: file => {
        const cloned = $(dropZoneConfig.previewTemplate).clone().addClass(file.upload.uuid);
        $('.js-dropzone').before(cloned);

        $('.dz-delete').one("click", () => myDropzone.removeFile(file));
    },
    removedfile: (file, response) => {
        $.ajax({
            url: dropZoneConfig.url,
            method: 'post',
            data: { uuid: file.upload.uuid, name: file.name, delete: true },
            success: response => {
                response = JSON.parse(response);
                if(response.success) {
                    $('.'+ file.upload.uuid).remove();
                }
            }
        });
    },
    success: (file) => {
        const uploaded = $('.'+ file.upload.uuid);
        uploaded.find('img').removeClass('d-none').attr('src', file.dataURL);
        uploaded.find('.dz-delete').removeClass('d-none');
        uploaded.find('.dz-progress').remove();
    },

});



/*Progress Bar */
$(document).ready(function(){
	function updateInputProgress(){
		var filledFields = 0;
		$(".input-progress").find("input[type=text], input[type=radio], totaluploadprogress, select").each(function(){
			if($(this).val() != "" && $('input[type=radio]').is(':checked')){
				filledFields++;
			}
		});

        
		
		var percent = Math.ceil(100 * filledFields / totalFields);
        $("#progress-inputs .progress-bar").find(".sr-only").html(percent + "% ");
		var progressBar= $("#progress-inputs .progress-bar").find(".two")
	
       
        var circleMax = $(progressBar).css('stroke-dasharray'); 
        var absValue = 227-(227*percent)/100;
        $(progressBar).css({strokeDashoffset: absValue});

        if(absValue == 0){
            $("#progress-inputs .progress-bar").find(".sr-only").css('color','#007332');
            $('.progress-submit').css('opacity','1')
            $('.progress-submit').prop('disabled', false)
        }
       
		return percent;


       
	}
	
	//Input Progress
	var totalFields = $(".input-progress").find("input[type=text], input[type=radio], totaluploadprogress, select").length;
	$(".input-progress").click(function(){
		updateInputProgress();
	});
   
    
	
});

/* Input Mask */
mask('.js-mask-letter', 'Z', {translation:  {'Z': {pattern: /^[a-zA-ZİÇÖÜçöüĞ-ğıŞ-şƏə\s]*$/, recursive: true}}});


console.log('oooo')