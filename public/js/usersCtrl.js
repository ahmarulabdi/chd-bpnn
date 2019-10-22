trialAngular.controller('usersCtrl', function ($scope) {
    $scope.arrayCombineName = {
        firstName : '',
        lastName : '',
        fullName : function () {
            var combineName = $scope.arrayCombineName;
            return combineName.firstName +''+combineName.lastName;
        },
        kegiatans : [
            {'semester': 'satu','ipk': '3.6'},
            {'semester': 'dua','ipk': '3.7'},
            {'semester': 'tiga','ipk': '3.8'},
            {'semester': 'empat','ipk': '3.9'},
            {'semester': 'lima','ipk': '4.0'},
            ],
        hobis : [
            'ngoding',
            'desain',
            'analisa',
            'makan',
        ]

}

});