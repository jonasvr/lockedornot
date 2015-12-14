var myApp = angular.module( 'myApp', []);

myApp

    .service('LoginService', function($q) {

        return {
            loginUser: function(user) {
                var deferred = $q.defer();
                var promise = deferred.promise;

                if (user) {

                    console.log('Welcome ' + user[0]['first_name']);
                    deferred.resolve('Welcome ' + user['first_name'] +' '+ user['last_name']+ '!');
                } else {
                    deferred.reject('Wrong credentials.');
                }
                promise.success = function(fn) {
                    promise.then(fn);
                    return promise;
                };
                promise.error = function(fn) {
                    promise.then(null, fn);
                    return promise;
                };
                return promise;
            }
        }
    })


    .controller('userController',['$scope', '$http', 'LoginService',

        function($scope, $http, LoginService){

        $scope.doLogin = function(loginForm){
            console.log(loginForm);
            //data = {
            //    email: $scope.email,
            //    password: $scope.password
            //};

            $http({

                headers: {'Content-Type': 'application/json'},
                url:'http://lockdrnot.local.com/api/authenticate',
                method:'POST',
                data:{
                    email: $scope.email,
                    password: $scope.password
                }


            }).success(function(response){

                $http({

                    url:'http://lockdrnot.local.com/api/authenticate?token='+response['token'],
                    method: 'GET'

                }).success(
                    function (data) {

                        var snapshot = Defiant.getSnapshot(data);

                        console.log(data)

                        var search_email = '//*[email='+'"'+$scope.email+'"'+']';

                        console.log(search_email);

                        //var my_user = data['email']==$scope.email;
                       var user = JSON.search( snapshot, search_email );
                        console.log(user);

                        LoginService.loginUser(user);

                    }
                );

                console.log(response['token']);
            }).error(function(data, status, headers){

                console.log(data, status, headers)
            });

        }

    }
]);