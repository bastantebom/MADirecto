var General = General || {};
var chosen;
General.initialize = function(){
	chosen=$(".chosen-select").chosen();
};

$(document).ready(function(){
	General.initialize();
});