<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use DI\Container;
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Symfony\Component\String\UnicodeString;


//$app = AppFactory::create();
//$app->get('/', function ($request, $response){
//    $response->write('Welcome to Hexlet!');
//    return $response;
//});
//
//$app->run();
//
//$app = AppFactory::create();
//
//$app->get('/phones', function ($request, $response) {
//   return $response->write('GET /users');
//});
//
//$app->post('/users', function ($request, $response) {
//    return $response->write('POST /users');
//});
//$app->run();


//                 LESSON 8  Обработчики запросов
//=======================================================


//$faker = \Faker\Factory::create();
//$faker->seed(1234);
//
//$domains = [];
//for ($i = 0; $i < 10; $i++) {
//    $domains[] = $faker->domainName;
//}
//
//$phones = [];
//for ($i = 0; $i < 10; $i++) {
//    $phones[] = $faker->phoneNumber;
//}
//
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/', function ($request, $response) {
//    return $response->write('go to the /phones or /domains');
//});
//
//// BEGIN (write your solution here)
//$app->get('/phones', function ($request, $response) use ($phones) {
//   return $response->write(json_encode($phones));
//});
//
//$app->get('/domains', function ($request, $response) use ($domains) {
//   return $response->write(json_encode($domains));
//});
//// END
//
//$app->run();

//                       LESSON 9 HTTP-сессия (запрос и ответ)
//=======================================================

//$app = AppFactory::create();
//$app->post('/users', function ($request, $response) {
//    return $response->withStatus(302);
//});
//
//$app->run();


//=======================================================

//
//$companies = Generator::generate(100);

//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/', function ($request, $response) {
//    return $response->write('go to the /companies');
//});
////
//$app->get('/companies', function ($request, $response) use ($companies) {
//    $page = $request->getQueryParam('page', 1);
//    $per = $request->getQueryParam('per', 5);
//    $offset = ($page - 1) * $per;
//    $pagedCompany = array_slice($companies, $offset, $per);
//    return $response->withJson($pagedCompany);
//});
//
//$app->run();

//                       LESSON 10 Динамические маршруты
//=======================================================

//$app = AppFactory::create();
//
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/courses/{courseId}/lessons/{lessonId}', function ($request, $response, $args) {
//    $courseId = $args['courseId'];
//    $lessonId = $args['lessonId'];
//    return $response->write("Course id: $courseId lesson $lessonId");
//});
//
//$app->run();

//=======================================================

//$companies = Generator::generate(100);
//
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/', function ($request, $response, $args) {
//    return $response->write('open something like (you can change id): /companies/5');
//});
//
//$app->get('/companies/{id}', function ($request, $response, $args) use ($companies) {
//    $id = $args['id'];
//    $collection = collect($companies);
//    $company = $collection->firstWhere('id', $id);
//    if (null === $company) {
//        return $response->write('Page not found')->withStatus(404);
//    }
//    return $response->withJson($company);
//});
//
//$app->run();


//                       LESSON 11 Шаблонизатор
//=======================================================

//$container = new Container();
//$container->set('renderer', function () {
//    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
//});
//$app = AppFactory::createFromContainer($container);
//$app->addErrorMiddleware(true, true, true);
//
////$app->get('/users/{id}', function ($request, $response, $args) {
////    $params = ['id' => $args['id'], 'nickname' => 'user-' . $args['id']];
////    return $this->get('renderer')->render($response, '/users/show.phtml', $params);
////});
//
//$companies = Generator::generate(10);
//
//$app->get('/companies', function ($request, $response) use ($companies) {
//    $params = ['company' => $companies];
//    return $this->get('renderer')->render($response, 'companies/index.phtml', $params);
//});
//
//$app->run();


//=======================================================

//$users = GeneratorUsers::generate(100);
//$container = new Container();
//$container->set('renderer', function () {
//    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
//});
//
//AppFactory::setContainer($container);
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
////$app->get('/', function ($request, $response) {
////    return $this->get('renderer')->render($response, 'users/index.phtml');
////});
//
//// BEGIN (write your solution here)
//$app->get('/users', function ($request, $response) use ($users) {
//
//    $params = ['users' => $users];
//    return $this->get('renderer')->render($response, 'users/index.phtml', $params);
//});
//
//$app->get('/users/{id}', function ($request, $response, $args) use ($users) {
//    $id = $args['id'];
//    $user = collect($users)->firstWhere('id', $id);
//    $params = ['user' => $user];
//    return $this->get('renderer')->render($response, 'users/show.phtml', $params);
//});
//// END
//
//$app->run();


