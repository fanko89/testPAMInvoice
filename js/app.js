(function(){
var 
	form = $('.form'),
	cache_width = form.width(),
	a4  =[ 595.28,  941.89];  // for a4 size paper width and height

$('#create_pdf').on('click',function(){
	$('body').scrollTop(0);
	createPDF();
});




//create pdf
function createPDF(){
	getCanvas().then(function(canvas){
		var 
		img = canvas.toDataURL("image/png"),
		doc = new jsPDF({
          unit:'px', 
          format:'a4'
        });     
        doc.addImage(img, 'PNG', 20, 20);
		 if(canvas.height > 916){ 
                    for(i=1; i*1021.89<canvas.height; i++){
                        doc.addPage();
                        //-215.89mm which is -8.5inches
                        doc.addImage(img, 'PNG',20,-609*i);
                    }
                }
				
        doc.save('estimate.pdf');
        form.width('cache_width');
	});
}





// create canvas object
function getCanvas(){
	form.width((a4[0]*1.33333) -80).css('max-width','none');
	return html2canvas(form,{
    	imageTimeout:2000,
    	removeContainer:false
    });	
}

}());


