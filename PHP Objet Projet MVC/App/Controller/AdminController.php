<?php

namespace App\Controller;

use Core\View\View;
use Core\Form\FormError;
use Core\Form\FormResult;
use Core\Session\Session;
use Core\Controller\Controller;
use App\Controller\AuthController;
use Core\Repository\AppRepoManager;
use Laminas\Diactoros\ServerRequest;

class AdminController extends Controller
{
    public function index(): void
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        // - Récupérer la liste des utilisateurs
        $view_data = [
            'title_tag' => 'Dashboard',
            'h1_tag' => 'Liste des utilisateurs',
            'users' => AppRepoManager::getRm()->getuserRepo()->findAll()
        ];

        $view = new View('users/list');
        $view->render($view_data);
    }

    public function update(int $id): void
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        $view_data = [
            'form_result' => Session::get(Session::FORM_RESULT),
            'user' => AppRepoManager::getRm()->getUserRepo()->findById($id)
        ];

        $view = new View('users/update');
        $view->render($view_data);
    }

    public function updateUser(ServerRequest $request): void
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        $post_data = $request->getParsedBody();
        $form_result = new FormResult();
        Session::remove(Session::FORM_RESULT, $form_result);

        // - Redéfinir les variables sécurisées
        $email = htmlspecialchars(trim(strtolower($post_data['email'])));
        $role = intval($post_data['role']);
        $id = intval($post_data['id']);

        // - Ajouter une erreur en cas de champ non rempli
        if (empty($post_data['email']) || empty($post_data['role'])) {
            $form_result->addError(new FormError('Tous les champs sont obligatoires'));
            Session::set(Session::FORM_RESULT, $form_result);
            self::redirect('/admin/update/' . $id);
        } else {
            // - Appeler le repository pour la mise à jour
            $user = AppRepoManager::getRm()->getUserRepo()->updateUserById($email, $role, $id);

            // - Vérifier s'il y a des erreurs, auquel cas on renverra vers la page de formulaire
            if ($user) {
                $form_result->addError(new FormError('Erreur lors de la mise à jour'));
                Session::set(Session::FORM_RESULT, $form_result);
                self::redirect('/admin/update/' . $id);
            }

            // - Rediriger vers la page admin.
            Session::remove(Session::FORM_RESULT, $form_result);
            self::redirect('/admin');
        }
    }

    public function deleteUser(int $id): void
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        $form_result = new FormResult();

        // - Appeler le repository pour supprimer l'utilisateur
        $user = AppRepoManager::getRm()->getUserRepo()->deleteUser($id);

        // - Retourner un message en cas d'erreurs
        if (!$user) {
            $form_result->addError(new FormError('Erreur lors de la suppression'));
            Session::set(Session::FORM_RESULT, $form_result);
            self::redirect('/admin');
        } else {
            // - Sinon vers la page admin
            Session::remove(Session::FORM_RESULT, $form_result);
            self::redirect('/admin');
        }
    }

    public function addUser(): void
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        $view_data = [
            'form_result' => Session::get(Session::FORM_RESULT),
            'title_tag' => 'Ajouter un utilisateur',
            'h1_tag' => 'Ajouter un utilisateur'
        ];

        $view = new View('users/add');
        $view->render($view_data);
    }

    public function add(ServerRequest $request)
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        $post_data = $request->getParsedBody();
        $form_result = new FormResult();

        if (empty($post_data['email']) || empty($post_data['password']) || empty($post_data['role'])) {
            $form_result->addError(new FormError('Tous les champs sont obligatoires'));
            Session::set(Session::FORM_RESULT, $form_result);
            self::redirect('/admin/addUser');
        } else {
            // - Récupérer les données du formulaire
            $email = htmlspecialchars(trim(strtolower($post_data['email'])));
            $password = htmlspecialchars(trim($post_data['password']));
            $pass_hash = AuthController::hash($password);
            $role = intval($post_data['role']);

            // - Créer un nouvel utilisateur
            $user = AppRepoManager::getRm()->getUserRepo()->createUser($email, $pass_hash, $role);
        }

        // - Message d'erreur si l'utilisateur n'est pas créé
        if (!$user) {
            $form_result->addError(new FormError("Cet utilisateur existe déjà"));
            Session::set(Session::FORM_RESULT, $form_result);
            self::redirect('/admin/addUser');
        } else {
            //sinon on redirige vers la page admin
            Session::remove(Session::FORM_RESULT);
            self::redirect('/admin');
        }
    }

    public function addToy()
    {
        // - Vérifier le statut (Admin/Subscriber)
        if (!AuthController::isAdmin()) self::redirect('/');

        // - Construire le tableau de données
        $view_data = [
            'title_tag' => 'Ajouter un jouet',
            'h1_tag' => 'Ajouter un jouet',
            'form_result' => Session::get(Session::FORM_RESULT),
            'marques' => AppRepoManager::getRm()->getBrandRepo()->findAll()
        ];

        // - Instancier
        $view = new View('toy/add');
        $view->render($view_data);
    }

    public function createToy(ServerRequest $request)
    {
        $post_data = $request->getParsedBody();
    }
}
