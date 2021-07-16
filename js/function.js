

/*Hamburger Menu*/
const menuToggleMobile = () => $('.hamburger').on('click', e => __menuToggleMobileActions());
$('.js-menu-mobile').find('a').on('click', e => __menuToggleMobileActions());

const __menuToggleMobileActions = () => {
    if($('.bg-land-header').length) {
        $('body').toggleClass('overflow-h h-100-vh');
    }

    $('.hamburger').toggleClass('is-active');
    $('.js-menu-mobile').toggleClass('left-0');
    $('#js-overlay-body').toggleClass('d-none');
};





/*Advertising Closing*/
$('.delete').click( e => {
    $('.advertising').addClass('d-lg-none');
})


/*Search input*/
$("#search").click( e => {
    $('#clear').css("opacity","1"),
    $('.search').css('opacity','0')
})

$("#clear").click( e => {
    $("#clear").css('opacity', '0'),
    $('.search').css('opacity','0.4')
    $("#search").val('');
});



/*Modal*/
MicroModal.init();

/*Input Mask*/
const mask = (selector, mask, options = {}) => $(selector).mask(mask, options);



/*Slider*/
const slider =(selector, options = {}) => {
    if(!document.querySelector(selector)) { return false }

    return new Swiper(selector, { ...options});
};








/*Timer Countdown*/
$('.countdown').each(function(){
	
    ts = new Date(2022, 12, 8),
    newYear = true;
    
    if((new Date()) > ts){
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10*24*60*60*1000;
        newYear = false;
    }
        
    $(this).countdown( {
        timestamp	: ts,
        callback	: function(days, hours, minutes, seconds){
            
            var message = "";
            
            message += days + " day" + ( days==1 ? '':'s' ) + ", ";
            message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
            message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
            message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
            
           
            
           
        }
    });
  
});


/*Selectiric*/
const selectBox = (selector, options = {}) => {
    // for mobile event handler
    if ("onChangeMobile" in options && options.onChangeMobile instanceof Function) {
        options.onChangeMobile.call(selectBox, selector);
    }

    

    return $(selector).selectric(options);
};





/*Dropzone*/
const dropZone = (selector, options = {}) => {
    if(!document.querySelector(selector)) { return false }

    Dropzone.autoDiscover = false;
    return new Dropzone(selector, options);
}

/*Add input*/
const addRows = (options = {}) => {
    const defaults = {
        emptyInputs: true
    };

    options = {...defaults, ...options};

    $('[data-row-add]').on('click', e => {
        const getName = e.target.dataset.rowAdd;
        const $parent = $(`[data-row-container=${getName}]`);
        const $lastChild = $parent.find('[data-row-clone]').last();
        const $rowCloned = $(`[data-row-clone=${getName}]`);

        $rowCloned.find('select').selectric('destroy');
        const $cloned = $rowCloned.clone();
        $rowCloned.find('select').selectric('init');

        if(options.emptyInputs) {
            $cloned.find('input[type=text], textarea').val('');
        }

        $cloned[0].dataset.rowClone = '';
        $cloned.insertAfter($lastChild);
        $cloned.find('select').selectric('init');

        if ("onAdd" in options && options.onAdd instanceof Function) {
            options.onAdd.call(addRows, $cloned, $parent, $lastChild);
        }
    });

    $('body').on('click', '[data-row-delete]', e => {
        const getName = e.target.dataset.rowDelete;
        const $deletedRow = $(e.target).parents(`[data-row-clone]`).first();
        $deletedRow.remove();

        if ("onDelete" in options && options.onDelete instanceof Function) {
            options.onDelete.call(addRows, getName, $deletedRow);
        }
    });
}


console.log('yaamm')

/*Timer countdown

$('[data-countdown]').each(function(){
    var $deadline = new Date($(this).data('countdown')).getTime();

			var $dataDays = $(this).children('[data-days]');
			var $dataHours = $(this).children('[data-hours]');
			var $dataMinuts = $(this).children('[data-minuts]');
			var $dataSeconds = $(this).children('[data-seconds]');

			var x = setInterval(function(){

				var now = new Date().getTime();
				var t = $deadline - now;

				var days = Math.floor(t/(1000*60*60*24));
				var hours = Math.floor(t%(1000*60*60*24) / (1000*60*60));
				var minuts = Math.floor(t%(1000*60*60) / (1000*60));
				var seconds = Math.floor(t%(1000*60) / (1000));

				if( days < 10 ){
					days = '0'+days;
				}

				if( hours < 10 ){
					hours = '0'+hours;
				}

				if( minuts < 10 ){
					minuts = '0'+minuts;
				}

				if( seconds < 10 ){
					seconds = '0'+seconds;
				}

				$dataDays.html(days);
				$dataHours.html(hours);
				$dataMinuts.html(minuts);
				$dataSeconds.html(seconds);


				if( t <= 0 ){
					clearInterval(x);

					$dataDays.html('00');
					$dataHours.html('00');
					$dataMinuts.html('00');
					$dataSeconds.html('00');

				}

                


			},1000);
		})

*/
