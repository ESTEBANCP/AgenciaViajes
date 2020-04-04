 // ELIMINAR LUGARES FAVORITOS 

 function eliminarElemento(id){
	room = document.getElementById(id);	
	if (!room){
		alert("El elemento selecionado no existe");
	} else {
		eliminar = room.parentNode;
		eliminar.removeChild(room);
	}
}
  

;(function ($, window, document, undefined) {

    var pluginName = "metisMenu",
        defaults = {
            toggle: true
        };
        
    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {

            var $this = $(this.element),
                $toggle = this.settings.toggle;

            $this.find('li.active').has('ul').children('ul').addClass('collapse in');
            $this.find('li').not('.active').has('ul').children('ul').addClass('collapse');

            $this.find('li').has('ul').children('a').on('click', function (e) {
                e.preventDefault();

                $(this).parent('li').toggleClass('active').children('ul').collapse('toggle');

                if ($toggle) {
                    $(this).parent('li').siblings().removeClass('active').children('ul.in').collapse('hide');
                }
            });
        }
    };

    $.fn[ pluginName ] = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };

})(jQuery, window, document);


 //DESCONECTAR EN LA PAGINA 

 function signOut(){
    firebase.auth().signOut().then(function() {
        // Sign-out successful.
      }).catch(function(error) {
        // An error happened.
        console.log(error);
      });
    }


//BUSCAR FUNCION DEL LUGAR

function searchFunction() {
    var search = document.getElementById('search');
    var filter = search.value.toUpperCase();
    var list =document.getElementsByClassName('card-title');
    for(i=0 ;i<list.length ;i++){
      // console.log(list[i].innerText);
        if(list[i].innerText.toUpperCase().indexOf(filter) > -1){
          list[i].parentElement.parentElement.parentElement.style.display="";
        }
      else{
        var a =list[i].parentElement.parentElement.parentElement;
        a.parentElement.removeChild(a);

      }
    }
  }

