<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends ApiController
{
    /** @var UserRepository $userRepository */
    private $userRepository;

    /**
     * AuthController Constructor
     *
     * @param UsersRepository $usersRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Register new user
     * @param Request $request
     *
     * 
     */
    public function register(Request $request)
    {
        $ERROR_EMAIL = 'L\'email est invalide';
        $ERROR_PASSWORD = 'Le mot de passe doit comporter au moins 8 caractères, une majuscule, un nombre et un caractère special';
        $ERROR_CONFIRM_PASSWORD = 'Les mots de passe ne correspondent pas';
        $ERROR_ENTITY_ALREADY_EXIST = 'Un compte exite deja avec cette adresse';
        $REGEX_EMAIL = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i";

        // necessary to decode Json request
        $content = $request->getContent();
        $contentDecoded = json_decode($content, true);

        $email = $contentDecoded['email'];
        $password = $contentDecoded['password'];
        $passwordConfirmation = $contentDecoded['passwordConfirmation'];


        // validate the fields
        if (!array_key_exists('email', $contentDecoded) || !$email || preg_match($REGEX_EMAIL,  $email) != 1) {
            return $this->respondValidationError($ERROR_EMAIL);
        }
        if (!array_key_exists('password', $contentDecoded) || !$password || strlen($password) <= 8 || strlen($password) >= 20) {
            return $this->respondValidationError($ERROR_PASSWORD);
        }
        if (!array_key_exists('passwordConfirmation', $contentDecoded) || $password != $passwordConfirmation) {
            return $this->respondValidationError($ERROR_CONFIRM_PASSWORD);
        }

        $newUserData['email']    = $email;
        $newUserData['password'] = $password;

        $user = $this->userRepository->getuserByEmail($newUserData['email']);
        if ($user != null) {
            return $this->respondValidationError($ERROR_ENTITY_ALREADY_EXIST);
        }
        // create user
        $NewUser = $this->userRepository->createNewUser($newUserData);
        return $this->respondCreated(['_id' => $NewUser->getId(), 'email' => $NewUser->getEmail(), 'roles' => $NewUser->getRoles()]);
    }

    /**
     * api route redirects
     * @return Response
     */
    public function api()
    {
        return new Response(sprintf("Logged in as %s", $this->getUser()->getUsername()));
    }

    public function me()
    {
        return $this->respond(['id' => $this->getUser()->getId(), 'email' => $this->getUser()->getEmail(), 'roles' => $this->getUser()->getRoles()]);
    }
}
