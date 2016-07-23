// app.js

// define our application and pull in ngRoute and ngAnimate
var animateApp = angular.module('animateApp', ['ngRoute', 'ngAnimate']);

// ROUTING ===============================================
// set our routing for this application
// each route will pull in a different controller
animateApp.config(function($routeProvider) {

    $routeProvider

        // home page
        .when('/', {
            templateUrl: 'page-home.html',
            controller: 'mainController'
        })

        // login page
        .when('/login', {
            templateUrl: 'page-login.php',
            controller: 'loginController'
        })

        // signup page
        .when('/signup', {
            templateUrl: 'page-signup.php',
            controller: 'signupController'
        })

         // menu page
        .when('/menu', {
            templateUrl: 'page-menu.php',
            controller: 'menuController'
        })

        // description page
        .when('/description', {
            templateUrl: 'page-description.php',
            controller: 'descriptionController'
        })

        // academic page
        .when('/academic', {
            templateUrl: 'page-academic.php',
            controller: 'academicController'
        })

        // view page
        .when('/view', {
            templateUrl: 'page-view.php',
            controller: 'viewController'
        })

        // achievements page
        .when('/achievements', {
            templateUrl: 'page-achievements.php',
            controller: 'achievementsController'
        })

        // del_achievements page
        .when('/del_achievements', {
            templateUrl: 'page-del_achievements.php',
            controller: 'del_achievementsController'
        })

        // experiences page
        .when('/experiences', {
            templateUrl: 'page-experiences.php',
            controller: 'experiencesController'
        })

        // del_experiences page
        .when('/del_experiences', {
            templateUrl: 'page-del_experiences.php',
            controller: 'del_experiencesController'
        })

        // finish page
        .when('/finish', {
            templateUrl: 'page-finish.php',
            controller: 'finishController'
        })

        // projects page
        .when('/projects', {
            templateUrl: 'page-projects.php',
            controller: 'projectsController'
        })

        // del-projects page
        .when('/del_projects', {
            templateUrl: 'page-del_projects.php',
            controller: 'del_projectsController'
        })

        // my_skill page
        .when('/my_skill', {
            templateUrl: 'page-my_skill.php',
            controller: 'my_skillController'
        })

        // del_skills page
        .when('/del_skills', {
            templateUrl: 'page-del_skills.php',
            controller: 'del_skillsController'
        })

        // strengths page
        .when('/strengths', {
            templateUrl: 'page-strengths.php',
            controller: 'strengthsController'
        })

        // del_strengths page
        .when('/del_strengths', {
            templateUrl: 'page-del_strengths.php',
            controller: 'del_strengthsController'
        })

        // address page
        .when('/address', {
            templateUrl: 'page-address.php',
            controller: 'addressController'
        })

        // update_address page
        .when('/update_address', {
            templateUrl: 'page-update_address.php',
            controller: 'update_addressController'
        })

        // phone_no page
        .when('/phone_no', {
            templateUrl: 'page-phone_no.php',
            controller: 'phone_noController'
        })

        // del_phone_no page
        .when('/del_phone_no', {
            templateUrl: 'page-del_phone_no.php',
            controller: 'del_phone_noController'
        })

        // web_contact page
        .when('/web_contact', {
            templateUrl: 'page-web_contact.php',
            controller: 'web_contactController'
        })

        // del_web_contact page
        .when('/del_web_contact', {
            templateUrl: 'page-del_web_contact.php',
            controller: 'del_web_contactController'
        })

        // edit page
        .when('/edit', {
            templateUrl: 'page-edit.php',
            controller: 'editController'
        })

        // hobbies page
        .when('/hobbies', {
            templateUrl: 'page-hobbies.php',
            controller: 'hobbiesController'
        })

        // del_hobbies page
        .when('/del_hobbies', {
            templateUrl: 'page-del_hobbies.php',
            controller: 'del_hobbiesController'
        })

        // admin_menu page
        .when('/admin_menu', {
            templateUrl: 'page-admin_menu.php',
            controller: 'admin_menuController'
        })

        // admin_signup page
        .when('/admin_signup', {
            templateUrl: 'page-admin_signup.php',
            controller: 'admin_signupController'
        })

        // admin_login page
        .when('/admin_login', {
            templateUrl: 'page-admin_login.php',
            controller: 'admin_loginController'
        })

        // del_user page
        .when('/del_user', {
            templateUrl: 'page-del_user.php',
            controller: 'del_userController'
        })

        // resetpswd page
        .when('/resetpswd', {
            templateUrl: 'page-resetpswd.php',
            controller: 'aboutController'
        })

        // about page
        .when('/about', {
            templateUrl: 'page-about.html',
            controller: 'aboutController'
        })

        // contact page
        .when('/contact', {
            templateUrl: 'page-contact.html',
            controller: 'contactController'
        });

});


