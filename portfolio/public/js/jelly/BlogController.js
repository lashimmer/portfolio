app.controller("BlogController", function($scope, $timeout){

	$scope.current = 1;

	$scope.images = [
	    'http://40.media.tumblr.com/bdbee3a6ac23f5d768b79adb6ab7a59f/tumblr_mgxjg7w8fr1qghx25o1_500.jpg',
	    'http://40.media.tumblr.com/d22b91807c5db2230e9805bd36e7e827/tumblr_mp3tgv42N11qhttpto1_500.jpg', 
	    'http://33.media.tumblr.com/65e5959f0030ff9e9fce285efd87b55f/tumblr_n51yxgWHiE1qgb4moo1_500.gif'
	];

	$scope.current = 0;
    $scope.setCurrent = function(index) {
        $scope.current = index;
    }

    var countUp = function() {
        $scope.current += 1;
        $scope.current %= 3;
        $timeout(countUp, 5000);
    }
    
    $timeout(countUp, 5000);


    $scope.exampleData = [
		{ key: "One", y: 5 },
		{ key: "Two", y: 2 },
		{ key: "Three", y: 9 },
		{ key: "Four", y: 7 },
	];
	$scope.xFunction = function(){
	    return function(d) {
	        return d.key;
	    };
	}
	$scope.yFunction = function(){
		return function(d){
			return d.y;
		};
	}

	var colorArray = ['#FB7A86', '#FFB57C', '#70E3DA', '#83e871'];
	$scope.colorFunction = function() {
		return function(d, i) {
	    	return colorArray[i];
	    };
	}

});
