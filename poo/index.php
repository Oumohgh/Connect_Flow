<?php 

include 'src/utils/ShowData.php';
include 'src/Abstract/Model.php';
include 'src/Abstract/Person.php';
include 'src/Entity/User.php';
include 'src/Entity/Address.php';
include 'src/Entity/Contact.php';
include 'src/Exception/InputEmptyException.php';
include 'src/Database/Database.php';
include 'src/Repository/UserRepository.php';
include 'src/Service/UserService.php';
include 'src/utils/Application.php';


$userService = new UserService();






try {
    
    $userService
                ->createUser("Mohammed", "Boussouir", "Mohammed@gmail.com"
            ,       "boussouir123", "pass1234");
    
            ShowData::varDump( Application::getUsers());


    $userService
                ->createUser("Mohammed", "Boussouir", "Mohammed212@gmail.com"
            ,       "boussouir124", "pass1234");


    $userService->updateUserByUsername("boussouir123" , "Niama", "Ghalem", "Niama@simplon.co", "ISAM");


    
} catch (InputEmptyException $e) {
    ShowData::varDump($e->getMessagePersonalise());
} catch (Exception $e) {
    ShowData::varDump($e->getMessage());
} finally {
    ShowData::varDump(Application::getUsers());
}

// $user = new User("Mohamed", "Boussouir", "Mohammed@gmail.com"
//             , "boussouir123", "pass1234");


// $contact1 = new Contact("Younes", "Raji", "Youness@gmail.com", "Agadir", "Zimbabowy", "N1 rue Tata", "215 6 87 23 23 44");
// $contact2 = new Contact("Ahmed", "Ganiga", "Ahmed@gmail.com", "Safi", "Comorous", "N1 rue Tata", "215 6 87 23 23 44");

// $user->setContacts([$contact1, $contact2]);

echo "<pre>";
// var_dump( $user);
echo "</pre>";