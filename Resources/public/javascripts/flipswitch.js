$(document).ready(function() {
    $(".onoffswitch-checkbox").change(function() {
        let lightsId = 'app-lights';
        let lightsElement = $('#'+ lightsId);
        if (lightsElement.length === 0) {
            $('body').append('<div id="'+ lightsId +'"></div>');
            lightsElement = $('#'+ lightsId);
            lightsElement.css('height', $(document).height());
        }

        if(this.checked) {
            lightsElement.hide();
        }
        else {
            lightsElement.show();
        }
    });
});