//                       LESSON 13 Шаблонизатор
//=======================================================

//$container = new Container();
//$container->set('renderer', function () {
//    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
//});
//
//AppFactory::setContainer($container);
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$users = ['mike', 'mishel', 'adel', 'keks', 'kamila', 'lala'];
//
//$app->get('/users', function ($request, $response) use ($users) {
//    $term = $request->getQueryParam('term', '');
//    if ($term) {
//        $filteredUsers = array_filter($users, function ($user) use ($term) {
//            return str_contains(strtolower($user), strtolower($term));
//        });
//    } else {
//        $filteredUsers = [];
//    }
//
//    $params = ['users' => $filteredUsers, 'term' => $term];
//    return $this->get('renderer')->render($response, 'users/index.phtml', $params);
//});
//
//$app->run();

//=======================================================

//$users = GeneratorUsers::generate(100);
//$container = new Container();
//$container->set('renderer', function () {
//    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
//});
//
//AppFactory::setContainer($container);
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/', function ($request, $response) {
//    return $this->get('renderer')->render($response, 'users/index.phtml');
//});
//
//$app->get('/users', function ($request, $response) use ($users) {
//    $term = $request->getQueryParam('term', '');
//    if (!empty($term)) {
//        $users = collect($users)->filter(function ($user) use ($term) {
//            return Str::startsWith(strtolower($user['firstName']), strtolower($term));
//        })->toArray();
//    } else {
//        $users = [];
//    }
//    $params = ['users' => $users, 'term' => $term];
//    return $this->get('renderer')->render($response, 'users/index.phtml', $params);
//});
//
//$app->run();

//           LESSON 15 Модифицирующие формы
//=======================================================

$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});
AppFactory::setContainer($container);
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);
$router = $app->getRouteCollector()->getRouteParser();

$app->get('/users/new', function ($request, $response) {
    $params = [
        'user' => ['nickname' => '', 'email' => ''],
        'errors' => ''
    ];
    return $this->get('renderer')->render($response, 'users/new.phtml', $params);
})->setName('users_new');

$app->get('/users', function ($request, $response) {
    $users = new UserRepository();
    $users = $users->getAllUsers();
    return $this->get('renderer')->render($response, 'users/index.phtml', ['users' => $users]);
})->setName('users');

$app->post('/users', function ($request, $response) use ($router) {
    $repo = new UserRepository();
    $validator = new Validator();
    $user = $request->getParsedBodyParam('user');
    $errors = $validator->validate($user);

    if (count($errors) === 0) {
        $repo->saveToFile($user);
        return $response->withRedirect($router->urlFor('users'), 302);
    }

    $params = [
        'user' => $user,
        'errors' => $errors
    ];

    return $this->get('renderer')->render($response, 'users/new.phtml', $params);

});

$app->run();

//=======================================================

//$repo = new CourseRepository();
//
//$container = new Container();
//$container->set('renderer', function () {
//    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
//});
//
//$app = AppFactory::createFromContainer($container);
//$app->addErrorMiddleware(true, true, true);
//
//$app->get('/', function ($request, $response) {
//    return $this->get('renderer')->render($response, 'index.phtml');
//});
//
//$app->get('/courses', function ($request, $response) use ($repo) {
//    $params = [
//        'courses' => $repo->all()
//    ];
//    return $this->get('renderer')->render($response, 'courses/index.phtml', $params);
//});
//
//// BEGIN (write your solution here)
//$app->get('/courses/new', function ($request, $response) {
//    $params = [
//        'course' => ['paid' => '', 'title' => ''],
//        'errors' => []
//    ];
//    return $this->get('renderer')->render($response, 'courses/new.phtml', $params);
//});
//
//$app->post('/courses', function ($request, $response) use ($repo) {
//    $validator = new Validator();
//    $course = $request->getParsedBodyParam('course', []);
//    $errors = $validator->validate($course);
//    if (count($errors) === 0) {
//        $repo->save($course);
//        return $response->withRedirect('/courses', 302);
//    }
//    $params = ['course' => $course, 'errors' => $errors];
//    return $this->get('renderer')->render($response, 'courses/new.phtml', $params)->withStatus(422);
//});
//// END
//
//$app->run();