// CONTROLLERS ============================================
// home page controller
animateApp.controller('mainController', function($scope) {
    $scope.pageClass = 'page-home';
});

// signup page controller
animateApp.controller('signupController', function($scope) {
    $scope.pageClass = 'page-signup';
});

// login page controller
animateApp.controller('loginController', function($scope) {
    $scope.pageClass = 'page-login';
});

// menu page controller
animateApp.controller('menuController', function($scope) {
    $scope.pageClass = 'page-menu';
});

// description page controller
animateApp.controller('descriptionController', function($scope) {
    $scope.pageClass = 'page-description';
});

// academic page controller
animateApp.controller('academicController', function($scope) {
    $scope.pageClass = 'page-academic';
});

// view page controller
animateApp.controller('viewController', function($scope) {
    $scope.pageClass = 'page-view';
});

// achievements page controller
animateApp.controller('achievementsController', function($scope) {
    $scope.pageClass = 'page-achievements';
});

// del_achievements page controller
animateApp.controller('del_achievementsController', function($scope) {
    $scope.pageClass = 'page-del_achievements';
});

// experiences page controller
animateApp.controller('experiencesController', function($scope) {
    $scope.pageClass = 'page-experiences';
});

// del_experiences page controller
animateApp.controller('del_experiencesController', function($scope) {
    $scope.pageClass = 'page-del_experiences';
});

// finished page controller
animateApp.controller('finishedController', function($scope) {
    $scope.pageClass = 'page-finished';
});

// projects page controller
animateApp.controller('projectsController', function($scope) {
    $scope.pageClass = 'page-projects';
});

// del_projects page controller
animateApp.controller('del-projectsController', function($scope) {
    $scope.pageClass = 'page-del_projects';
});

// my_skill page controller
animateApp.controller('my_skillController', function($scope) {
    $scope.pageClass = 'page-my_skill';
});

// del_skills page controller
animateApp.controller('del_skillsController', function($scope) {
    $scope.pageClass = 'page-del_skills';
});

// strengths page controller
animateApp.controller('strengthsController', function($scope) {
    $scope.pageClass = 'page-strengths';
});

// del_strengths page controller
animateApp.controller('del_strengthsController', function($scope) {
    $scope.pageClass = 'page-del_strengths';
});

// address page controller
animateApp.controller('addressController', function($scope) {
    $scope.pageClass = 'page-address';
});

// update_address page controller
animateApp.controller('update_addressController', function($scope) {
    $scope.pageClass = 'page-update_address';
});

// phone_no page controller
animateApp.controller('phone_noController', function($scope) {
    $scope.pageClass = 'page-phone_no';
});

// del_phone_no page controller
animateApp.controller('del_phone_noController', function($scope) {
    $scope.pageClass = 'page-del_phone_no';
});

// web_contact page controller
animateApp.controller('web_contactController', function($scope) {
    $scope.pageClass = 'page-web_contact';
});

// del_web_contact page controller
animateApp.controller('ddel_web_contactController', function($scope) {
    $scope.pageClass = 'page-del_web_contact';
});

// edit page controller
animateApp.controller('editController', function($scope) {
    $scope.pageClass = 'page-edit';
});

// hobbies page controller
animateApp.controller('hobbiesController', function($scope) {
    $scope.pageClass = 'page-hobbies';
});

// del_hobbies page controller
animateApp.controller('del_hobbiesController', function($scope) {
    $scope.pageClass = 'page-del_hobbies';
});

// admin_menu page controller
animateApp.controller('admin_menuController', function($scope) {
    $scope.pageClass = 'page-admin_menu';
});

// admin_login page controller
animateApp.controller('admin_loginController', function($scope) {
    $scope.pageClass = 'page-admin_login';
});

// admin_signup page controller
animateApp.controller('admin_signupController', function($scope) {
    $scope.pageClass = 'page-admin_signup';
});

// del_user page controller
animateApp.controller('del_userController', function($scope) {
    $scope.pageClass = 'page-del_user';
});

// about page controller
animateApp.controller('aboutController', function($scope) {
    $scope.pageClass = 'page-about';
});

// contact page controller
animateApp.controller('contactController', function($scope) {
    $scope.pageClass = 'page-contact';
});

// resetpswd page controller
animateApp.controller('contactController', function($scope) {
    $scope.pageClass = 'page-resetpswd';
});